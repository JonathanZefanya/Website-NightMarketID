<?php
/*******************************
* THIS SOURCE CREATED BY
***STAY IN TOUCH WITH ME IN :***
* Facebook : 
* Instagram : 
********************************/


namespace App\Http\Controllers;

use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SmileOneController extends Controller
{
    public function create()
    {
        $cookieFile = file_get_contents(dirname(__FILE__) . "/cookie.txt");
        preg_match_all('/PHPSESSID.([^\s]{0,200})/', $cookieFile, $phpsids);

        return view('components.admin.smileone', ['cookie' => $phpsids[1][0]]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'session' => 'required'
        ]);

        $checkLogin = self::checkLogin($request->session);

        if($checkLogin['status']){
            return back()->with('success', "Berhasil mengubah session, SmileOne User : ". $checkLogin['data']['nickname'] . "\n dan SmileOne Balance : ". $checkLogin['data']['saldo']);
        }else{
            return back()->with('error', 'Gagal mengubah session, harap perisa cookie anda kembali');
        }
    }

    public function checkid($uid, $zone)
    {
        $dataCheckId = "user_id=$uid&zone_id=$zone&pid=25&checkrole=1&pay_methond=&channel_method=";
        $postCheckId= self::postRequest("https://smile.one/merchant/mobilelegends/checkrole", $dataCheckId, self::getCookie());
        $responseRequest = json_decode(substr($postCheckId[0], $postCheckId[1]['header_size']));

        return array(
            'status' => array('code' => $responseRequest->code == 200 ? 0 : 1),
            'data' => array(
                'userNameGame' => $responseRequest->username)
        );

    }

    public function order($uid, $zone, $pid)
    {
        $validateSession = self::checkLogin();
        $saldoSebelum = $validateSession['data']['saldo'];

        if(!$validateSession['status']) return array('status' => false, 'message' => 'Gagal melakukan pembelian, harap contact Admin');

        $checkId = self::checkid($uid, $zone);

        if($checkId['status']['code'] == 1) return array('status' => false, 'message' => 'Gagal melakukan pembelian, harap contact admin');

        $postFields = 'user_id='.$uid.'&zone_id='.$zone.'&pid='.$pid.'&checkrole=&pay_methond=smilecoin&channel_method=smilecoin';
        $requestFlowId = self::postRequest('https://www.smile.one/merchant/mobilelegends/query/', $postFields, self::getCookie());
        $responseRequestHeader = substr($requestFlowId[0], 0, $requestFlowId[1]['header_size']);
        $responseRequest = json_decode(substr($requestFlowId[0], $requestFlowId[1]['header_size']));
        
        if(!isset($responseRequest->flowid)){
            return array(
                'status' => false,
                'message' => 'Gagal melakukan pembelian, harap contact Admins'
            );
        }

        $flowId = $responseRequest->flowid;

        preg_match_all('/"_csrf"\svalue="*([^"]*)/mi', self::getRequest("https://www.smile.one/merchant/mobilelegends?source=other"), $csrf);
        $csrfToken = $csrf[1][0];

        $paymentPostFields = "_csrf=$csrfToken&user_id=$uid&zone_id=$zone&pay_methond=smilecoin&product_id=$pid&channel_method=smilecoin&flowid=$flowId";
        $requestPayment = self::postRequest("https://www.smile.one/merchant/mobilelegends/pay", $paymentPostFields, self::getCookie());
        $responsePaymentHeader = substr($requestPayment[0], 0, $requestPayment[1]['header_size']);
        
        preg_match_all('/x-redirect:\s*([^\r\n]*)/mi', $responsePaymentHeader, $redirectUrl);
        
        if($redirectUrl[1][0] == "https://www.smile.one/message/message" || $redirectUrl[1][0] == "https://www.smile.one/message/error"){
            return array(
                'status' => false,
                'message' => 'Gagal melakukan pembelian, harap contact Admin'
            );
        }

        $getTransactionId = json_decode(self::getTransaction());
        $transactionId = '';
        foreach ($getTransactionId->transactionList->list as $data) {
            if ($data->goods_id == $pid && $data->user_id == $uid) {
                $transactionId = $data->increment_id;
            }
        }

        $checkSaldo = self::checkLogin();
        $saldoSesudah = $checkSaldo['data']['saldo'];

        if($saldoSebelum != $saldoSesudah){
            return array(
                'status' => true,
                'message' => 'Berhasil melakukan pembelian',
                'transactionId' => $transactionId
            );
        }else{
            return array(
                'status' => false,
                'message' => 'Gagal melakukan pembelian, harap contact Admin'
            );
        }
    }

    public function checkLogin($session = null)
    {
        $request = self::getRequest("https://www.smile.one/customer/order", $session);
        $dom = new DOMDocument($request);
        @$dom->loadHTML($request);

        $finder = new DOMXPath($dom);
        $findSaldo = $finder->query('/html/body/div[1]/div/div/div/div/div/div[1]/div[2]/div[1]/span/span[2]');
        $saldoUser = "";

        foreach($findSaldo as $saldo){
            $saldoUser = $saldo->textContent;
        }

        $findNick = $finder->query("/html/body/div[1]/div/div/div/div/div/div[1]/div[1]/div[2]/div[1]");
        
        if($findNick[0]){
            $nickname = $findNick[0]->nodeValue;

            return array(
                'status' => true,
                'data' => array(
                    'saldo' => $saldoUser,
                    'nickname' => $nickname)
            );
        }else{
            return array(
                'status' => false
            );
        }
    }

    public function getRequest($url, $phpsession = null)
    {
        $log = file_get_contents(dirname(__FILE__) . "/cookie.txt");
        preg_match_all('/PHPSESSID.([^\s]{0,200})/', $log, $phpsids);

        $old_phpsid = $phpsids[1][0];
        if ($old_phpsid != $phpsession && $phpsession != null) {
            $ubah = str_replace($old_phpsid, $phpsession, $log);
            $log = fopen(dirname(__FILE__) . "/cookie.txt", "w+");
            fwrite($log, ($ubah));
            fclose($log);
        }

        $headers = array(
            'Cookie: PHPSESSID='.$old_phpsid.';'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $resp = curl_exec($ch);

        curl_close($ch);
        return $resp;
    }

    public function postRequest($url, $post, $source)
    {
        $log = file_get_contents(dirname(__FILE__) . "/cookie.txt");
        preg_match_all('/PHPSESSID.([^\s]{0,200})/', $log, $phpsids);

        $old_phpsid = $phpsids[1][0];

        $headers = array(
            'accept: application/json, text/javascript, */*; q=0.01',
            'host: www.smile.one',
            'user-agent: Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1',
            'x-requested-with: XMLHttpRequest',
            'Cookie: source='.$source.'; PHPSESSID='.$old_phpsid.';'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $resp = curl_exec($ch);
        $info = curl_getinfo($ch);

        curl_close($ch);        
        return array($resp, $info);
    }

    public function getCookie()
    {
        $header = array(
            'Host: www.smile.one',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0',
            'Accept: application/json, text/javascript, */*; q=0.01',
            'X-Requested-With: XMLHttpRequest',
        );
        
        $ch = curl_init('https://www.smile.one/customer/account/login');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $exec = curl_exec($ch);

        preg_match_all('/set-cookie:\s*([^;]*)/mi', $exec, $source);
        return $source[1][0];
    }

    public function getTransaction($id = null, $trxId = null)
    {
        $date = Carbon::now('America/Rio_branco')->format("Y-m-d");
        $dataPembelian = json_decode(self::getRequest("https://www.smile.one/customer/activationcode/codelist?type=orderlist&p=1&pageSize=10&status=&startdate=$date&enddate=$date&key=&user_id=$id"));
        
        if(!$id){
            return json_encode(array(
                'status' => true,
                'transactionList' => $dataPembelian
            ));
        }else if($id && $trxId){
            $totalData = count($dataPembelian->list) - 1;
            if($id == $dataPembelian->list[$totalData]->user_id && $trxId == $dataPembelian->list[$totalData]->increment_id){
                return json_encode(array(
                    'status' => true,
                    'data' => array(
                        'status' => $dataPembelian->list[$totalData]->order_status
                    )
                ));
            }
        }
    }
}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Horeee!! Pesanan Berhasil</title>
</head>

<body style="margin: 0; padding: 0; font-family: 'Manrope', sans-serif; min-height: 100vh; background: #EBFAFA;">
    <center>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #EBFAFA;">
            <tr>
                <td align="center">
                    <table width="690" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding: 35px">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                    <tr>
                                        <td style="border-radius: 8px;" bgcolor="#ffffff">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td style="font-size:24px; color:#0010F7; min-width:auto !important; font-weight: bold; padding: 32px 32px 0;">
                                                        Pesanan Berhasil 📮 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="font-size:14px; color:#636E72; min-width:auto !important; line-height: 20px; padding: 32px;">
                                                        Pesanan anda dengan nomor invoice <a href="{{ route('pembelian', [$dataPembelian['orderid']]) }}">{{ $dataPembelian['orderid'] }}</a>
                                                        telah <b>berhasil</b>.
                                                        <br>
                                                        @if($dataPembelian['kategori'] == "topup")
                                                        Silakan check tujuan atau target pesanan anda, dan pastikan pesanan masuk sesuai dengan nominal yang anda pesan.
                                                        @else
                                                        <br>
                                                        <b>SN/Kode Voucher/Catatan</b> : {{ $detailProvider }}
                                                        @endif
                                                        <br>
                                                        <br>
                                                        Terima kasih telah mempercayai kami.
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="font-size:14px; color:#636E72; min-width:auto !important; line-height: 20px; padding: 0 32px 32px;">
                                                        Ini adalah pesan otomatis mohon untuk tidak membalas pesan ini. Jika anda mengalami kesulitan atau masalah apapun, mohon segera hubungi kami di cs@ymstore.xyz
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="font-size:12px; color:#B2BEC3; min-width:auto !important; line-height: 12px; text-align:center; padding-top: 42px;">
                                            Copyright © 2022
                                            <a href="#" target="_blank" style="text-decoration:none; color:#0010F7;">{{ env("APP_NAME") }}</a>
                                            All rights reserved.
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
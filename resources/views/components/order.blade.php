@extends('../main')

@section("title", $title." -")

@section('css')



<style type="text/css">
.btn-check:checked+.btn-secondary {
border: 2px solid #FFBD59;
background-color: #FFBD59 !important;
}

a {
text-decoration: none !important;
}

.button-secondary:hover {
background-color: transparent !important;
}

.card-custom {
background-color: bg-dark !important;
}

.btn-secondary {
background-color: transparent !important;
}

.rounded {
border-radius: 0% !important;
}

.card-header {
padding: 0.5rem 1rem;
margin-bottom: 0;
background-color: bg-dark;
border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header2 {
height: 70px;
/* padding: 0.5rem 1rem; */
/* margin-bottom: 0; */
/* background-color: #EF820D; */
/* border-bottom: 1px solid rgba(0, 0, 0, 0.125); */
}

.hayutopup-pgimg {
background-color: white;
border-radius: 3px;
border: 1px solid white;
}

.hayutopup-dicek {
font-size: 9px;
font-style: italic;
color: #2f2fd5;
}

.ap-otp-input {
border: 3px solid #adadad43;
border-radius: 18px;
width: 35px;
height: 53px;
margin: 4px;
text-align: center;
font-size: 35px;
}


.ap-otp-input:focus {
outline: none !important;
border: 3px solid #adadad43;
transition: 0.12s ease-in;
}

.list-group-item {
user-select: none;
}

.list-group-item:last-child {
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
}

.list-group input[type="radio"] {
display: none;
}

.list-group1 input[type="radio"] {
display: none;
}

.list-group input[type="radio"]+.list-group-item {
    text-align: center;
        cursor: pointer;
        background-color: #282C30;
        color: #dcddeb;
        border: 2px;
        border-color: transparent;
        /*border: 2px solid #ffffff;*/
        font-size: 12px;
}

.nominal-price {
font-size: 10px;
text-align: left;
}

.hayutopup-prod {
/* font-weight:600; */
color: #ffffff;
/* padding: 0%; */
text-align: left;
}

.list-group input[type="radio"]+label>.row>.col>.row>.nominal-price {
/* font-style: bold; */
font-family: 'hayutopup-comic';
font-style: italic;
}

.list-group input[type="radio"]:checked+label>.row>.col>.row>.nominal-price {
color: #f39200!important;
font-family: 'hayutopup-comic';
/* font-style: bold; */
font-style: italic;
}

.list-group input[type="radio"]+.list-group-item:before {
/* content: "\2713"; */
color: transparent;
font-weight: bold;
/* margin-right: 1em; */

}

.list-group input[type="radio"]+.list-group-item:hover {
cursor: pointer;
background-color: #adadad43;
color: #adadad43;
border-color: #f39200;
font-size: 12px;
border-radius: 10px;
}

.list-group input[type="radio"]:checked+.list-group-item:before {
color: inherit;
}

.list-group input[type="radio"]:checked+.list-group-item:after {
position: absolute;
top: 0;
right: 0;
width: 28px;
height: 26px;
content: "";
background: url(/assets/image/verified.png) top/cover;
text-align: center;
}

.list-group input[type="radio"]:checked+.list-group-item {
color: #FFBD59 !important;
font-size: 12px;
border: 2px solid #c9c9c993!important;
box-shadow: 0 0 2.22222vw #ababab, inset 0 2.40741vw 8.05556vw #adadad43, inset 0 -8.24074vw 11.48148vw #adadad43;
overflow: hidden;
}

.list-group1 input[type="radio"]:checked+.list-group-item:after {
position: absolute;
top: 0;
right: 0;
width: 28px;
height: 26px;
content: "";
background: url(/assets/image/verified.png) top/cover;
text-align: center;
}

.list-group1 input[type="radio"]:checked+.list-group-item:before {
color: inherit;
}

.list-group1 input[type="radio"]:checked+.list-group-item {
background-color: #adadad43;
color: #212529;
font-size: 12px;
display: block;
-webkit-filter: grayscale(0%);
/* Safari 6.0 - 9.0 */
filter: grayscale(0%);
}

.list-group1 input[type="radio"]+.list-group-item {
text-align: center;
padding: 15px;
cursor: pointer;
color: #fe6c17;

/* background-color: #e8e8e8;
color: #2f2fd5; */
border-color: transparent;
box-shadow: 0 2px 5px 0 #f39200, 0 5px 10px 0 rgba(0, 0, 0, 0.19);
font-size: 12px;
border-radius: 3px;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
/* Safari 6.0 - 9.0 */
filter: grayscale(100%);
}

.list-group1 input[type="radio"]+.list-group-item:hover {
cursor: pointer;
background-color: #fff;
color: #212529;
border-color: #35322d;
box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
font-size: 12px;
border-radius: 3px;
}

.list-group1 input[type="radio"]:checked+.list-group-item:before {
color: inherit;
}

.list-group1 input[type="radio"]:checked+.list-group-item {
background-color: #ffffff;
color: #fe6c17;
font-size: 12px;
display: block;
-webkit-filter: grayscale(0%);
filter: grayscale(0%);
}
.list-group1 input[type="radio"]+.list-group-item {
text-align: center;
cursor: pointer;
border-color: #f39200;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 5px 10px 0 rgb(0 0 0 / 19%);
font-size: 12px;
border-radius: 3px;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
filter: grayscale(100%);
}
.list-group-item:last-child {
border-radius: 10px;
}
.list-group-item:last-child {

}

.button-action-payment .info-top {
border-bottom: 2px solid #000;
display: flex;
flex-direction: row;
flex-wrap: nowrap;
justify-content: space-between;
margin-bottom: 10px;
padding-bottom: 10px;
}

.button-action-payment .info-bottom {
font-size: 10px;
color: #666666;
text-align: left;
line-height: 12px;
}
.button-action-payment .info-bottom {
color: #767676;
font-size: 11px;
}
.button-action-payment .info-top img {
width: 100%;
max-height: 20px;
-o-object-fit: contain;
object-fit: contain;
vertical-align: middle;
}
.button-action-payment .info-top img {
height: 20px;
-o-object-fit: contain;
object-fit: contain;
}
.button-action-payment .info-top b {
font-size: 12px;
font-weight: 600;
}
.patihiconurl {
width: 32px;
top: 20%;
right: 10%;
position: absolute;
}
.payment-img {
background-color: #fff;
border-radius: 6px;
}
.child-box .short-payment-support-info {
align-content: center;
align-items: center;
background: hsl(0deg 0% 100% / 28%);
border-bottom-left-radius: 7px;
border-bottom-right-radius: 7px;
cursor: pointer;
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: flex-end;
padding: 11px 15px;
}
.child-box .short-payment-support-info img {
height: 13px;
padding: 1px;
margin-right: 7px;
background: #fff;
border-radius: 3px;
}

.miliyan-dicek{
color:red;
}



.child-box .short-payment-support-info .open-button-action-payment {
color: #fff;
font-size: 13px;
margin-left: 10px;
}

.games-thumbnail{
background-size:cover!important;
background-repeat:no-repeat!important;
background-position:center center!important;
border-radius:20px!important;
background:url('{{ $kategori->event }}');
}
.games-thumbnail .card-body{
min-height:200px;
border-radius:20px
}
.games-thumbnail .card-body h3{

margin-top:52px;
text-transform:uppercase
}

.games-logo{
margin-bottom:20px
}
.games-logo img{
margin-left: -50px;
margin-top: -50px;
z-index:1;
position: absolute;;
border-radius: 23% !important;
width:100px
}

@media (max-width: 767px) {
.miliyan {
display: none;
}
}

.toast-warning {
background-color: #e10603 !important;
color: #fff !important;
}


</style>

@endsection

@section('content')
<div class="wrapper mb-5">
    <br>
    <div class="container">
        <div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="petunjukModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content " style="background: none; border: none;">
                  <div class="modal-body" style="background: none; border: none;">
                    <img src="{{ $kategori->petunjuk }}" alt="" class="img-fluid">
                </div>
                <div class="modal-footer" style="background: none; border: none;">
                    <button type="button" class="btn mx-auto w-25 text-white " data-bs-dismiss="modal" style="background: none; border: none;">X</button>
                </div>
                </div>
            </div>
        </div>
        <div class="card miliyan-rounded-sedang border-0 games-thumbnail" style="background-image: url('{{ $kategori->bannerlayanan  }}');">
            <div class="card-body border-0 text-center"></div>
        </div>
        <div class="games-logo text-center pb-0 mb-2 d-lg-none d-md-none">
            <img src="{{ $kategori->thumbnail  }}" alt="" class="p-0">
        </div>
            <div class="row">
                <div class="col-lg-4 mt-2 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card miliyan-rounded-sedang bg-dark shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <table>
                                                    <tr>
                                                        <td style="width: 25%;" class="miliyan">
                                                            <img src="{{ $kategori->thumbnail  }}" alt="" class="rounded-miliyan bg-dark logo-order mt-4">
                                                        </td>
                                                        <td class="mt-0 p-2">
                                                            <h4 class=" mb-0 mt-4">{{ $kategori->nama }}</h4>
                                                                <small class="col-hp2  text-muted">
                                                                <i  class="far fa-clock"></i> Open 24 Jam</small>
                                                             <div class="strip-primary"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            
                                            <div class="card-body p-0">
                                                @if($kategori->kode == "mobile-legends")
                                                <p class="mt-3">Top up diamond Mobile Legends resmi Moonton 100% legal.</p>
                                                @elseif($kategori->kode == "genshin-impact")
                                                <p class="mt-3">Top up genesis crystal Genshin Impact resmi miHoYo harga paling murah.</p>
                                                @elseif($kategori->kode == "free-fire")
                                                <p class="mt-3">Top Up diamond Free Fire resmi Garena legal 100% harga paling murah.</p>
                                                @elseif($kategori->kode == "pubg")
                                                <p class="mt-3">Top up UC PUBG Mobile resmi Tencent Midasbuy harga paling murah.</p>
                                                @elseif($kategori->kode == "lords-mobile")
                                                <p class="mt-3">Top up diamond Lords Mobile paling murah.</p>
                                                @elseif($kategori->kode == "dragon-raja")
                                                <p class="mt-3">Top Up Coupon Dragon Raja.</p>
                                                @elseif($kategori->kode == "valorant")
                                                <p class="mt-3">Top up point Valorant resmi Riot Games harga paling murah.</p>
                                                @elseif($kategori->kode == "call-of-duty")
                                                <p class="mt-3">Top up Cash Point Call of Duty Mobile 100% legal resmi Garena harga paling murah.</p>
                                                @elseif($kategori->kode == "omegalegend")
                                                <p class="mt-3">Top Up Gold Omega Legends.</p>
                                                @elseif($kategori->kode == "apex-legends")
                                                <p class="mt-3">Top Up Gold Apex Legends.</p>
                                                @elseif($kategori->kode == "tof")
                                                <p class="mt-3">Top up tanium Tower of Fantasy harga paling murah.</p>
                                                @elseif($kategori->kode == "ragnarok-m")
                                                <p class="mt-3">Top Up Big Cat Coins Ragnarok M.</p>
                                                @elseif($kategori->kode == "sausageman")
                                                <p class="mt-3">Top Up Candy Sausage Man.</p>
                                                @elseif($kategori->kode == "muorigin3")
                                                <p class="mt-3">Top Up Diamonds MU ORIGIN 3 resmi FingerFun harga paling murah.</p>
                                                @elseif($kategori->kode == "muorigin2")
                                                <p class="mt-3">Top Up Diamonds MU ORIGIN 2 resmi FingerFun harga paling murah.</p>
                                                @elseif($kategori->kode == "lightofthel")
                                                <p class="mt-3">Top Up Crystals Light of Thel.</p>
                                                @elseif($kategori->kode == "hyperfront")
                                                <p class="mt-3">Top Up Star Quartz Hyper Front.</p>
                                                @elseif($kategori->kode == "saint-seiya-awakening")
                                                <p class="mt-3">Top up coupons Saint Saiya : Awakening harga paling murah.</p>
                                                @elseif($kategori->kode == "marvel-super-war")
                                                <p class="mt-3">Top Up Star Credits MARVEL Super War</p>
                                                @elseif($kategori->kode == "betheking")
                                                <p class="mt-3">Top up gold Be The King paling murah. </p>
                                                @elseif($kategori->kode == "laplace")
                                                <p class="mt-3">Top Up Spirals Laplace M.</p>
                                                @elseif($kategori->kode == "onepuchman")
                                                <p class="mt-3">Top Up Coupon One Punch Man harga paling murah.</p>
                                                @elseif($kategori->kode == "aov")
                                                <p class="mt-3">Top up voucher Arena of Valor harga paling murah.</p>
                                                @elseif($kategori->kode == "life-after")
                                                <p class="mt-3">Top Up Credits Life After harga paling murah.</p>
                                                @elseif($kategori->kode == "tom-jerry-chase")
                                                <p class="mt-3">Top Up Diamonds Tom and Jerry.</p>
                                                @elseif($kategori->kode == "play-station")
                                                <p class="mt-3">Top up voucher Play Station Store harga paling murah.</p>
                                                @elseif($kategori->kode == "Razer-Gold")
                                                <p class="mt-3">Top up voucher Razer Gold harga paling murah.</p>
                                                @elseif($kategori->kode == "Google-Play")
                                                <p class="mt-3">Top up voucher Google Play harga paling murah.</p>
                                                @elseif($kategori->kode == "Stumble-Guys")
                                                <p class="mt-3">Top up Stumble Guys harga paling murah.</p>
                                                @elseif($kategori->kode == "Vc-Point-Blank")
                                                <p class="mt-3">Top Up PB Cash Beli Voucher Point Blank harga termurah.</p>
                                                @elseif($kategori->kode == "Steam-Wallet")
                                                <p class="mt-3">Top up Steam Wallet Indonesia harga paling murah.</p>
                                                @elseif($kategori->kode == "Garena-Shell")
                                                <p class="mt-3">Top up Voucher Garena Shell harga termurah.</p>
                                                @elseif($kategori->kode == "Vidio")
                                                <p class="mt-3">Top up voucher Video harga paling murah.</p>
                                                @elseif($kategori->kode == "ROBLOX")
                                                <p class="mt-3">Top up Voucher Roblox Gift Card.</p>
                                                @elseif($kategori->kode == "Minecraft")
                                                <p class="mt-3">Top up Voucher Minecraft Gift Code.</p>
                                                @elseif($kategori->kode == "Indosat")
                                                <p class="mt-3">Jual pulsa/data Indosat reguler harga paling murah.</p>
                                                @elseif($kategori->kode == "by-u")
                                                <p class="mt-3">Jual pulsa BY U reguler harga paling murah.</p>
                                                @elseif($kategori->kode == "XL")
                                                <p class="mt-3">Jual pulsa XL reguler harga paling murah. </p>
                                                @elseif($kategori->kode == "Tri")
                                                <p class="mt-3">Jual pulsa Three reguler harga paling murah.</p>
                                                @elseif($kategori->kode == "Smartfren")
                                                <p class="mt-3">Jual pulsa Smartfren harga paling murah.</p>
                                                @elseif($kategori->kode == "Telkomsel")
                                                <p class="mt-3">Jual pulsa Telkomsel reguler resmi 100% harga paling murah.</p>
                                                @elseif($kategori->kode == "Axis")
                                                <p class="mt-3">Jual pulsa Axis harga paling murah.</p>
                                                @endif
                                                <div>
                                                    {!! htmlspecialchars_decode($kategori->ket_layanan) !!}
                                                </div>
                                                        </p>
                                                             <p style="margin-bottom: 10px; text-align: center;">
                                                             <font size="3" color="#ff9c00">
                                                        <span style="font-weight: bolder;"></span>
                                                    </font>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="col mt-3 d-lg-block d-none">
                        <div class="card miliyan-rounded-sedang bg-dark shadow d-none">
                            <div class="card-header bg-gradient miliyan-rounded-sedang">
                                <h5 class="card-title mt-2">Penawaran Terbaik</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="card flex-row flex-wrap bg-dark">
                                            <div>
                                                <a href="/game/free-fire" class="stretched-link">
                                                    <img src="/assets/thumbnail/ff.jpg" class="card-header2 miliyan-rounded-sedang" alt="call-of-duty-mobile-icon" />
                                                </a>
                                            </div>
                                            <div class="card-body mt-2">
                                                Free Fire
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="card flex-row flex-wrap bg-dark d-none">
                                    <div>
                                        <a href="" class="stretched-link">
                                            <img src="" class="card-header2 miliyan-rounded-kecil" alt="call-of-duty-mobile-icon" />
                                        </a>
                                    </div>
                                    <div class="card-body mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-2 mb-2">
                    <div class="row">
                        <div class="col">
                            <div class="card miliyan-rounded-sedang bg-dark ">
                                <div class="card-header miliyan-rounded-sedang bg-gradient">
                                    
                                    <h5 class="card-title mt-2">Masukkan Data Akun</h5>
                                </div>
                                <div class="card-body">
                                    <div id="userData">
                                        <div class="row row-cols row-cols-md">
                                            @if($kategori->server_id && $kategori->kode != "life-after" && $kategori->kode != "joki" && $kategori->kode != "genshin-impact" && $kategori->kode != "ragnarok-m" && $kategori->kode != "tof")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">User ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <input class="form-control" placeholder="Masukkan Server" type="text" name="Server" id="zone" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "life-after")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="miskatown">Miska Town</option>
                                                        <option value="sandcastle">Sand Castle</option>
                                                        <option value="mouthswamp">Mouth Swamp</option>
                                                        <option value="redwoodtown">Red Wood Town</option>
                                                        <option value="obelisk">Oblisk</option>
                                                        <option value="fallforest">Fall Forest</option>
                                                        <option value="mountsnow">Mount Snow</option>
                                                        <option value="nancycity">Nancy City</option>
                                                        <option value="charlestown">Charles Town</option>
                                                        <option value="snowhighlands">Snow High Lands</option>
                                                        <option value="santopany">Santopany</option>
                                                        <option value="levincity">Levin City</option>
                                                        <option value="newland">New Land</option>
                                                        <option value="milestone">Mile Stone</option>
                                                        <option value="twinislands">Twin Island</option>
                                                        <option value="500007">ChaosOutpost (NA)</option>
                                                        <option value="500008">IronStride (NA)</option>
                                                        <option value="520007">ChaosCity (SEA)</option>
                                                        <option value="520008">TwinIslands (SEA)</option>
                                                        <option value="520009">HopeWall (SEA)</option>
                                                        <option value="500009">CrystalthornSea (NA)</option>
                                                        <option value="520010">LabyrinthSea (SEA)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "tof")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="">Pilih Server</option>
                                                        <option value="Southeast Asia-Osillron">Southeast Asia-Osillron</option>
                                                        <option value="Southeast Asia-Mistilteinn">Southeast Asia-Mistilteinn</option>
                                                        <option value="Southeast Asia-Illyrians">Southeast Asia-Illyrians</option>
                                                        <option value="Southeast Asia-Florione">Southeast Asia-Florione</option>
                                                        <option value="Southeast Asia-Animus">Southeast Asia-Animus</option>
                                                        <option value="Southeast Asia-Gumi Gumi">Southeast Asia-Gumi Gumi</option>
                                                        <option value="Southeast Asia-Oryza">Southeast Asia-Oryza</option>
                                                        <option value="Southeast Asia-Saeri">Southeast Asia-Saeri</option>
                                                        <option value="Southeast Asia-Phantasia">Southeast Asia-Phantasia</option>
                                                        <option value="Southeast Asia-Mechafield">Southeast Asia-Mechafield</option>
                                                        <option value="Southeast Asia-Ethereal Dream">Southeast Asia-Ethereal Dream</option>
                                                        <option value="Southeast Asia-Odyssey">Southeast Asia-Odyssey</option>
                                                        <option value="Southeast Asia-Aestral-Noa">Southeast Asia-Aestral-Noa</option>
                                                        <option value="Southeast Asia-Chandra">Southeast Asia-Chandra</option>
                                                        <option value="Southeast Asia-Aeria">Southeast Asia-Aeria</option>
                                                        <option value="Southeast Asia-Scarlet">Southeast Asia-Scarlet</option>
                                                        <option value="Southeast Asia-Fantasia">Southeast Asia-Fantasia</option>
                                                        <option value="Southeast Asia-Stardust">Southeast Asia-Stardust</option>
                                                        <option value="Southeast Asia-Arcania">Southeast Asia-Arcania</option>
                                                        <option value="Southeast Asia-Valhalla">Southeast Asia-Valhalla</option>
                                                        <option value="North America-Lunalite">North America-Lunalite</option>
                                                        <option value="North America-Sol-III">North America-Sol-III</option>
                                                        <option value="North America-Lighthouse">North America-Lighthouse</option>
                                                        <option value="North America-Silver Bridge">North America-Silver Bridge</option>
                                                        <option value="North America-The Glades">North America-The Glades</option>
                                                        <option value="North America-Nightfall">North America-Nightfall</option>
                                                        <option value="North America-Frontier">North America-Frontier</option>
                                                        <option value="North America-Libera">North America-Libera</option>
                                                        <option value="North America-Solaris">North America-Solaris</option>
                                                        <option value="North America-Freedom-Oasis">North America-Freedom-Oasis</option>
                                                        <option value="North America-The Worlds Between">North America-The Worlds Between</option>
                                                        <option value="North America-Radiant">North America-Radiant</option>
                                                        <option value="North America-Tempest">North America-Tempest</option>
                                                        <option value="North America-New Era">North America-New Era</option>
                                                        <option value="North America-Observer">North America-Observer</option>
                                                        <option value="North America-Starlight">North America-Starlight</option>
                                                        <option value="North America-Myriad">North America-Myriad</option>
                                                        <option value="North America-Oumuamua">North America-Oumuamua</option>
                                                        <option value="North America-Eternium Phantasy">North America-Eternium Phantasy</option>
                                                        <option value="North America-Azure Plane">North America-Azure Plane</option>
                                                        <option value="North America-Nirvana">North America-Nirvana</option>
                                                        <option value="Europe-Magia Przygoda Aida">Europe-Magia Przygoda Aida</option>
                                                        <option value="Europe-Transport Hub">Europe-Transport Hub</option>
                                                        <option value="Europe-The Lumina">Europe-The Lumina</option>
                                                        <option value="Europe-Lycoris">Europe-Lycoris</option>
                                                        <option value="Europe-Ether">Europe-Ether</option>
                                                        <option value="Europe-Olivine">Europe-Olivine</option>
                                                        <option value="Europe-Iter">Europe-Iter</option>
                                                        <option value="Europe-Aimanium">Europe-Aimanium</option>
                                                        <option value="Europe-Alintheus">Europe-Alintheus</option>
                                                        <option value="Europe-Andoes">Europe-Andoes</option>
                                                        <option value="Europe-Anomora">Europe-Anomora</option>
                                                        <option value="Europe-Astora">Europe-Astora</option>
                                                        <option value="Europe-Valstamm">Europe-Valstamm</option>
                                                        <option value="Europe-Blumous">Europe-Blumous</option>
                                                        <option value="Europe-Celestialrise">Europe-Celestialrise</option>
                                                        <option value="Europe-Cosmos">Europe-Cosmos</option>
                                                        <option value="Europe-Dyrnwyn">Europe-Dyrnwyn</option>
                                                        <option value="Europe-Elypium">Europe-Elypium</option>
                                                        <option value="Europe-Excalibur">Europe-Excalibur</option>
                                                        <option value="Europe-Espoir IV">Europe-Espoir IV</option>
                                                        <option value="Europe-Estrela">Europe-Estrela</option>
                                                        <option value="Europe-Ex Nihilor">Europe-Ex Nihilor</option>
                                                        <option value="Europe-Futuria">Europe-Futuria</option>
                                                        <option value="Europe-Hephaestus">Europe-Hephaestus</option>
                                                        <option value="Europe-Midgard">Europe-Midgard</option>
                                                        <option value="Europe-Kuura">Europe-Kuura</option>
                                                        <option value="Europe-Lyramiel">Europe-Lyramiel</option>
                                                        <option value="Europe-Magenta">Europe-Magenta</option>
                                                        <option value="Europe-Omnium Prime">Europe-Omnium Prime</option>
                                                        <option value="Europe-Turmus">Europe-Turmus</option>
                                                        <option value="South America-Corvus">South America-Corvus</option>
                                                        <option value="South America-Calodesma Seven">South America-Calodesma Seven</option>
                                                        <option value="South America-Columba">South America-Columba</option>
                                                        <option value="South America-Tiamat">South America-Tiamat</option>
                                                        <option value="South America-Orion">South America-Orion</option>
                                                        <option value="South America-Luna Azul">South America-Luna Azul</option>
                                                        <option value="South America-Hope">South America-Hope</option>
                                                        <option value="South America-Tanzanite">South America-Tanzanite</option>
                                                        <option value="South America-Antlia">South America-Antlia</option>
                                                        <option value="South America-Pegasus">South America-Pegasus</option>
                                                        <option value="South America-Phoenix">South America-Phoenix</option>
                                                        <option value="South America-Centaurus">South America-Centaurus</option>
                                                        <option value="South America-Cepheu">South America-Cepheu</option>
                                                        <option value="South America-Cygnus">South America-Cygnus</option>
                                                        <option value="South America-Grus">South America-Grus</option>
                                                        <option value="South America-Hydra">South America-Hydra</option>
                                                        <option value="South America-Lyra">South America-Lyra</option>
                                                        <option value="South America-Ophiuchus">South America-Ophiuchus</option>
                                                        <option value="Asia-Pacific-Cocoaiteruyo">Asia-Pacific-Cocoaiteruyo</option>
                                                        <option value="Asia-Pacific-Food Fighter">Asia-Pacific-Food Fighter</option>
                                                        <option value="Asia-Pacific-Gomap">Asia-Pacific-Gomap</option>
                                                        <option value="Asia-Pacific-Yggdrasil">Asia-Pacific-Yggdrasil</option>
                                                        <option value="Asia-Pacific-Daybreak">Asia-Pacific-Daybreak</option>
                                                        <option value="Asia-Pacific-Adventure">Asia-Pacific-Adventure</option>
                                                        <option value="Asia-Pacific-Eden">Asia-Pacific-Eden</option>
                                                        <option value="Asia-Pacific-Fate">Asia-Pacific-Fate</option>
                                                        <option value="Asia-Pacific-Nova">Asia-Pacific-Nova</option>
                                                        <option value="Asia-Pacific-Ruby">Asia-Pacific-Ruby</option>
                                                        <option value="Asia-Pacific-Babel">Asia-Pacific-Babel</option>
                                                        <option value="Asia-Pacific-Pluto">Asia-Pacific-Pluto</option>
                                                        <option value="Asia-Pacific-Sushi">Asia-Pacific-Sushi</option>
                                                        <option value="Asia-Pacific-Venus">Asia-Pacific-Venus</option>
                                                        <option value="Asia-Pacific-Galaxy">Asia-Pacific-Galaxy</option>
                                                        <option value="Asia-Pacific-Memory">Asia-Pacific-Memory</option>
                                                        <option value="Asia-Pacific-Oxygen">Asia-Pacific-Oxygen</option>
                                                        <option value="Asia-Pacific-Sakura">Asia-Pacific-Sakura</option>
                                                        <option value="Asia-Pacific-Seeker">Asia-Pacific-Seeker</option>
                                                        <option value="Asia-Pacific-Shinya">Asia-Pacific-Shinya</option>
                                                        <option value="Asia-Pacific-Stella">Asia-Pacific-Stella</option>
                                                        <option value="Asia-Pacific-Uranus">Asia-Pacific-Uranus</option>
                                                        <option value="Asia-Pacific-Utopia">Asia-Pacific-Utopia</option>
                                                        <option value="Asia-Pacific-Jupiter">Asia-Pacific-Jupiter</option>
                                                        <option value="Asia-Pacific-Sweetie">Asia-Pacific-Sweetie</option>
                                                        <option value="Asia-Pacific-Atlantis">Asia-Pacific-Atlantis</option>
                                                        <option value="Asia-Pacific-Takoyaki">Asia-Pacific-Takoyaki</option>
                                                        <option value="Asia-Pacific-Mars">Asia-Pacific-Mars</option>
                                                        </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "genshin-impact")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="america">America</option>
                                                        <option value="europe">Europa</option>
                                                        <option value="asia">Asia</option>
                                                        <option value="tw_hk_mo">TW_HK_MO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "heroes-evolved")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="-">List Server</option>
                                                        <option value="North America - LOST TEMPLE [NA]"> North America - LOST TEMPLE [NA]</option>
                                                        <option value="North America - NEW ORDER"> North America - NEW ORDER</option>
                                                        <option value="Europe - ASGARD [EU]"> Europe - ASGARD [EU]</option>
                                                        <option value="Europe - OLYMPUS [EU]"> Europe - OLYMPUS [EU]</option>
                                                        <option value="South America - AMAZON [SA]"> South America - AMAZON [SA]</option>
                                                        <option value="South America - EL DORADO [SA]"> South America - EL DORADO [SA]</option>
                                                        <option value="Asia - SHANGRI-LA [AS]"> Asia - SHANGRI-LA [AS]</option>
                                                        <option value="Asia - S1.ANGKOR [AS]"> Asia - S1.ANGKOR [AS]</option>
                                                        <option value="Asia - S2.EL NIDO [AS]"> Asia - S2.EL NIDO [AS]</option>
                                                        <option value="Asia - ไทย[TH]"> Asia - ไทย[TH]</option>
                                                        <option value="Asia - ไทยแลนด์[TH]"> Asia - ไทยแลนด์[TH]</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            @elseif($kategori->kode == "ragnarok-m")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="eternal_love">Eternal Love</option>
                                                        <option value="midnight_party">Midnight Party</option>
                                                        <option value="memory_of_faith">Memory Of Faith</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            @elseif($kategori->kode == "Indosat")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "XL")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Tri")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Smartfren")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Telkomsel")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Axis")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "by-u")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Nomor HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Canva-Pro")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Disney-Hotstar")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "iQIYI-Premium")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Netflix-Premium")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Request Profile + PIN</label>
                                                    <input class="form-control" placeholder="Masukkan Request Profile + PIN" type="text" name="Server" id="zone" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Spotify-Premium")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Nama Profile Spotify</label>
                                                    <input class="form-control" placeholder="Masukkan Nama Profile Spotify" type="text" name="Server" id="zone" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Vidio-Premier")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "WeTV-Premium")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "Youtube-Premium")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">Email</label>
                                                    <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "gopay")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "ovo")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "dana")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "linkaja")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "shopeepay")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "isaku")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">No HP</label>
                                                    <input class="form-control" placeholder="Masukkan Nomor HP" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "joki-input")
                                           <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    
                                                </div>
                                            </div>
                                           @elseif($kategori->kode == "jokipaketmurah")
                                        <div id="userData">
                                         <div class="row row-cols row-cols-md">
                                             <div class="col-lg-6">
                                                 <div class="form-group mb-3">
                                                   <label for="Email "></label>
                                                   <input class="form-control" placeholder="Masukkan Email/No HP" type="text" name="Email " id="Email " required="" fdprocessedid="z535rp" />
                                               </div>
                                            </div>
                                              <div class="col-lg-6">
                                                 <div class="form-group mb-3">
                                                    <label for="Password"></label>
                                                    <input class="form-control" placeholder="Masukkan Password" type="text" name="Password" id="Password" required="" fdprocessedid="wcyfr9" />
                                                 </div>
                                               </div>
                                           <div class="col-lg-6">
                                               <div class="form-group mb-3">
                                                   <label for="Request Hero"></label>
                                                   <input class="form-control" placeholder="Minimal Request 3 Hero" type="text" name="Request Hero" id="Request Hero" required="" fdprocessedid="2z4c6r" />
                                               </div>
                                           </div>
                                           <div class="col-lg-6">
                                               <div class="form-group mb-3">
                                                   <label for="Catatan"></label>
                                                   <input class="form-control" placeholder="Catatan Untuk Penjoki" type="text" name="Catatan" id="Catatan" required="" fdprocessedid="b99m7o" />
                                               </div>
                                           </div>
                                           <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                  <label for="Nick Name"></label>
                                                  <input class="form-control" placeholder="User ID &amp; Nick Name" type="text" name="Nick Name" id="Nick Name" required="" fdprocessedid="hws6" />
                                               </div>
                                            </div>
                                             <div class="col-lg-6">
                                                 <div class="form-group mb-3">
                                                  <label for="Login Via"></label>
                                                     <select name="Login Via" id="Login Via" class="form-select" fdprocessedid="9aoqu">
                                                       <option value="-">Login Via</option>
                                                       <option value="moonton"> Moonton (Rekomendasi)</option>
                                                       <option value="vk"> VK (Rekomendasi)</option>
                                                       <option value="tiktok"> TikTok</option>
                                                       <option value="facebook"> Facebook</option>
                                                   </select>
                                                </div>
                                            </div>
                                         </div>
                                      </div>
                                           @elseif($kategori->kode == "joki-sangean-rank")
                                        <div id="userData">
                                         <div class="row row-cols row-cols-md">
                                     <div class="col-lg-6">
                                         <div class="form-group mb-3">
                                           <label for="Email "></label>
                                           <input class="form-control" placeholder="Masukkan Email/No HP" type="text" name="Email " id="Email " required="" fdprocessedid="z535rp" />
                                       </div>
                                    </div>
                                      <div class="col-lg-6">
                                         <div class="form-group mb-3">
                                            <label for="Password"></label>
                                            <input class="form-control" placeholder="Masukkan Password" type="text" name="Password" id="Password" required="" fdprocessedid="wcyfr9" />
                                         </div>
                                       </div>
                                   <div class="col-lg-6">
                                       <div class="form-group mb-3">
                                           <label for="Request Hero"></label>
                                           <input class="form-control" placeholder="Minimal Request 3 Hero" type="text" name="Request Hero" id="Request Hero" required="" fdprocessedid="2z4c6r" />
                                       </div>
                                   </div>
                                   <div class="col-lg-6">
                                       <div class="form-group mb-3">
                                           <label for="Catatan"></label>
                                           <input class="form-control" placeholder="Catatan Untuk Penjoki" type="text" name="Catatan" id="Catatan" required="" fdprocessedid="b99m7o" />
                                       </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                          <label for="Nick Name"></label>
                                          <input class="form-control" placeholder="User ID &amp; Nick Name" type="text" name="Nick Name" id="Nick Name" required="" fdprocessedid="hws6" />
                                       </div>
                                    </div>
                                     <div class="col-lg-6">
                                         <div class="form-group mb-3">
                                          <label for="Login Via"></label>
                                             <select name="Login Via" id="Login Via" class="form-select" fdprocessedid="9aoqu">
                                               <option value="-">Login Via</option>
                                               <option value="moonton"> Moonton (Rekomendasi)</option>
                                               <option value="vk"> VK (Rekomendasi)</option>
                                               <option value="tiktok"> TikTok</option>
                                               <option value="facebook"> Facebook</option>
                                           </select>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                                 @elseif($kategori->kode == "joki-gendong")
                                 <div id="userData">
                                    <div class="row row-cols row-cols-md">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="User ID"></label>
                                                <input class="form-control" placeholder="Masukkan ID" type="number" name="User ID" id="User ID" required="" fdprocessedid="m6aoo7" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Server ID"></label>
                                                <input class="form-control" placeholder="Masukkan Server" type="number" name="Server ID" id="Server ID" required="" fdprocessedid="4n5w1" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Nick Name"></label>
                                                <input class="form-control" placeholder="Nick Name" type="text" name="Nick Name" id="Nick Name" required="" fdprocessedid="m8hoy7" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Role"></label>
                                                <select name="Role" id="Role" class="form-select" fdprocessedid="m2ap8">
                                                    <option value="-">Pilih Role</option>
                                                    <option value="roamer"> Roamer</option>
                                                    <option value="explaner"> Explaner</option>
                                                    <option value="goldlaner"> Goldlaner</option>
                                                    <option value="midlaner"> Midlaner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Booking Tanggal Main"></label>
                                                <input class="form-control" placeholder="Booking Tanggal Main" type="text" name="Booking Tanggal Main" id="Booking Tanggal Main" required="" fdprocessedid="irpsp" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Booking Jam Main"></label>
                                                <input class="form-control" placeholder="Booking Jam Main" type="text" name="Booking Jam Main" id="Booking Jam Main" required="" fdprocessedid="w6i9uc" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Catatan Untuk Penjoki"></label>
                                                <input class="form-control" placeholder="Catatan Untuk Penjoki" type="text" name="Catatan Untuk Penjoki" id="Catatan Untuk Penjoki" required="" fdprocessedid="vxxvn" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                                    @else
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="IDML">ID</label>
                                                <input type="text" class="form-control" placeholder="Masukkan ID" id="user_id">
                                                </div>
                                            </div>
                                            
                                            @endif
                                        </div>
                                    </div>
                                     @if($kategori->kode == "mobile-legends")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "genshin-impact")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "point-blank")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "aov")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "call-of-duty")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "valorant")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "pubg")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "apex-legends")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "free-fire")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "life-after")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "tof")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "ragnarok-m")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "sausageman")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "muorigin3")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "muorigin2")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "lightofthel")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "omegalegend")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "lords-mobile")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "tom-jerry-chase")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "hyperfront")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "betheking")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "marvel-super-war")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "dragon-raja")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "onepuchman")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "laplace")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "saint-seiya-awakening")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                     @if($kategori->kode == "mobile-legend")
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="row mt-3">
              <div class="col">
          <div class="card miliyan-rounded-sedang bg-dark shadow">
            <div class="card-header miliyan-rounded-sedang bg-gradient">
               
                <h5 class="card-title mt-2">Pilih Nominal</h5>
              </div>
            <div class="card-body">
                <div id="tempatNominal">
              <div class="row row-cols-2">
            @foreach($nominal as $nom)
                <div class="col-lg-4 mt-3 px-2">
                    <div class="list-group shadow h-100 ">
                        <input type="radio" name="nominal" id="{{ $nom->id }}" value="{{ $nom->id }}" data-type="diamond" >
                        <label for="{{ $nom->id }}" class="list-group-item h-100 bg-gradient">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col hayutopup-prod">{{ $nom->layanan }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col nominal-price text-white">
                                            @if($nom->harga_coret)
                                                <span class="sale-price"><i>Rp {{ number_format($nom->harga) }}</i></span>
                                                <br>
                                                <span class="regular-price ">Rp {{ number_format($nom->harga_coret) }}</span>
                                            @else
                                                <span class="sale-price">Rp {{ number_format($nom->harga) }}</span>
                                            @endif
                                        </div>
                                      </div>
                                    </div>
                                        <div class="col-lg-3 col-1 m-auto">
                                            <img src="{{ $nom->product_logo }}" class="patihiconurl">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row mt-3">
              <div class="col">
                 <div class="card miliyan-rounded-sedang bg-dark shadow">
                        <div class="card-header miliyan-rounded-sedang  bg-gradient">
                                 
                                    <h5 class="card-title text-white mt-2">Pilih Metode Pembayaran</h5>
                                </div>
                                <div class="card-body">
                                    <h6>Kode Voucher</h6>
                                 <div class="input-group rounded-full">
                            <span class="input-group-text">
                              <img width="25" src="/assets/image/icons8-ticket-50.png">
                            </span>
                            <input
                                id="voucher"
                                type="text"
                                class="form-control rounded-full border-gray-300 py-2 pl-10 pr-4 text-xs sm:text-sm"
                                id="voucher"
                                placeholder="Masukkan kode voucher"
                                fdprocessedid="kj4nxj"
                            />
                            <button
                                id="check"
                                type="button"
                                class="btn btn-primary rounded-l-none"
                            >
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="area-list-payment-method">
                                        <div class="child-box payment-drawwer shadow">
                                            <div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
                                                <div class="left">
                                                    <b><i class="fas fa-wallet" aria-hidden="true"></i> E-Wallet</b>
                                                    </div>
                                                     @foreach($pay_method->take(1) as $p)
                                                    <div class="right {{$p->code}}"></div>
                                                    @endforeach
                                                </div>
                                                <div class="button-action-payment" style="display: none;">
                                                    <div class="row row-cols-2 row-cols-md-3 p-1">
                                                        @foreach($pay_method as $p)
                                                        @if($p->tipe == 'e-walet')
                                                        <div class="col-lg-4 p-1">
                                                            <div class="list-group1 h-100">
                                                                <input type="radio" name="pembayaran" id="{{$p->code}}" value="{{$p->code}}">
                                                                <label for="{{$p->code}}" class="list-group-item h-100">
                                                                    <div class="info-top">
                                                                        <div>
                                                                            <img src="{{$p->images}}" alt="" height="10px">
                                                                        </div>
                                                                        <b class="{{$p->code}}" style="font-size: 12px;"></b>
                                                                    </div>
                                                                    <div class="info-bottom text-sm-left text-dark">
                                                                        <span class="text-dark" id="pembay">
                                                                        {{$p->name}}
                                                                        <div class="miliyan-dicek">
                                                                       <i>{{$p->keterangan}}</i>
                                                                        </div>
                                                                        </span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>  
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
                                                    @foreach($pay_method as $p)
                                                    @if($p->tipe == 'e-walet')
                                                    <img src="{{$p->images}}" class="m-1 bangjeff-pgimg" style="">
                                                    @endif
                                                    @endforeach
                                                    <a class="open-button-action-payment">
                                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            
                                          
                                            <div class="child-box payment-drawwer shadow">
                                                <div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
                                                    <div class="left">
                                                        <b><i class="fas fa-credit-card" aria-hidden="true"></i> Virtual Account</b>
                                                    </div>
                                                     @foreach($pay_method->take(1) as $p)
                                                    <div class="right {{$p->code}}"></div>
                                                    @endforeach
                                                </div>
                                                <div class="button-action-payment" style="display: none;">
                                                    <div class="row row-cols-2 row-cols-md-3 p-1">
                                                        
                                                     
                                                    @foreach($pay_method as $p)
                                                    
                                                    @if($p->tipe == 'virtual-account')
                                                        
                                                        <div class="col-lg-4 p-1">
                                                           <div class="list-group1 h-100">
                                                               <input type="radio" name="pembayaran" id="{{$p->code}}" value="{{$p->code}}">
                                                               <label for="{{$p->code}}" class="list-group-item h-100">
                                                                   <div class="info-top">
                                                                       <div>
                                                                          <img src="{{$p->images}}" alt="" height="10px">
                                                                       </div>
                                                                      <b class="{{$p->code}}" style="font-size: 11px;"></b>
                                                                   </div>
                                                                    <div class="info-bottom text-sm-left text-dark">
                                                                        {{$p->name}}
                                                                       <div class="miliyan-dicek">
                                                                          <i>{{$p->keterangan}}</i>
                                                                        </div>
                                                                   </div>
                                                               </label>
                                                           </div>
                                                        </div>
                                                        
                                                    @endif
                                                       
                                                    @endforeach
                                                    </div>
                                                </div>
                                                <div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
                                                    @foreach($pay_method as $p)
                                                    @if($p->tipe == 'virtual-account')
                                                    <img src="{{$p->images}}" class="m-1 bangjeff-pgimg" style="">
                                                    @endif
                                                    @endforeach
                                                    <a class="open-button-action-payment">
                                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="child-box payment-drawwer shadow">
                                                <div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)" data-cf-modified-02988ce5d5669a4190e81d4d-="">
                                                <div class="left">
                                                <b>
                                                <i class="fas fa-store" aria-hidden="true"></i>
                                                Convenience Store
                                                </b>
                                                </div>
                                                 @foreach($pay_method->take(1) as $p)
                                                    <div class="right {{$p->code}}"></div>
                                                    @endforeach
                                                </div>
                                                    <div class="button-action-payment" style="display: none;">
                                                        <div class="row row-cols-2 row-cols-md-3 p-1">
                                                            
                                                          @foreach($pay_method as $p)
                                                            
                                                            @if($p->tipe == 'convenience-store')
                                                        
                                                            <div class="col-lg-4 p-1">
                                                                <div class="list-group1 h-100">
                                                                    <input type="radio" name="pembayaran" id="{{$p->code}}" value="{{$p->code}}">
                                                                    <label for="{{$p->code}}" class="list-group-item h-100">
                                                                        <div class="info-top">
                                                                            <div>
                                                                                <img src="{{$p->images}}" alt="" height="10px">
                                                                            </div>  
                                                                            <b class="{{$p->code}}" style="font-size: 11px;"></b>
                                                                        </div>
                                                                        <div class="info-bottom text-sm-left text-dark">
                                                                            <span class="text-dark" id="pembay">
                                                                            {{$p->name}}
                                                                            <div class="miliyan-dicek">
                                                                             <i>{{$p->keterangan}}</i>
                                                                            </div>
                                                                            </span>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            @endif
                                                           @endforeach 
                                                        </div>
                                                    </div>
                                                <div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
                                                    @foreach($pay_method as $p)
                                                    @if($p->tipe == 'convenience-store')
                                                    <img src="{{$p->images}}">
                                                    @endif
                                                    @endforeach
                                                    <a class="open-button-action-payment">
                                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                                              <div class="child-box payment-drawwer shadow">
    <div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
        <div class="left">
            <b><i class="fas fa-flash"></i> SALDO AKUN</b>
        </div>
        @foreach($pay_method->take(1) as $p)
        <div class="right {{$p->code}}"></div>
        @endforeach
    </div>
    @guest
    <div class="button-action-payment">
        <div class="row p-1">
            <div class="col-lg-4 p-1">
                <div class="list-group1 h-100">
                    <input type="radio" name="pembayaran" id="SALDO" value="SALDO" disabled>
                    <label for="SALDO" class="list-group-item h-100">
                        <div class="info-top">
                            <div>
                                <i class="fas fa-wallet"></i>
                                {{ ENV('APP_NAME') }} E-Wallet
                            </div>
                            <b class="SALDO" style="font-size: 11px;"></b>
                        </div>
                        <div class="info-bottom text-dark">
                            <span class="text-dark" id="pembay">
                                <div class="miliyan-dicek">
                                    <i>Login untuk menggunakan nightmarketid E-Wallet</i>
                                </div>
                            </span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="button-action-payment" style="display: none;">
        <div class="row p-1">
            <div class="col-lg-4 p-1">
                <div class="list-group1 h-100">
                    <input type="radio" name="pembayaran" id="SALDO" value="SALDO">
                    <label for="SALDO" class="list-group-item h-100">
                        <div class="info-top">
                            <div>
                                <i class="fas fa-wallet"></i>
                                {{ ENV('APP_NAME') }} PAY
                            </div>
                            <b class="SALDO" style="font-size: 11px;"></b>
                        </div>
                        <div class="info-bottom text-dark">
                            <span class="text-dark" id="pembay">
                                SALDO
                                <div class="miliyan-dicek">
                                    <i>Dicek Otomatis</i>
                                </div>
                            </span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    @endguest
  <div class="short-payment-support-info">
    <span class="fas fa-wallet"></span>
    <a class="open-button-action-payment" onclick="openPaymentDrawer(this)">
        <i class="fas fa-chevron-down"></i>
    </a>
  </div>
</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card miliyan-rounded-sedang bg-dark shadow">
                                <div class="card-header miliyan-rounded-sedang bg-gradient">
                                 
                                    <h5 class="card-title mt-2">Nomor WhatsApp</h5>
                                </div>
                                <div class="card-body">
                                <div class="form-group mb-2">
                                     <small><i>Nomor ini akan dihubungi jika terjadi masalah</i></small>
                      <input class="form-control" placeholder="628xxxxx" type="number" name="nomor" id="nomor" required>
                     </div>
                      <div class="g-recaptcha" id="g-recaptcha" name="grecaptcha" data-sitekey="{{ ENV('CAPTCHA_SITE_KEY') }}"></div>
                                     <div class="row mt-3">
                                         <div class="col-lg-12 clearfix">
                                            <input type="hidden" id="apikey" name="apikey" value="">
                                             <input type="hidden" name="product_name" id="product_name" value="Mobile Legends">
                                              <input type="hidden" name="product_id" id="product_id" value="1">
                                           </div>
                                        </div>
                                     </div>
                                   </div>
                               </div>
                             </div>
                             
                    <div class="w-100 mt-2">
                      <button class="btn btn-primary rounded-miliyan w-100 btn-lg" id="order" type="button">
                         <i class="fas fa-cart-arrow-down"></i>
                       Order Now
                      </button>
                    </div>
            </div>
        </div>
    </div>
</div>
                   
                   
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script async src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
function removeClass(){  
    btnorder.className = btnorder.className.replace(new RegExp('(?:^|\\s)loading(?!\\S)'), '');
}

var btnorder = document.getElementById('btn-order');


btnorder.addEventListener("click", function() {
    btnorder.className = btnorder.className + ' loading';
    setTimeout(removeClass, 4000);
}, false);
</script>

  <script>
   function openPaymentDrawer(elem) {
    var $this = $(elem);
    if ($('input[type="radio"][name="nominal"]:checked').val() == null) {
        toastr.warning("Silahkan pilih Nominal terlebih dahulu");
        $('html,body').animate({ scrollTop: $('#tempatNominal').offset().top - 300 }, 400);
        return;
    }

    $('.payment-drawwer').not(this).each(function() {
        var $parents = $(this);
        $parents.find('.button-action-payment').slideUp(function() {
            $parents.removeClass('active');
        });

        $parents.find('.short-payment-support-info').find('img').slideDown();
        $parents.find('.short-payment-support-info').find('i').removeClass('fa-chevron-up').addClass(
            'fa-chevron-down');
    });

    var $parents = $this.parents('.child-box');

    if (!$parents.find('.button-action-payment').is(":hidden")) {
        $parents.find('.button-action-payment').slideUp(function() {
            $parents.removeClass('active');
        });

        $parents.find('.short-payment-support-info').find('img').slideDown();
        $parents.find('.short-payment-support-info').find('.fa-chevron-up').removeClass('fa-chevron-up').addClass(
            'fa-chevron-down');

    } else {
        $parents.find('.button-action-payment').slideDown(function() {
            $parents.addClass('active');
        });
        $parents.find('.short-payment-support-info').find('img').slideUp();
        $parents.find('.short-payment-support-info').find('.fa-chevron-down').addClass('fa-chevron-up').removeClass(
            'fa-chevron-down');
        
        $('html, body').animate({
            scrollTop: $('#openPaymentDrawer').offset().top - 500
        }, 400);

    }
}

  </script>
<script type="text/javascript">
    $(document).ready(function() {
        $("input[type=radio][name=nominal]").change(function() {
            var nominal = $("input[name='nominal']:checked").val();

            if (nominal) {
                $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": nominal
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    }
                })
            }
        });
        $("#order").on("click", function() {
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var voucher = $("#voucher").val();
            $.ajax({
                url: "<?php echo route('ajax.confirm-data') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'grecaptcha': grecaptcha.getResponse(),
                    'voucher': voucher
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                complete:function(){
                    grecaptcha.reset();
                },
                  success: function(res) {
                    if (res.status == true) {
                        Swal.fire({
                            icon: 'success',
                            titleText: 'Detail Pesanan',
                            html: `${res.data}`,
                            showCancelButton: true,
                            cancelButtonText: 'Cancel',
                            confirmButtonText: 'Beli Sekarang',
                            backdrop: '',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }


                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                                $.ajax({
                                    url: "<?php echo route('order') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        'voucher': voucher

                                    },
                                     beforeSend: function() {
                                        let timerInterval
                                        Swal.fire({
                                          title: 'Tunggu Sebentar',
                                          timerProgressBar: false,
                                          allowOutsideClick: false,
                                          didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                              b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                          },
                                          willClose: () => {
                                            clearInterval(timerInterval)
                                          }
                                        }).then((result) => {
                                          /* Read more about handling dismissals below */
                                          if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                          }
                                        })
                                    },
                                   success: function(resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                showConfirmButton: false,
                                                allowOutsideClick: false,
                                                // background: '#222831',
                                                // color: '#fff'
                                            });
                                            window.location = `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Gagal...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                // background: '#222831',
                                                // color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.data,
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    }
                },
                error: function(e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    }
                }
            })
        })
        
        $("#check").on("click", function(){
            var voucher = $("#voucher").val();
            var service = $("input[name='nominal']:checked").val();
            $.ajax({
                url: "<?php echo route('check.voucher') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    "_token": "<?php echo csrf_token(); ?>",
                    "voucher": voucher,
                    "service": service
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function (res){
                    Swal.fire({
                        icon: "info",
                        title: res.message,
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: true,
                        allowOutsideClick: true,
                    });                   
                    
                    if(res.harga){
                        changeHarga(res.harga);
                    }
                },
                error: function(e){
                    Swal.fire({
                        title: 'Oops...',
                        text: "Voucher tidak ditemukan",
                        icon: 'error',
                        background: '#fff',
                        color: '#000'
                    });                    
                }
            }) 
        });
        
    });
    function changeHarga(harga)
    {
        $(".OVO").html(harga);
        $(".GOPAY").html(harga);
        $(".PERMATA").html(harga);
        $(".CIMBVA").html(harga);
        $(".CIMB").html(harga);
        $(".BSI").html(harga);
        $(".BMI").html(harga);
        $(".BSIVA").html(harga);
        $(".BNI").html(harga);
        $(".BRI").html(harga);
        $(".MANDIRI").html(harga);
        $(".BCA").html(harga);
        $(".ALFAMART").html(harga);
        $(".INDOMARET").html(harga);
        $(".ALFAMIDI").html(harga);
        $(".MANDIRIVA").html(harga);
        $(".OVOS").html(harga);
        $(".QRIS").html(harga);
        $(".MYBVA").html(harga);
        $(".tfbank").html(harga);
        $(".SMSVA").html(harga);
        $(".MUAMALATVA").html(harga);
        $(".OVO").html(harga);
        $(".SHOPEEPAY").html(harga);
        $(".BSS").html(harga);
        $(".LINKAJA").html(harga);
        $(".DANA").html(harga);
        $(".SALDO").html(harga);
        $(".QRISD").html(harga);
        $(".BCATF").html(harga);
        $(".MANDIRITF").html(harga);              
    }
</script>
@endsection
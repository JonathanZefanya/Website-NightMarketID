@extends('main')

@section('content')
<div class="clearfix pt-5"></div>
<div class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="text-center pt-3 pb-2">
                    <img src="{{ $kategori->thumbnail }}" class="mb-3" style="display: block; margin: 0 auto; border-radius: 1px !important;" width="120px" height="120px">
                    <h5></h5>
                </div>
                <div class="pb-3">
                  
                                    <p><center> <h10>CARA ORDER {{ $kategori->nama }} <center> <h10></p>
                    
                        @if($kategori->kode == "mlbb-vilog")
                        1.Masukkan ID Anda <br/>
                        2.Pilih Nominal Top Up <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        @elseif($kategori->kode == "pubg-mobile")
                        1.Masukkan ID PUBG Anda <br/>
                        2.Pilih Nominal UC <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga UC masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "mobile-legend-b")
                        1.Masukkan ID Dan Server Anda <br/>
                        2.Pilih Nominal Diaomnd <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "mobile-legend-c")
                        1.Masukkan ID Dan Server Anda <br/>
                        2.Pilih Nominal Diaomnd <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "mobile-legend-starlight")
                        1.Masukkan ID Dan Server Anda <br/>
                        2.Pilih Nominal Diaomnd <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "valorant")
                        1.Masukkan RiotID &amp; Tagline Anda <br/> (Contoh: YmStore#123) <br/>
                        2.Pilih Nominal Valorant Point <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Valorant Point masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "league-of-legend")
                        1.Masukkan RiotID &amp; Tagline Anda <br/> (Contoh: YmStore#123) <br/>
                        2.Pilih Nominal Wild Cores <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Wild Cores masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "genshin-impact")
                        1.Masukkan ID Dan Pilih Server Anda <br/>
                        2.Pilih Nominal Genesis Crystal <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Genesis Crystal masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "sausage-man")
                        <li>Masukkan <b>UserID</b> Anda</li>
                        <li>Pilih <b>Nominal </b>TopUp</li>
                        <li>Pilih <b>Metode Pembayaran</b></li>
                        <li>Tulis <b>Nomor WhatsApp</b> Sesuai Petunjuk!</li>
                        <li>Klik <b>Beli </b>&amp; lakukan Pembayaran</li>
                        <li><b>Tunggu Hingga</b> Candy masuk ke akun Anda.</li>
                        @elseif($kategori->kode == "point-blank")
                        1.Masukkan ID PB Anda <br/>
                        2.Pilih Nominal PB CASH <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga PB CASH masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "higgs-domino")
                        1.Masukkan ID Domino Anda <br/>
                        2.Pilih Nominal Chip <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Chip masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "life-after")
                        1.Masukkan ID Life After Dan Pilih Server Anda <br/>
                        2.Pilih Nominal SUNCOIN <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga SUNCOIN masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "speed-drifters")
                        1.Masukkan ID Speed Drifter Anda <br/>
                        2.Pilih Nominal Diamond <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "codm")
                        1.Masukkan Player ID CODM Anda <br/>
                        2.Pilih Nominal CP <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga CP masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "free-fire")
                        1.Masukkan ID Free Fire Anda <br/>
                        2.Pilih Nominal Diaomnd <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Diamond masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "telkomsel" ||$kategori->kode == "axis" ||$kategori->kode == "xl" ||$kategori->kode == "tri" ||$kategori->kode == "indosat" ||$kategori->kode == "byu")
                        1.Masukkan Nomor Telepon Anda <br/>
                        2.Pilih Nominal Pulsa Atau Paket <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Pulsa/Paket masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "dana" ||$kategori->kode == "brizzi" ||$kategori->kode == "ovo" ||$kategori->kode == "tri" ||$kategori->kode == "link-aja" ||$kategori->kode == "shoepay")
                        1.Masukkan Nomor Telepon Anda <br/>
                        2.Pilih Nominal Top Up <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Top Up masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "yt-prem" ||$kategori->kode == "disney-hotstar")
                        1.Masukkan Email Anda <br/> 
                        [contoh akupembeli@gmail.com] <br/>
                        2.Pilih Paket <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Paket masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "netflix")
                        1.Kolom 1 Masukkan Email Anda,Dan Kolom 2 Isi Dengan Request Profil Dan Pin 4 Digit <br/>
                        2.Pilih Nominal Paket <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Paket masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @elseif($kategori->kode == "spotify")
                        1.Kolom 1 Masukkan Email Anda,Dan Kolom 2 Isi Dengan Nama Lengkap Spotify <br/>
                        2.Pilih Nominal Paket <br/>
                        3.Pilih Metode Pembayaran <br/>
                        4.Tulis Nomor WhatsApp Sesuai Petunjuk! <br/>
                        5.Klik Beli &amp; lakukan Pembayaran <br/>
                        6.Tunggu Hingga Paket masuk ke akun Anda. <br/>
                        <br/>
                        <b>LAYANAN AKTIF 24 JAM</b><br/>
                        <b>PROSES OTOMATIS 1 MENIT</b><br/>
                        @endif
                    </ol>
                </div>
            </div>
            <div class="col-sm-9">
                
                <div class="pb-3">
                    <div class="section">
                        <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">1</div>
                            <h5 style="margin-left: 45px; margin-top: 5px;">Input Data Game</h5>
                            <div class="row">
                                @if($kategori->server_id && $kategori->kode != "life-after" && $kategori->kode != "genshin-impact")
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="user_id" placeholder="User ID">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="zone" placeholder="Zone ID">
                                    </div>
                                </div>
                                @elseif($kategori->kode == "life-after")
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="user_id" placeholder="ID Life after">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <select class="form-control" id="zone">
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
                                        </select>
                                    </div>
                                </div>
                                @elseif($kategori->kode == "genshin-impact")
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="user_id" placeholder="Masukkan User ID">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <select class="form-control" id="zone">
                                            <option value="america">America</option>
                                            <option value="asia">Asia</option>
                                            <option value="Europa">Europa</option>
                                            <option value="tw_hk_mo">TW_HK_MO</option>
                                        </select>
                                    </div>
                                </div>
                                @else
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="user_id" placeholder="Masukkan User ID">
                                    </div>
                                </div>
                                @endif
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section">
                        <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">2</div>
                            <h5 style="margin-left: 45px; margin-top: 5px;">Pilih Nominal Layanan</h5>
                            <div class="row pt-3 pl-2 pr-2 mb-2">
                                @if(count($nominal) == 0)
                                <div class="col-12">
                                    <div class="alert alert-warning alert-dismissible mt-2 mb-0" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                        <div class="alert-message">
                                            <strong>Information!</strong> Produk sedang tidak tersedia.
                                        </div>
                                    </div>
                                </div>
                                @else
                                @php
                                $i = 1;
                                @endphp
                                @foreach($nominal as $nom)
                                <div class="col-sm-4 col-6">
                                    <input type="radio" id="{{ $nom->id }}" class="radio-nominale" name="nominal" value="{{ $nom->id }}">
                                    <label for="{{ $nom->id }}">{{ $nom->layanan }}</label>
                                </div>                                    
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section">
                        <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">3</div>
                            <h5 style="margin-left: 45px; margin-top: 5px;">Pilih Metode Pembayaran</h5>
                            <div class="row pt-3 pl-2 pr-2 mb-2">

                                @auth
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="Saldo" id="saldo">
                                    <label for="saldo">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/asset/images/method/balance.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">Saldo Akun</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="SALDO"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                @endauth
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="QRISD" id="qrisd">
                                    <label for="qrisd">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ ENV('APP_URL') }}/assets/dana.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">Dana</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="QRISD"></p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="ovo" id="ovo">
                                    <label for="ovo">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ ENV('APP_URL') }}/assets/ovo.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">OVO TRANSFER(OTOMASTIS)</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="OVO"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>   
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="bca" id="bcatf">
                                    <label for="bcatf">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/bca.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">BCA TRANSFER (OTOMATIS)</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="bca"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>                                   
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="gopay" id="gopay">
                                    <label for="gopay">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="https://cdn.unipin.com/images/payment_channels/1626877776-1568261197-gopay-small.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">GOPAY TRANSFER(OTOMASTIS)</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="GOPAY"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>                                  
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="QRISD" id="qrisd">
                                    <label for="qrisd">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ ENV('APP_URL') }}/assets/qris.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">QRIS</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="QRISD"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="QRIS" id="qris">
                                    <label for="qris">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/shopepay.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">Shopepay</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="QRIS"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="BCAVA" id="bca">
                                    <label for="bca">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/bca.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">BCA VA</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="BCA"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>     
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="BNIVA" id="bni">
                                    <label for="bni">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/bni.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">BNI VA</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="BNI"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>        
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="MANDIRIVA" id="mandiri">
                                    <label for="mandiri">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/mandiri.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">MANDIRI VA</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="MANDIRI"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>    
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="ALFAMART" id="alfamart">
                                    <label for="alfamart">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/alfamart.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">ALFAMART</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="ALFAMART"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>   
                                <div class="col-sm-12 col-12">
                                    <input class="radio-nominal" type="radio" name="pembayaran" value="INDOMARET" id="indomaret">
                                    <label for="indomaret">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ml-2 mr-2 pb-0">
                                                    <img src="{{ env('APP_URL') }}/assets/indomart.png" class="rounded img-fluid mb-1" style="height: 40px;">
                                                    <p class="m-0" style="font-weight: normal;">INDOMARET</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ml-2 mt-2 text-right">
                                                    <p class="mb-0" style="font-weight: bold; font-size: 13px;" id="INDOMARET"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>                                   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section">
                        <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">4</div>
                            <h5 style="margin-left: 45px; margin-top: 5px;">Nomor Telepon Dan Email</h5>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="number" class="form-control" placeholder="Nomor HP ( 628xxxxx )" name="nomor">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
                                    </div>
                                </div>
                            </div>                            
                                <small class="mt-1 d-block mb-1">Dengan Membeli Saya Menyutujui <a href="b/syarat-ketentuan/" target="_blank" class="text-warning">Ketentuan Layanan</a>.
                                </small>
                                <button type="button" id="order" class="btn btn-primary text-white">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-detail">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content text-white animated bounceIn" style="background: var(--warna_3);">
                            <div class="card-header border-bottom-0">
                                <h5 class="text-white">Detail Pembelian</h5>
                            </div>
                            <div class="modal-body pt-0">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        $("#OVO").html(res.harga);
                        $("#GOPAY").html(res.harga);
                        $("#PERMATA").html(res.harga);
                        $("#CIMBVA").html(res.harga);
                        $("#BSIVA").html(res.harga);
                        $("#BNI").html(res.harga);
                        $("#BRI").html(res.harga);
                        $("#MANDIRI").html(res.harga);
                        $("#BCA").html(res.harga);
                        $("#ALFAMART").html(res.harga);
                        $("#INDOMARET").html(res.harga);
                        $("#ALFAMIDI").html(res.harga);
                        $("#MANDIRIVA").html(res.harga);
                        $("#OVOS").html(res.harga);
                        $("#QRIS").html(res.harga);
                        $("#MYBVA").html(res.harga);
                        $("#SMSVA").html(res.harga);
                        $("#MUAMALATVA").html(res.harga);
                        $("#OVO").html(res.harga);
                        $("#DANAMONVA").html(res.harga);
                        $("#BSS").html(res.harga);
                        $("#LINKAJA").html(res.harga);
                        $("#SHOPEEPAY").html(res.harga);
                        $("#SALDO").html(res.harga);
                        $("#QRISD").html(res.harga);
                        $("#QRISC").html(res.harga);
                        $("#bca").html(res.harga);
                        $("#QRISOP").html(res.harga);
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
            
            var email = $("input[name='email']").val();
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
                    'email': email
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#222831',
                        color: '#fff',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function(res) {
                    if (res.status == true) {
                        Swal.fire({
                            background: '#222831',
                            color: '#fff',
                            titleText: 'Data Pembeli',
                            html: `${res.data}`,
                            showCancelButton: true,
                            confirmButtonText: 'Lanjutkan Pembelian',
                            cancelButtonText: 'Batal',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                                var email = $("input[name='email']").val();
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
                                        'email': email

                                    },
                                    success: function(resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                            window.location = `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.message,
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                },
                error: function(e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                }
            })
        })
    });
</script>
@endsection
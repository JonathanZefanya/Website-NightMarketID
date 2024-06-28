@extends('../main')
@section('content')

<div class="wrapper pt-2">
    <br>
    <div class="row d-lg-none d-inline-block m-0 w-100">
        <div class="col-lg-12 mx-auto p-0  d-lg-block">
            <div class=" swiper my-swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-container swiper-container-mobile">
                <div class="swiper-wrapper">
                    @php $i = 1; @endphp 
        @foreach($banner as $data) 
        @php $active = ($i == 1) ? 'active' : ''; @endphp
        <div class="swiper-slide " data-swiper-slide-index="{{ $i-1 }}" role="group" aria-label="{{ $i }} / {{ count($banner) }}">
          <img src="{{ $data->path }}" alt="" class="d-block w-100 miliyan-rounded-kecil">
          <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 300ms;"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 300ms;"></div>
        </div>
        @php $i++; @endphp 
        @endforeach
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        </div>

        <div class="container">
            <div class="mt-3 mb-2 d-lg-none d-block dropdown">
                <form action="{{ route('home') }}" method="get">
                    <div class="input-group me-3 search-bar mini" aria-haspopup="true" id="dropsearchdown">
                        <input type="text" name="q" placeholder="Search products..." id="searchProds"
                            class="form-control search_input" autocomplete="off">
                        <button type="submit" class="btn btn-primary" id="btnSearchProds">
                            <i class="fas fa-search"></i>
                        </button>
                        </button>
                    </div>
                    <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown" style="inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 39px);background-color: #343a40;
                                        border-color: rgba(0,0,0,.15);
                                        color: #dee2e6; overflow-y: auto; max-height: 400px;"></ul>
                </form>
            </div>

            <div class="row h-100">
                <div class="col-sm-12 mt-3">
                    <ul class="nav nav-pills justify-content-left miliyan-scroll" id="myTab" role="tablist">
                         <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link active" id="populer-tab"
                                data-bs-toggle="tab" data-bs-target="#populer" type="button" role="tab"
                                aria-controls="populer" aria-selected="true">
                                <small>Populer</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link" id="Top_Up-tab" data-bs-toggle="tab"
                                data-bs-target="#Top_Up" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Top up</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link " id="Pulsa-tab" data-bs-toggle="tab"
                                data-bs-target="#Pulsa" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Pulsa & Data</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link " id="E-Money-tab" data-bs-toggle="tab"
                                data-bs-target="#E-Money" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>E-Money</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link " id="Voucher-tab" data-bs-toggle="tab"
                                data-bs-target="#Voucher" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Voucher</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 nav-tab" role="presentation">
                            <button class="btn-sm btn-category nav-link " id="App-tab" data-bs-toggle="tab"
                                data-bs-target="#App" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>App</small>
                            </button>
                        </li>
                    </ul>
                </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row d-none d-lg-block">
                <div class="col-lg-12 mx-auto">
                   <div class=" swiper my-swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-containerr swiper-container-mobile">
                        <div class="swiper-wrapper">
                            @php $i = 1; @endphp 
                @foreach($banner as $data) 
                @php $active = ($i == 1) ? 'active' : ''; @endphp
                <div class="swiper-slide miliyan-rounded-sedang" data-swiper-slide-index="{{ $i-1 }}" role="group" aria-label="{{ $i }} / {{ count($banner) }}">
                  <img src="{{ $data->path }}" alt="" class="d-block w-100 miliyan-rounded-sedang">
                  <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 300ms;"></div>
                  <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 300ms;"></div>
                </div>
                @php $i++; @endphp 
                @endforeach
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-5ef34061b8a920f3"></div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-5ef34061b8a920f3"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
                


                <div class="nav-item  col-lg-12 dropdown d-lg-inline-block mx-auto">
                    <div class="row h-100">
                        <div class="col-sm mt-3">
                                 <ul class="nav nav-pills justify-content-left miliyan-scroll" id="myTab" role="tablist">
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link active" id="populer-tab"
                                        data-bs-toggle="tab" data-bs-target="#populer" type="button" role="tab"
                                        aria-controls="populer" aria-selected="true">
                                        <small>Populer</small>
                                    </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link" id="Top_Up-tab"
                                        data-bs-toggle="tab" data-bs-target="#Top_Up" type="button" role="tab"
                                        aria-controls="game" aria-selected="true">
                                        <small>Top up</small>
                                    </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link " id="Pulsa-tab" data-bs-toggle="tab"
                                        data-bs-target="#Pulsa" type="button" role="tab" aria-controls="game"
                                        aria-selected="true">
                                        <small>Pulsa & Data</small>
                                    </button>
                                </li>                                
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link " id="E-Money-tab" data-bs-toggle="tab"
                                        data-bs-target="#E-Money" type="button" role="tab" aria-controls="game"
                                        aria-selected="true">
                                        <small>E-Money</small>
                                    </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link " id="Voucher-tab"
                                        data-bs-toggle="tab" data-bs-target="#Voucher" type="button" role="tab"
                                        aria-controls="game" aria-selected="true">
                                        <small>Voucher</small>
                                     </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link " id="App-tab"
                                        data-bs-toggle="tab" data-bs-target="#App" type="button" role="tab"
                                        aria-controls="game" aria-selected="true">
                                        <small>App</small>
                                     </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm mt-3 pt-1 mb-1">
                            <form action="{{ route('home') }}" method="get">
                                <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                                    <input type="text" name="q" placeholder="Ketik nama game.." id="searchProds"
                                        class="form-control search_input" autocomplete="off">
                                    <button type="submit" class="btn btn-orange" id="btnSearchProds">
                                        <i class="fas fa-search text-dark"></i>
                                    </button>
                                </div>
                               <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown" style="inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 39px);background-color: #343a40;
                                        border-color: rgba(0,0,0,.15);
                                        color: #dee2e6; overflow-y: auto; max-height: 400px;"></ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
        <div class="container mt-2">
            <div class="col-lg-12 mx-auto ">
                  
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="populer" role="tabpanel" aria-labelledby="populer-tab">
                        <div class="row row-cols-3 row-cols-md-6 g-4 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "populer") <div class="col mt-2 mb-4">
                              <div class="col ">
                           <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                           <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                       <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                          <br>
                                                            <small>
                                                               <b class="col-hp2 text-sm text-white">
                                                                  {{ $category->nama }}
                                                                </b>
                                                            </small>
                                                            </br>
                                                          </a>
                                                      </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> @endif @endforeach </div>
                        </div>
                     <div class="tab-pane" id="Top_Up" role="tabpanel" aria-labelledby="Top_Up-tab">
                        <div class="row row-cols-3 row-cols-md-6 g-4 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "game") <div class="col mt-2 mb-4">
                              <div class="col ">
                           <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                               <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                       <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                        <br>
                                                            <small>
                                                               <b class="col-hp2 text-sm text-white">
                                                                  {{ $category->nama }}
                                                                </b>
                                                            </small>
                                                            </br>
                                                        </a>
                                                      </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> @endif @endforeach </div>
                       </div>
                    <div class="tab-pane" id="Pulsa" role="tabpanel" aria-labelledby="Pulsa-tab">
                       <div class="row row-cols-3 row-cols-md-6 g-2 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "pulsa") <div class="col mt-2 mb-4">
                              <div class="col ">
                           <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                           <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                     <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                     <br>
                                                    <small>
                                                       <b class="col-hp2 text-sm text-white">
                                                      {{ $category->nama }}
                                                        </b>
                                                    </small>
                                                    </br>
                                                   </a>
                                                </div>
                                                <br>
                                            </div>
                                          </div>
                                      </div>
                                   </div>
                                </div>
                            </div> @endif @endforeach </div>
                        </div>
                    <div class="tab-pane" id="E-Money" role="tabpanel" aria-labelledby="E-Money-tab">
                       <div class="row row-cols-3 row-cols-md-6 g-2 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "e-money") <div class="col mt-2 mb-4">
                              <div class="col ">
                           <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                           <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                     <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                     <br>
                                                    <small>
                                                       <b class="col-hp2 text-sm text-white">
                                                      {{ $category->nama }}
                                                        </b>
                                                    </small>
                                                    </br>
                                                   </a>
                                                </div>
                                                <br>
                                            </div>
                                          </div>
                                      </div>
                                   </div>
                                </div>
                            </div> @endif @endforeach </div>
                        </div>
                    <div class="tab-pane" id="Voucher" role="tabpanel" aria-labelledby="Voucher-tab">
                        <div class="row row-cols-3 row-cols-md-6 g-2 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "voucher") <div class="col mt-2 mb-4">
                              <div class="col ">
                                 <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                                    <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                    <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                        <br>
                                                        <small>
                                                           <b class="col-hp2 text-sm text-white">
                                                              {{ $category->nama }}
                                                            </b>
                                                        </small>
                                                        </br>
                                                        </a>
                                                     </div>
                                                    <br>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                </div> @endif @endforeach </div>
                              </div>
                    <div class="tab-pane" id="App" role="tabpanel" aria-labelledby="App-tab">
                        <div class="row row-cols-3 row-cols-md-6 g-2 justify-content-left mt-2"> @foreach($kategori as
                            $category) @if($category->tipe == "app") <div class="col mt-2 mb-4">
                              <div class="col ">
                                 <div class="img-scale card bg-transparent border-0 h-100 rounded zoom-miliyan text-center">
                                    <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                      <img src="{{ $category->thumbnail }}" class="card-img-top rounded-img-buy patih" alt="{{ $category->nama }}">
                                        </a>
                                          <div class="card-body p-0 py-md-0 text-center mb-0 ">
                                             <div class="col-hp mb-0 text-center mt-0 mb-0">
                                                 <div class="row h-100">
                                                    <div class="miliyan-hp3">
                                                    <a href="{{ env('APP_URL').'/order/'.$category->kode }}">
                                                        <br>
                                                        <small>
                                                           <b class="col-hp2 text-sm text-white">
                                                              {{ $category->nama }}
                                                            </b>
                                                        </small>
                                                        </br>
                                                        </a>
                                                     </div>
                                                    <br>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                </div> @endif @endforeach </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
     </div>
   </div>
<!--  Modal content for the above example -->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark" style="box-shadow:0 0 3rem #000000 !important">
            <div class="modal-body">
                <div class="row" id="textInfo">
                    <div class="col-12 mb-2">
                        <div class="card" style="border:1px solid #4b4d50;background-color: #484d52;">
                            <div class="card-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Information</h5>
                            </div>
                            <div class="card-body bg-dark pb-1">
                                <div class="row">
                                    <div class="col-12" style="font-size:12px !important">
                                        <p class="card-text"></p>
                                        <img src='{{ isset($popup->path) ? $popup->path : "" }}' width="100%"
                                            class="img-fluid">
                                        <span class="text-white">{!! isset($popup->deskripsi) ? $popup->deskripsi : " <p
                                                class='text-center'>
                                                Selamat datang di ".ENV("APP_NAME")." Selamat berbelanja.</p>" !!}
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    <div class="row">
                        <div class="col float-start">
                            <div class="form-check mt-2" style="font-size:12px">
                                <label class="form-check-label mt-2" style="font-size:12px !important" for="customCheck1">
                                    <input type="checkbox" class="form-check-input" id="dontShow"> Jangan tampilkan
                                    lagi</label>
                            </div>
                        </div>
                        <div class="col text-end">
                            <button type="button" name="read_popup_news_b2c" style="font-size:13px"
                                class="btn btn-primary btn-sm ml-auto mt-2" data-bs-dismiss="modal"
                                onclick="disablePopup()">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal --> @endsection @section('js')
<script>
    var delay = (function () {
        var timer = 0;
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();
    $('#searchProds').keyup(function () {
        const data = $(this).val();
        if (data.length < 1) {
            $('.resultsearch').removeClass('show');
            $('.resultsearch li').remove();
        } else {
            delay(function () {
                $.ajax({
                    url: "{{url('/cari/index')}}",
                    method: "POST",
                    data: {
                        data: data
                    },
                    beforeSend: function () {
                        $('.resultsearch li').remove();
                    },
                    success: function (res) {
                        $('.resultsearch').append(res);
                        $('.resultsearch').addClass('show');
                    }
                })
            }, 1000);
        }
    })
</script>


<script>
  const mySwiper = new Swiper('.my-swiper', {
      effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    speed: 1000,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    

});
</script>



<script>
                $(document).ready(function() {
    var timeParsed = '2023-03-11 00:00:00'.replace(' ', 'T').split(/[^0-9]/);
    var countDown = new Date(new Date (timeParsed[0],timeParsed[1]-1,timeParsed[2],timeParsed[3],timeParsed[4],timeParsed[5])).getTime();
                let status_FlashSale = 1;
                if (status_FlashSale == 1){
                    var x = setInterval(() => {
                        let nowTime = new Date().getTime();
                        var distance = countDown - nowTime;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        if(distance > 0){
                            $("#expired_time_flash_sale").text(`${days}:${hours}:${minutes}:${seconds}`)
                        }
                    }, 1000);
                }
                $("#paycode").tooltip();
                $("#paycode").click(function() {
                    copyToClipboard($(this).text().trim().replace(".", ""), $(this));
                })
                $("#paycode").css('cursor', 'pointer');
            })
</script>
<script type="text/javascript">
    var cookie = document.cookie.split("; ");
    if (cookie.length < 2) {
        $(document).ready(function () {
            $("#popup").modal("show");
        })
    }

    function disablePopup() {
        var checkBox = document.getElementById("dontShow");
        var date = new Date();
        date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
        if (checkBox.checked) {
            document.cookie = "popup=0; expires=" + date.toGMTString();
        }
    }
</script> @endsection
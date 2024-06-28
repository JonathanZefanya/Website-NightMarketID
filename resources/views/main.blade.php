<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ ENV('APP_NAME') }} - {{ ENV('APP_DES') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#313335">
    <meta name="title" content="{{ ENV('APP_NAME') }} - {{ ENV('APP_DES') }}">
    <meta name="description" content="{{ ENV('APP_NAME') }} - {{ ENV('APP_DES') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="{{ ENV('APP_NAME') }} - {{ ENV('APP_KEYWORDS') }}">
    <meta property="og:description" content="{{ ENV('APP_NAME') }} - {{ ENV('APP_DES') }}">
    <meta name="robots" content="index, follow">
    <meta content="desktop" name="device">
    <meta name="author" content="{{ ENV('APP_NAME') }}">
    <meta name="coverage" content="Worldwide">
    <meta name="apple-mobile-web-app-title" content="{{ ENV('APP_NAME') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="{{ ENV('APP_LOGOFAVICON') }}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="auto">
    <link rel="icon" href="{{ ENV('APP_LOGOFAVICON') }}">
    <link rel="stylesheet" href="/assetss/scss/app.css">
    <link rel="stylesheet" href="/assetss/css/app.css">
    <link rel="stylesheet" href="/assetss/scss/chatbox.css">
    <link rel="shortcut icon" href="{{ ENV('APP_LOGOFAVICON') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://use.fontawesome.com/6da2e1892f.js"></script>
    <script src="https://kit.fontawesome.com/99f8e55a96.js" crossorigin="anonymous"></script>
    <script src="/assetss/js/app.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


   
   


   
    @yield('css')
    <!-- <script src="/assetss/js/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript"></script> -->
</head>

<style>



@import url('https://fonts.googleapis.com/css2?family=Oxanium&display=swap');

body {
font-family: 'Oxanium', 'Arial Narrow', Arial, sans-serif;
font-size:15px;
background: #1F2022;
}


.patih {
display: grid;
gap: 20px;
}


.swal2-html-container {
z-index: 1;
justify-content: center;
margin: 1em 1.6em 0.3em;
padding: 0;
overflow: auto;
color: inherit;
font-size: 1.125em;
font-weight: normal;
line-height: normal;
text-align: center;
word-wrap: break-word;
word-break: break-word;
}
.swal2-html-container {
z-index: 1;
justify-content: center;
margin: 1em 1.6em 0.3em;
padding: 0;
overflow: auto;
color: inherit;
font-size: 1.125em;
font-weight: normal;
line-height: normal;
text-align: left!important;
word-wrap: break-word;
word-break: break-word;
}

.nav-link {
color: #fe6c17;
display: block;
padding: 0.5rem 1rem;
text-decoration: none;
transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s;
}

.resultsearch .dropdown-item:hover {
background-color: hsla(0, 0%, 100%, .15);
color: #fff;
}

.bg-light {
--bs-bg-opacity: 1;
}

a {
text-decoration: none;
}

.grecaptcha-badge {
visibility: hidden;
}

.logo-atas {
height: 30px;
}

.logo-order {
width: 100%;
float: left;
margin-right: 8px;
margin-bottom: auto;
}

.logo-order2 {
width: 100%;
float: left;
/* margin-right: 8px;
margin-bottom: auto; */
}

.logo-order3 {
width: 100%;
float: left;
/* margin-right: 8px;
margin-bottom: auto; */
}

.logo-bawah {
height: 60px;
float: left;
margin-right: 8px;
margin-bottom: auto;
}

.btn-orange {
color: #fff;
background-color: #FE6C17 !important;
border-color: #FE6C17 !important;
}

.btn-primary {
color: #fff;
background-color: #FE6C17 !important;
border-color: #FE6C17 !important;
}
.btn-primary:hover {
color: #000;
background-color: #FE6C17 !important;
border-color: #FE6C17 !important;
}

.child-box:hover {
border: 1px solid hsla(0, 0%, 68%, 0.5);
}

.button-action-payment li.active {
border: 1px solid transparent;
background: rgb(255, 255, 255);
filter: grayscale(0%);
}

.xxs {
font-size: 0.4rem;
}

.button-action-payment li {
border: 1px solid rgba(202, 202, 202, 0.398);
padding: 10px;
border-radius: 0.3em;
margin-bottom: 10px;
position: relative;
display: list-item;
text-align: -webkit-match-parent;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
/* Safari 6.0 - 9.0 */
filter: grayscale(100%);
}

.button-action-payment input[type="radio"]:checked+.payment-item {
color: #fd7300;
}


.strip-primary {
background-color: #FE6C17;
position: absolute;
width: 60px;
height: 5px;
border-radius: 10px;
}

.wave {
min-height: 100%;
background-attachment: scroll;
/* background-image: url("https://bosstore.my.id/assets/img/wave.svg"); */
background-repeat: no-repeat;
background-position: bottom left, bottom right;
}

.wave2 {
min-height: 100%;
background-attachment: fixed;
/* background-image: url("https://bosstore.my.id/assets/img/wave2.svg"); */
background-repeat: no-repeat;
background-position: top left, top right;
}

.fab-container {
position: fixed;
bottom: 70px;
right: 10px;
z-index: 999;
cursor: pointer;
}

.miliyan-scroll {
display: flex;
flex-wrap: nowrap;
padding-bottom: 1.5rem;
padding-left: 0;
margin-block: 0;
/* overflow-x: auto; */
list-style: none;
text-align: center;
white-space: nowrap;
overflow: auto;
}

.fab-icon-holder {
width: 45px;
height: 45px;
bottom: 140px;
left: 10px;
color: #FFF;
background: #FFF;
/* padding: 1px; */
border-radius: 10px;
text-align: center;
font-size: 30px;
z-index: 99999;
}

.fab-icon-holder:hover {
opacity: 0.8;
}

.fab-icon-holder i {
display: flex;
align-items: center;
justify-content: center;
height: 100%;
font-size: 25px;
color: #ffffff;
}

.fab-options {
list-style-type: none;
margin: 0;
position: absolute;
bottom: 48px;
left: -37px;
opacity: 0;
transition: all 0.3s ease;
transform: scale(0);
transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
opacity: 1;
transform: scale(1);
}

.fab-options li {
display: flex;
justify-content: flex-start;
padding: 5px;
}

.fab-label {
padding: 2px 5px;
align-self: center;
user-select: none;
white-space: nowrap;
border-radius: 3px;
font-size: 16px;
background: #666666;
color: #ffffff;
box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
margin-left: 10px;
}


.d-flex {
display: -ms-flexbox !important;
display: flex !important;
}

.d-flex2 {
background-color: #212529;
}

.img-chat {
max-width: 100%;
height: auto;
/* background-color: #f89728; */
border-radius: 10px;
}

.btn-topup {
color: #fff !important;
background-color: #FE6C17 !important;
width: 90%;
max-width: 100px;
}

.btn-topup:hover {
color: #000 !important;
background-color: #FE6C17 !important;
border-color: #FE6C17;
width: 90%;
}

.rounded-img-buy {
border-radius: 23% !important;
}

.size-img-buy {
width: 90%;
/* border-radius: 12px; */
height: auto;

}

.size-img-buy-v {
width: 90%;
height: auto;
text-align: center;
}




.miliyan-hp1 {
flex: 0 0 auto;
width: 100%;
font-size: 15px;
padding: 0%;
font-style: italic;
margin-top: 5px;
line-height: 50%;
}

.miliyan-hp2 {
flex: 0 0 auto;
width: 100%;
font-size: 14px;
padding: 0%;
font-style: italic;
margin-top: 5px;
line-height: 50%;
}

.miliyan-hp3 {
flex: 0 0 auto;
width: 100%;
font-size: 14px;
padding: 0%;
font-style: italic;
margin-top: 5px;
margin-left: 0px;
line-height: 20%;
}

.col-bjconfirm {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: right;
}

.col-bjconfirm2 {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: left;
}

.col-bjconfirm3 {
flex: 0 0 auto;
width: 100%;
font-size: 11px;
text-align: center;
}

.col-bjinv {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: right;
}

.col-bjinv2 {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
}

.col-bjinv3 {
flex: 0 0 auto;
width: 50%;
font-size: 20px;
font-weight: bold;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
background-color: #FE6C17;
color: #fff;
}

.nav-pills .nav-link,
.nav-pills .show>.nav-link {
background-color: #FE6C17;
color: #fff;

}

.nav-link {
color: #fff;
display: block;
padding: 0.5rem 1rem;
text-decoration: none;
transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s;
}

.nav-link:focus,
.nav-link:hover {
color: #fff;

}


.scroll-up-btn {
display: none;
position: fixed;
width: 45px;
height: 45px;
bottom: 19px;
right: 10px;
color: #FFF;
border: 1px solid #FE6C17;
background: #FE6C17;
border-radius: 10px;
text-align: center;
font-size: 16px;
z-index: 99999;
}

.fa-chevron-up {
margin-top: -2px;
}





.carousel-indicators {
position: absolute;
bottom: 0;
margin-bottom: -7px;
}

.carousel-indicators li {
border-radius: 50%;
width: 10px !important;
height: 10px !important;

}

.carousel-indicators .active {
background-color: #f39200;
}

.rounded-miliyan {
    border-radius: 20px!important;
}

.miliyan-rounded-sedang {
border-top-right-radius: 20px !important;
border-top-left-radius: 20px !important;
}

.miliyan-rounded-kecil {
border-radius: 7px !important;
}

.miliyanbgblack {
background-color: #2d3238;
}

.bg-miliyan {
background: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))
}


.zoom-miliyan {
position: relative;
}


.zoom-miliyan {
transition: transform .5s, filter 1.5s ease-in-out;
}


.zoom-miliyan:hover {
transform: scale(1.1);

}

.regular-price {
text-decoration: line-through;
color: red;
}

.sale-price {
margin-left: 0px;
}


.text-end {
text-align: right !important;
}

.bg-abu {
background-color: #1e2022; 
}

.border-merah {
border: 1px solid white;
}


.miliyan-pgimg {
background-color: white;
border-radius: 3px;
border: 5px solid white;
height: 35px;
}

.bg-dark {
--bs-bg-opacity: 1;
background-color: #1F2022!important;
}

.size-img-buy {
width: 60%;
/* border-radius: 12px; */
height: auto;
}
.rounded-img-buy {
border-radius: 23% !important;
}

.card-img, .card-img-bottom, .card-img-top {
width: 90%;
margin:5px;
}
img, svg {
vertical-align: middle;
}
* {
box-sizing: border-box;
}
*, :after, :before {
box-sizing: border-box;
}
user agent stylesheet
img {
overflow-clip-margin: content-box;
overflow: clip;
}



.bg-transparent {
--bs-bg-opacity: 1;
background-color: transparent!important;
}

.rounded {
border-radius: 0.25rem!important;
}
.bg-transparent {
--bs-bg-opacity: 1;
background-color: transparent!important;
}
.text-center {
text-align: center!important;
}
.p-2 {
padding: 0.5rem!important;
}
.h-100 {
height: 100%!important;
}
.border-0 {
border: 0!important;
}

* {
box-sizing: border-box;
}
*, :after, :before {
box-sizing: border-box;
}
user agent stylesheet
div {
display: block;
}
.g-2, .gy-2 {
--bs-gutter-y: 0.5rem;
}
.g-2, .gx-2 {
--bs-gutter-x: 0.5rem;
}
.row {
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
margin-left: calc(var(--bs-gutter-x)*-.5);
margin-right: calc(var(--bs-gutter-x)*-.5);
margin-top: calc(var(--bs-gutter-y)*-1);
}
.text-white {
--bs-text-opacity: 1;
color: rgba(var(--bs-white-rgb),var(--bs-text-opacity))!important;
}


.pt-12 {
padding-top: 3rem;
}
.px-4 {
padding-left: 1rem;
padding-right: 1rem;
}
.max-w-7xl {
max-width: 80rem;
}
.mx-auto {
margin-left: auto;
margin-right: auto;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
background-color: #FE6C17;
color: #fff;
border: none;
}

.nav-pills .nav-link {
background-color:#A44005;
color: #fff;
padding: 0.5rem 1rem;
margin-right: 1px;

}

.nav-pills .nav-link:hover {
background-color: #FE6C17;
color: #fff;
}



.swiper {
width: 100%;
}

.swiper-slide {
background-position: center;
background-size: cover;
width: 86%;
}

.swiper-slide img {
display: block;
width: 100%;
}

.swiper-button-next,
.swiper-button-prev {
/* background-color: #fe6c1783; */
background-color:#FE6C17;
right: 10px;
padding: 30px;
color: rgb(255, 255, 255) !important;
fill: black !important;
stroke: black !important;
border-radius: 100px
}

.swiper-button-next:after,
.swiper-button-prev:after {
font-size: 20px !important;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
background-color: #FE6C17 ;
}

.swiper-pagination-bullet-active {
background-color: #7e0d0b ;
}

.btn-topup {
color: #fff3e2 !important;
background-color: #e10603 !important;
width: 90%;
max-width: 100px;
}

.btn-topup:hover {
color: #fff3e2 !important;
background-color: #7e0d0b !important;
width: 90%;
max-width: 100px;
}


#nick {
font-weight: bold;
color: red;
display: inline-block;
width: 200px;
}
.label {
font-weight: bold;
}

.card

.card {
position: relative;
}

.card-img {
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
object-fit: cover;
opacity: 0.7;
border-radius: 12px;
}

.card-flashsale {
height: 175px;
border: none;
border-radius: 12px;
cursor:pointer;
}
@media (max-width: 576px){
.card-flashsale {
height: 175px;
border: none;
border-radius: 12px;
}
}
.card-flashsale img {
height: 100%;
display: flex;
object-fit: cover;
opacity: 0.5;
border-radius: 12px;
margin:-1px;
}
.nama-flashsale {
font-size: 16px;
margin-top:4rem;
}
@media (max-width: 676px){
.nama-flashsale {
font-size: 16px;
margin-top:3rem;
}
}
.harga-promo-flashsale {
font-size: 14px;
font-weight: bold;
color: #F14847;
background: #FDCACA;
padding: 1px;
border-radius: 4px;
display: inline-block;
margin-top: 8px;
}
.harga-normal-flashsale {
font-size: 12px;
color: #F14847;
margin-top: -13px;
}

.footer__clip-path[data-v-24ea0f94] {
    display: flex;
    padding: 0;
    margin-top: -39px;
    width: 100%;
    height: 40px;
    background-color: #212529;
    clip-path: polygon(0 23%,6% 72%,12% 47%,18% 70%,24% 51%,32% 80%,38% 47%,44% 80%,50% 49%,56% 70%,60% 86%,66% 42%,72% 65%,78% 38%,84% 64%,90% 17%,96% 20%,100% 1%,100% calc(100% + 1px),0 calc(100% + 1px));
    -webkit-clip-path: polygon(0 23%,6% 72%,12% 47%,18% 70%,24% 51%,32% 80%,38% 47%,44% 80%,50% 49%,56% 70%,60% 86%,66% 42%,72% 65%,78% 38%,84% 64%,90% 17%,96% 20%,100% 1%,100% calc(100% + 1px),0 calc(100% + 1px));
}
@media screen and (min-width: 768px) {
    .footer__clip-path[data-v-24ea0f94] {
        clip-path: polygon(0 23%,2% 55%,4% 32%,6% 50%,8% 30%,10% 75%,13% 40%,15% 62%,17% 96%,19% 50%,21% 93%,23% 46%,25% 89%,27% 64%,29% 87%,31% 76%,33% 59%,35% 96%,38% 48%,40% 82%,42% 65%,44% 48%,46% 82%,48% 66%,50% 44%,52% 56%,54% 100%,56% 65%,58% 93%,60% 49%,63% 99%,65% 44%,67% 97%,69% 87%,71% 43%,73% 68%,75% 48%,77% 67%,79% 95%,81% 64%,83% 38%,85% 85%,88% 51%,90% 81%,92% 38%,94% 80%,96% 61%,98% 40%,100% 72%,100% calc(100% + 1px),0 calc(100% + 1px));
        -webkit-clip-path: polygon(0 23%,2% 55%,4% 32%,6% 50%,8% 30%,10% 75%,13% 40%,15% 62%,17% 96%,19% 50%,21% 93%,23% 46%,25% 89%,27% 64%,29% 87%,31% 76%,33% 59%,35% 96%,38% 48%,40% 82%,42% 65%,44% 48%,46% 82%,48% 66%,50% 44%,52% 56%,54% 100%,56% 65%,58% 93%,60% 49%,63% 99%,65% 44%,67% 97%,69% 87%,71% 43%,73% 68%,75% 48%,77% 67%,79% 95%,81% 64%,83% 38%,85% 85%,88% 51%,90% 81%,92% 38%,94% 80%,96% 61%,98% 40%,100% 72%,100% calc(100% + 1px),0 calc(100% + 1px));
    }
}

.footer {
color: #fff;
font-size: 14px;
background: #212429;
}

</style>


<body class=" text-white flex-column min-vh-100">
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow bg-dark">
            <div class="container ">
                <div class="d-flex">
                    <span class="w-100 d-lg-none d-block">
                    </span>
                    <a class="navbar-brand d-none d-lg-inline-block" href="{{ route('home') }}" data-aos="zoom-in-down">
                        <img src='{{ isset($logoheader->path) ? $logoheader->path : "" }}' alt="" class="logo-atas">
                    </a>
                    <a class="navbar-brand mx-auto d-lg-none d-inline-block" href="{{ route('home') }}" data-aos="zoom-in-down">
                        <img src='{{ isset($logoheader->path) ? $logoheader->path : "" }}' alt="" class="logo-atas">
                    </a>
                </div>
                
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto nav-stacked ">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link text-white">
                                <i class="fa fa-home"></i>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cari') }}" class="nav-link text-white">
                                <i class="fas fa-search"></i>
                                History Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('price') }}" class="nav-link text-white ">
                                <i class="fa fa-tag"></i>
                                Daftar Harga</a>
                        </li>
                        <div class="nav-item dropdown">
                            <a href="{{ route('hitungwr') }}" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-calculator"></i> Kalkulator ML
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark shadow mb-2" aria-labelledby="dropdownMenuButton1">
                                <li class="nav-item">
                                    <a href="{{ route('hitungwr') }}" class="dropdown-item text-white">
                                        <i class="fas fa-address-card"></i> Win Rate
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hitungpointmw') }}" class="dropdown-item text-white">
                                        <i class="fas fa-address-card"></i> Magic Wheel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hitungpointzodiac') }}" class="dropdown-item text-white">
                                        <i class="fas fa-address-card"></i> Zodiac
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('riwayat') }}" class="nav-link text-white ">
                                <i class="fas fa-shopping-cart"></i>
                                Riwayat Transaksi</a>
                        </li>
                        @if(Auth::user()->role == "Admin")
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-white ">
                                <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i>
                                myAdmin</a>
                        </li>
                        @endif
                        @endauth    
                        @auth
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="navUser" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                <span id="header_username">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark shadow mb-2" aria-labelledby="navUser">
                                @if(Auth::user()->role !== "Admin")
                                <li>
                                    <a class="dropdown-item text-white" href="{{url('/user/dashboard')}}"><i
                                            class="fas fa-home"></i> Dashboard</a>
                                </li>
                                @endif
                                <li><a class="dropdown-item text-white" href="/deposit" id="header_saldo"><i
                                            class="fas fa-wallet"></i> IDR {{ number_format(Auth::user()->balance, 0,
                                        ',', '.') }}</a></li>
                                <li>
                               <li class="nav-item">
                                <a class="dropdown-item text-white" href="{{ route('deposit') }}" class="nav-link text-white ">
                                <i class="fas fa-wallet"></i>
                                Riwayat Deposit</a>
                                </li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item text-white" href="/logout"><i
                                                class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                    @guest
                    <div class="d-flex my-2">
                        <a class="btn btn-primary" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                            Login</a>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <div class="modal fade" id="modalInformations" aria-hidden="true" aria-labelledby="modalInformationsLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content bg-dark" style="box-shadow:0 0 3rem #000000 !important">
                <div class="modal-body">
                    <div class="row" id="textInfo"></div>
                    <div class="row">
                        <div class="col float-start">
                            <div class="form-check" style="font-size:12px">
                                <input class="form-check-input" type="checkbox" value="" id="dontshowinfo">
                                <label class="form-check-label" for="dontshowinfo">
                                    Jangan tampilkan lagi
                                </label>
                            </div>
                        </div>
                        <div class="col text-end">
                            <button type="submit" name="read_popup_news_b2c" style="font-size:12px"
                                class="btn btn-primary btn-sm">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div data-v-24ea0f94="" class="footer__clip-path pt-5"></div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 p-4">
                    <img src="{{ isset($logofooter->path) ? $logofooter->path : "" }}" alt="LOGO" class="logo-bawah">
                      <h5 class="text-uppercase mt-2" style="margin:0">{{ ENV('APP_NAME') }}</h5>
                       <i class="strip-primary"></i>
                      <div class="mt-2 ratakirikanan">
                <p>{{ ENV('APP_DES') }}</p>
            </div>
                </div>
                  <div class="col-lg-2 p-4">
                    <h5 class="mt-2 mb-1">Partnership</h5>
                    <i class="strip-primary"></i>
                    <div class="mt-3">
                        <i class="fas fa-angle-right"></i> <a href="upgrade"
                            class="text-white bjlink ">
                            Join Reseller
                        </a><br>
                        <i class="fas fa-angle-right"></i> <a href="dashboard"
                            class="text-white bjlink ">
                            Dashboard
                        </a><br>
                        <i class="fas fa-angle-right"></i> <a href="deposit"
                            class="text-white bjlink ">
                            Deposit
                        </a><br>
                        <i class="fas fa-angle-right"></i> <a href="{{ route('price') }}"
                            class="text-white bjlink ">
                            Price List
                        </a><br>
                    </div>
                </div>
               <div class="col-lg-2 p-4">
                    <h5 class="mt-2 mb-1">Site Map</h5>
                    <i class="strip-primary"></i>
                    <div class="mt-3">
                        <i class="fas fa-angle-right"></i> 
                        
                        <a href="{{ route('home') }}" class="text-white bjlink">
                         Home</a><br>
                        <i class="fas fa-angle-right"></i> 
                        
                        <a href="{{ route('login') }}" class="text-white bjlink">
                        Login</a><br>
                        <i class="fas fa-angle-right"></i> 
                        
                        <a href="{{ route('cari') }}" class="text-white bjlink">
                        Check</a><br>
                    </div>
                </div>
                <div class="col-lg-2 p-4">
                    <h5 class="mt-2 mb-1">Chat Us</h5>
                    <i class="strip-primary"></i>
                    <div class="mt-3">
                        <i class="fas fa-angle-right"></i> <i class="fab fa-whatsapp"></i><a
                            href="{{ ENV('APP_WA') }}" target="_blank"
                            class="text-white text-decoration-none">
                            WhatsApp
                        </a><br>
                        <i class="fas fa-angle-right"></i> <i class="fab fa-instagram"></i><a
                            href="{{ ENV('APP_IG') }}" target="_blank"
                            class="text-white text-decoration-none">
                            Instagram
                        </a><br>
                        <i class="fas fa-angle-right"></i> <i class="fab fa-telegram"></i><a
                            href="{{ ENV('APP_TELE') }}" target="_blank"
                            class="text-white text-decoration-none">
                            Telegram
                        </a><br>
                        <i class="fas fa-angle-right"></i> <i class="fab fa-line"></i><a
                            href="{{ ENV('APP_LINE') }}" target="_blank"
                            class="text-white text-decoration-none">
                            LINE
                        </a><br>
                        <i class="fas fa-angle-right"></i> <i class="fas fa-envelope"></i><a
                            href="{{ ENV('APP_EMAIL') }}" target="_blank"
                            class="text-white text-decoration-none">
                            Email Us
                        </a><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-2 ">
            <div class="row" id="footer-credit" style="background-color: #1F2022;">
                <div class="col">
                    <div class="container mt-2 mb-2 text-center">
                        <small>
                            Copyright © 2024 <a href="{{ route('home') }}" class="text-white">{{ ENV('APP_NAME') }}</a>
                            All Rights Reserved - <a href="{{ route('Terms-and-conditions') }}" class="text-white"
                                style="text-decoration: underline;">Terms and conditions</a>
                            - <a href="{{ route('privacy-policy') }}" class="text-white"
                                style="text-decoration: underline;">Privacy Policy</a>
                                 
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    <div class="fab-container">
        <div class="fab fab-icon-holder">
            <img src="/assets/callcenter.png" class="img-chat" alt="">
        </div>
        <ul class="fab-options">
            <li>
                <a href="https://instagram.com/{{ ENV('APP_IG') }}" class="text-decoration-none" target="_blank">
                    <div class="fab-icon-holder"
                        style="background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);">
                        <i class="fab fa-instagram"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ ENV('APP_WA') }}" class="text-decoration-none"
                    target="_blank">
                    <div class="fab-icon-holder" style="background-color: #25D366;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </li>
       </div>
    <button class="scroll-up-btn">
  <i class="fas fa-arrow-up"></i>
    </button>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <script>
        const zoommiliyan = document.querySelector('.zoom-miliyan');
        const img = zoommiliyan.querySelector('img');

        zoomContainer.addEventListener('mousemove', function (e) {
            const zoomFactor = 2;
            const x = e.offsetX / img.offsetWidth * (zoomFactor - 1);
            const y = e.offsetY / img.offsetHeight * (zoomFactor - 1);

            img.style.transform = `scale(${zoomFactor}) translate(${-x}px, ${-y}px)`;
        });

        zoommiliyan.addEventListener('mouseleave', function () {
            img.style.transform = `scale(1) translate(0, 0)`;
        });

    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="/assetss/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assetss/admin//assetss/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false, 
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
         
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });
});
  </script>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "105780088906247");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <!-- btn up -->
    <script>
        var scrollBtn = document.querySelector(".scroll-up-btn");
window.addEventListener("scroll", function() {
  if (window.pageYOffset > 20) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
});

scrollBtn.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

    </script>

    <script>
        const categoryButtons = document.querySelectorAll('.btn-category');
        const categoryTitle = document.querySelector('.category-title');
        const categorySubtitle = document.querySelector('.category-subtitle');

        categoryButtons.forEach(button => {
            button.addEventListener('click', function () {
                const category = button.textContent.trim();
                categoryTitle.textContent = category;
                categorySubtitle.textContent = '';
            });
        });
    </script>
     
 
    
    <script>
        document.getElementById("nomor").addEventListener("input", function () {
            let nomor = this.value;
            if (nomor.startsWith("08")) {
                nomor = "62" + nomor.slice(1);
                this.value = nomor;
            }
        });
    </script>
    

   
</body>

@yield('js')

</html>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrder;
use App\Http\Controllers\Admin\OvoController;
use App\Http\Controllers\Admin\GojekController;
use App\Http\Controllers\Admin\Berita;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TriPayCallbackController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\IsiUlangController;
use App\Http\Controllers\RiwayatPembelian;
use App\Http\Controllers\Admin\UserDepositController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\WhatsappController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\DsController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\HitungpointmwController;
use App\Http\Controllers\HitungpointzodiacController;
use App\Http\Controllers\HitungwrController;
use App\Http\Controllers\SetingController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\TermsandconditionsController;
use App\Http\Controllers\privacypolicyController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ToptenController;
use App\Http\Controllers\ResellerpageController;
use App\Http\Controllers\getProductbjController;
use App\Http\Controllers\orderBjController;
use App\Http\Controllers\Admin\OrderManualController;





Route::get('/web/mt', function(){
   Illuminate\Support\Facades\Artisan::call("down");
});

Route::get('/web/up', function(){
    Illuminate\Support\Facades\Artisan::call("up");
});

Route::get('/tes', function(){
    Illuminate\Support\Facades\Artisan::call("updatePembelian");
});

Route::get('/getservice', function(){
    Illuminate\Support\Facades\Artisan::call("Service");
});

Route::get('/forgot-password',[ForgotPasswordController::class,'forgotPassword']);
Route::post('/forgot-password',[ForgotPasswordController::class,'sendOtp']);
Route::post('/verify/otp',[ForgotPasswordController::class,'verifyOtp']);
Route::get('/user/dashboard',[DsController::Class,'dashboard'])->middleware('auth');
Route::get('/user/edit/profile',[DsController::Class,'editProfile'])->middleware('auth');
Route::post('/user/edit/profile',[DsController::Class,'saveEditProfile'])->middleware('auth');
Route::post('/cari/index',[IndexController::class,'cariIndex']);
Route::get('/',                                             [indexController::class, 'create'])->name('home');
Route::get('/order/{kategori:kode}',                         [OrderController::class, 'create']);
Route::post('/order/harga',                                  [OrderController::class, 'price'])->name('ajax.price');
Route::post('/order/konfirmasi-data',                        [OrderController::class, 'confirm'])->name('ajax.confirm-data');
Route::post('/order/pembelian',                              [OrderController::class, 'store'])->name('order');
Route::get('/pembelian/invoice/{order}',                    [InvoiceController::class, 'create'])->name('pembelian');
Route::post('/check-voucher',                               [VoucherController::class, 'confirm'])->name('check.voucher');

Route::get('/cari',                                         [CariController::class, 'create'])->name('cari');
Route::post('/cari',                                        [CariController::class, 'store'])->name('cari.post');


Route::get('/ppob/{kategori:kode}',                         [IsiUlangController::class, 'create'])->name('ppob');
Route::post('/ppob/layanan',                                [IsiUlangController::class, 'layanan'])->name('ajax.layanan.ppob');
Route::post('/ppob/harga',                                  [IsiUlangController::class, 'price'])->name('ajax.price.ppob');
Route::post('/ppob/konfirmasi-data',                        [IsiUlangController::class, 'confirm'])->name('ajax.confirm-data.ppob');
Route::post('/ppob/pembelian',                              [IsiUlangController::class, 'store'])->name('pembelian.ppob');

Route::get('/daftar-harga',                                 [PricelistController::class, 'create'])->name('price');
Route::get('/hitungpointmw',                                [HitungpointmwController::class, 'create'])->name('hitungpointmw');
Route::get('/hitungpointzodiac',                            [HitungpointzodiacController::class, 'create'])->name('hitungpointzodiac');
Route::get('/hitungwr',                                     [HitungwrController::class, 'create'])->name('hitungwr');
Route::get('/Terms-and-conditions',                         [TermsandconditionsController::class, 'create'])->name('Terms-and-conditions');
Route::get('/privacy-policy',                               [privacypolicyController::class, 'create'])->name('privacy-policy');
Route::get('/contact',                                      [contactController::class, 'create'])->name('contact');
Route::get('/topten',                                       [ToptenController::class, 'create'])->name('topten');
Route::get('/resellerpage',                                 [ResellerpageController::class, 'create'])->name('resellerpage');
Route::get('/productbj',                                    [getProductbjController::class, 'getProductData'])->name('productbj');
Route::get('/orderbj',                                      [orderBjController::class, 'orderBjf'])->name('orderbj');
Route::get('/userbj',                                      [getUserbjController::class, 'getUserbj'])->name('userbj');



Route::middleware(['guest'])->group(function () {
    Route::get('/login',                                            [LoginController::class, 'create'])->name('login');
    Route::post('/login',                                           [LoginController::class, 'store'])->name('post.login');
    Route::get('/register',                                         [RegisterController::class, 'create'])->name('register');
    Route::post('/register',                                         [RegisterController::class, 'store'])->name('post.register');
});
Route::post('/callback',                                    [TriPayCallbackController::class, 'handle']);

Route::middleware(['auth'])->group(function(){
    Route::post('/logout',                                  [LoginController::class, 'destroy'])->name('logout');

    Route::get('/deposit',                                  [DepositController::class, 'create'])->name('deposit');
    Route::post('/deposit',                                 [DepositController::class, 'store'])->name('deposit.post');

    Route::get('/riwayat-pembelian',                        [RiwayatPembelian::class, 'create'])->name('riwayat');
    Route::get('/riwayat-pembelian/{id}/detail',            [RiwayatPembelian::class, 'show'])->name('riwayat.detail');
    
    
  

});

Route::middleware(['auth', 'check.role'])->group(function (){
    Route::get('/dashboard',                                [DashboardController::class, 'create'])->name('dashboard');

    //History Transaksi
    Route::get('/pesanan',                                  [AdminOrder::class, 'create'])->name('pesanan');
    Route::get('/order-status/{order_id}/{status}',         [AdminOrder::class, 'update']);

    //Mutasi Ovo
    Route::get('/ovo',                                      [OvoController::class, 'create'])->name('ovo');
    Route::post('/ovo',                                     [OvoController::class, 'store'])->name('ovo.post');
    Route::get('/ovo/Get-OTP/{no}',                         [OvoController::class, 'GetOTP']);
    Route::post('/ovo/Validasi-OTP',                        [OvoController::class, 'VerifOTP']);
    Route::post('/ovo/Validasi-PIN',                        [OvoController::class, 'VerifPIN']);
    Route::get('/Ovo-Transaksi',                            [OvoController::class, 'getTransaction']);

    //Mutasi Gopay
    Route::get('/gopay',                                    [GojekController::class, 'create'])->name('gopay');
    Route::post('/gopay',                                   [GojekController::class, 'store'])->name('gopay.post');
    Route::get('/gopay/Gojek-OTP/{no}',                     [GojekController::class, 'GetOTP']);
    Route::post('/gopay/Gojek-validasi',                    [GojekController::class, 'VerifOTP']);
    Route::get('/Gopay-Transaksi',                          [GojekController::class, 'getTransaction'])->name('gopay.transaction');

    //Berita
    Route::get('/berita',                                   [Berita::class, 'create'])->name('berita');
    Route::post('/berita',                                  [Berita::class, 'post'])->name('berita.post');
    Route::get('/berita/hapus/{id}',                        [Berita::class, 'delete'])->name('berita.delete');

    //Kategori
    Route::get('/kategori',                                 [KategoriController::class, 'create'])->name('kategori');
    Route::post('/kategori',                                [KategoriController::class, 'store'])->name('kategori.post');
    Route::get('/kategori/hapus/{id}',                      [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::get('/kategori-status/{id}/{status}',             [KategoriController::class, 'update'])->name('kategori.update');
    Route::post('/kategori/update',                           [KategoriController::class, 'patch'])->name('kategori.detail.update');
    
    Route::get('/kategori/{id}/detail',                     [KategoriController::class, 'detail'])->name('kategori.detail');
    Route::post('/kategori/{id}/detail',                     [KategoriController::class, 'patch'])->name('kategori.detail.update');

    //Layanan
    Route::get('/layanan',                                  [LayananController::class, 'create'])->name('layanan');
    Route::post('/layanan',                                 [LayananController::class, 'store'])->name('layanan.post');
    Route::get('/layanan/hapus/{id}',                       [LayananController::class, 'delete'])->name('layanan.delete');
    Route::get('/layanan-status/{id}/{status}',             [LayananController::class, 'update'])->name('layanan.update');
    
    Route::get('/layanan/{id}/detail',                      [LayananController::class, 'detail'])->name('layanan.detail');
    Route::post('/layanan/{id}/detail',                     [LayananController::class, 'patch'])->name('layanan.detail.update');
    
   
    //Method
    Route::get('/method',                                 [MethodController::class, 'create'])->name('method');
    Route::post('/method',                                [MethodController::class, 'store'])->name('method.post');
    Route::get('/method/hapus/{id}',                      [MethodController::class, 'delete'])->name('method.delete');
    Route::post('/method/update',                           [MethodController::class, 'patch'])->name('method.detail.update');
    
    Route::get('/method/{id}/detail',                     [MethodController::class, 'detail'])->name('method.detail');
    Route::post('/method/{id}/detail',                     [MethodController::class, 'patch'])->name('method.detail.update');
    
     //Seting
    Route::get('/seting',                                 [SetingController::class, 'create'])->name('seting');
    Route::post('/seting',                                [SetingController::class, 'store'])->name('seting.post');
    Route::get('/seting/hapus/{id}',                      [SetingController::class, 'delete'])->name('seting.delete');
    Route::post('/seting/update',                           [SetingController::class, 'patch'])->name('seting.detail.update');
    Route::get('/seting/{id}/detail',                     [SetingController::class, 'detail'])->name('seting.detail');
    Route::post('/seting/{id}/detail',                     [SetingController::class, 'patch'])->name('seting.detail.update');

    //Member
    Route::get('/member',                                   [MemberController::class, 'create'])->name('member');
    Route::get('/member/{id}/delete',                       [MemberController::class, 'delete'])->name('member.delete');
    Route::post('/member',                                  [MemberController::class, 'store'])->name('member.post');
    Route::post('/send-balance',                            [MemberController::class, 'send'])->name('saldo.post');
    Route::get('/member/{id}/detail',                       [MemberController::class, 'show'])->name('member.detail');
    Route::post('/member/update',                           [MemberController::class, 'patch'])->name('member.detail.update');

    //Deposit
    Route::get('/user-deposit',                             [UserDepositController::class, 'create'])->name('user.deposit');
    Route::get('/user-deposit/{id}/{status}',               [UserDepositController::class, 'patch'])->name('confirm.deposit');

    //Whatsapp
    Route::get('/whatsapp',                                 [WhatsappController::class, 'create'])->name('whatsapp');

    //Smile One
    Route::get('/smile-one',                                [SmileOneController::class, 'create'])->name('smileone');
    Route::post('/smile-one',                               [SmileOneController::class, 'store'])->name('smileone.post');
    
    Route::get('/license',                                  [LicenseController::class, 'create'])->name('license');
    Route::post('/license',                                 [LicenseController::class, 'store'])->name('license.post');
    Route::get('/license/{id}',                             [LicenseController::class, 'destroy'])->name('license.delete');

   
   //Promo
  
   Route::get('/promo',                                    [Berita::class, 'create'])->name('promo');
    Route::post('/promo',                                  [Berita::class, 'post'])->name('promo.post');
    Route::get('/promo/hapus/{id}',                        [Berita::class, 'delete'])->name('promo.delete');


    //PESANAN MANUAL
    Route::get('/pesanan/manual', [OrderManualController::class,'orderManual']);
    Route::post('/pesanan/manual/ajax/layanan', [OrderManualController::class,'ajaxLayanan']);
    Route::post('/pesanan/manual', [OrderManualController::class,'order']);
    
    //Voucher
    Route::get('/voucher',                                  [VoucherController::class, 'create'])->name('voucher');
    Route::post('/voucher',                                 [VoucherController::class, 'store'])->name('voucher.post');
    Route::get('/voucher/{id}/delete',                      [VoucherController::class, 'destroy'])->name('voucher.delete');
    Route::get('/voucher/{id}/detail',                      [VoucherController::class, 'show'])->name('voucher.detail');
    Route::post('/voucher/{id}/update',                      [VoucherController::class, 'patch'])->name('voucher.detail.update');

});
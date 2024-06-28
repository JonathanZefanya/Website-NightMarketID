
@extends('../main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5 mb-5">
            <div class="card bg-dark shadow miliyan-rounded-sedang ">
                <div class="section shadow bg-gradient p-3 miliyan-rounded-sedang ">
                    <h4 class="text-center mt-2">Miliyan.id</h4>
                </div>
                <div class="card-body ">
                    <form action="" id="frmContact" enctype="multipart/form-data">
                        <table>
                            <tbody>
                                <tr>
                                    <td>No Telp</td>
                                    <td valign="top">:</td>
                                    <td style="padding-left: 5px;">+628560000xxxx</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td valign="top">:</td>
                                    <td style="padding-left: 5px;">support@miliyan.id</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr />
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="type">Tipe</label>
                                <select name="type" id="type" class="form-select">
                                    <option value="masalah">Masalah Orderan</option>
                                    <option value="interest">Keluhan Pelanggan</option>
                                    <option value="interest">Kerjasama Order API/H2H</option>
                                    <option value="interest">Jasa Pembuatan Web Topup</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-7">
                                <label for="username">Nama :</label>
                                <input type="text" name="username" placeholder="Nama/Username" id="username" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-7">
                                <label for="phonenum">No WhatsApp :</label>
                                <input type="text" name="phonenum" placeholder="6285xxxx" id="phonenum" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row mb-2" id="_invoiceNumber">
                            <div class="col-md-7">
                                <label for="invoiceNumber">Invoice No :</label>
                                <input type="text" name="invoiceNumber" placeholder="BSxxxxxxxxx" id="invoiceNumber" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label for="description">Deskripsi :</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control" autocomplete="off" placeholder="Silahkan tulis pesan Anda secara detail"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-12">
                                <textarea
                                    id="g-recaptcha-response"
                                    name="g-recaptcha-response"
                                    class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                ></textarea>
                                 @foreach($web_seting as $p)
                               <div class="g-recaptcha" id="g-recaptcha" name="grecaptcha" data-sitekey="{{ $p->captcha_sitekey }}"></div>
                              @endforeach
                                <button class="btn btn-primary w-100 btn-lg" onclick="if (!window.__cfRLUnblockHandlers) return false; sendForm()">Kirim Pesan <i class="fas fa-paper-plane"></i></button>
                            </div>
                            <iframe style="display: none;"></iframe>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 clearfix">
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection

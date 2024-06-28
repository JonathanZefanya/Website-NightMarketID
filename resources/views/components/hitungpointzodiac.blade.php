@extends('../main')
@section('content') 
 <div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-5 col-12 mb-5">
            <img src="{{ isset($logofooter->path) ? $logofooter->path : "" }}" class="mlImg" alt="MobileLegends" width="140">
            <h5 class="text-white mt-3 mb-1">Kalkulator Zodiac</h5>
            <small class="text-white">Kalkulator Zodiac ini berfungsi untuk mengetahui total maksimal diamond yang kamu butuhkan untuk mendapatkan skin Zodiac.<br></small>
        </div>
        <div class="col-sm-7 col-12 mt-4 ">
            <form method="post" target="">
                <div class="row">
                    <h5 class="mb-2 text-white">Masukkan Point Zodiac Anda</h5>
                    <div class="col-12 col-lg-8 mb-5">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Star Point Anda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                            <input type="number" class="form-control" name="zodiac_point" id="zodiac_point" min="50" max="100" value="50">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2">Membutuhkan Maksimal :</span>
                            <input type="number" class="form-control" name="diamonds_needed" id="diamonds_needed" readonly>
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-gem" style="color: #00c8c8"></i></span>
                        </div>
                        <br>
                        <a href="order/mobile-legends" class="d-flex align-items-center btn-primary btn btn-confrim px-4 py-2 btn-lg border" style="background-color:#f39200;">
                            <span class="content-justify-center" style="color: #fff;">Klik Untuk Membeli Diamond</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>
<script>
    function calculateDiamonds() {
        var zodiacPoint = document.getElementById("zodiac_point").value;
        var diamondsNeeded = 0;

        if (zodiacPoint > 100) {
            document.getElementById("zodiac_point").value = 100;
            zodiacPoint = 100;
        }
        
        if (zodiacPoint < 90) {
            diamondsNeeded = Math.ceil((2000 - zodiacPoint * 20) * 850 / 1000);
        } else {
            diamondsNeeded = Math.ceil(2000 - zodiacPoint * 20);
        }
        
        document.getElementById("diamonds_needed").value = diamondsNeeded;
    }
    
    document.getElementById("zodiac_point").addEventListener("input", calculateDiamonds);
</script>

@endsection
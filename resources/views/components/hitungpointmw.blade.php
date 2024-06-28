@extends('../main')
@section('content') 
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-5 col-12 mb-5">
            <img src="{{ isset($logofooter->path) ? $logofooter->path : "" }}" class="mlImg" alt="MobileLegends" width="140">
            <h5 class="text-white mt-3 mb-1">Kalkulator Magic Wheel</h5>
            <small class="text-white">Kalkulator Magic Wheel berfungsi untuk mengetahui total maksimal diamond yang kamu butuhkan untuk mendapatkan skin LEGEND.<br></small>
        </div>
        <div class="col-sm-7 col-12 mt-4">
            <form method="post" target="">
                <div class="row">
                    <h5 class="mb-2 text-white">Masukkan Point Magic Wheel Anda</h5>
                    <div class="col-12 col-lg-8 mb-5">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Point Magic Wheel Anda :</span>
                            <input type="number" class="form-control" name="magic_wheel_point" id="magic_wheel_point" min="0" max="200" value="100">
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
            </form>
                    </div>
                        </div>
            </form>
        </div>
    </div>
</div>

<script>
    var magicWheelPoint = document.getElementById("magic_wheel_point");
    var diamondsNeeded = document.getElementById("diamonds_needed");

    function calculateDiamondsNeeded(point) {
        if (point < 196) {
            var remainingPoints = 200 - point;
            var requiredSpins = Math.ceil(remainingPoints / 5);
            var diamondCost = requiredSpins * 270;
        } else {
            var remainingPoints = 200 - point;
            var diamondCost = remainingPoints * 60;
        }
        return diamondCost;
    }

    magicWheelPoint.addEventListener("input", function () {
        var pointValue = this.value;
        if (pointValue > 200) {
            this.value = 200;
            pointValue = 200;
        }
        var diamondValue = calculateDiamondsNeeded(pointValue);
        diamondsNeeded.value = diamondValue;
    });

    diamondsNeeded.value = "";
</script>
 @endsection
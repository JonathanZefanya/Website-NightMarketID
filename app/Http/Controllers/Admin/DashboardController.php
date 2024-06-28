<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Pembayaran;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function create()
    {
        $date = now();
        $dayPlusOne = Carbon::Create($date)->addDays(1);
        $pastWeek = Carbon::create($date)->subWeeks(1);

        $parsingDate = Carbon::parse($date);

        $arrayDate = [];
        $grafik = Pembelian::whereBetween('created_at', [$pastWeek, $dayPlusOne])->orderBy('created_at', 'asc')->get();

        foreach($grafik as $data){
            $pembelian = Pembelian::whereDate('created_at', $data->created_at)->count();
            array_push($arrayDate,array('y' => Carbon::parse($data->created_at)->isoFormat('D/M/Y'), 'a' => $pembelian));
        }

        $totalPembelian = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->sum('harga');
            
        $banyakPembelian = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->count();
            
        $totalPembelianSuccess = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Sukses')
            ->sum('harga');            

        $banyakPembelianSuccess = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Sukses')
            ->count();
            
        $totalPembelianBatal = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Batal')
            ->sum('harga');            

        $banyakPembelianBatal = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Batal')
            ->count();
            
        $totalPembelianPending = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Pending')
            ->sum('harga');            

        $banyakPembelianPending = Pembelian::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Pending')
            ->count();

        $totalPembayaran = Pembayaran::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Lunas')
            ->sum('harga');

        $banyakPembayaran = Pembayaran::whereDay('created_at', $parsingDate->day)
            ->whereMonth('created_at', $parsingDate->month)
            ->whereYear('created_at', $parsingDate->year)
            ->where('status', 'Lunas')
            ->count();
            

        return view('components.admin.dashboard', [
            'total_pembelian' => $totalPembelian,
            'total_pembelian_batal' => $totalPembelianBatal,
            'total_pembelian_pending' => $totalPembelianPending,
            'total_pembelian_success' => $totalPembelianSuccess,
            'banyak_pembelian' => $banyakPembelian,
            'banyak_pembelian_batal' => $banyakPembelianBatal,
            'banyak_pembelian_pending' => $banyakPembelianPending,
            'banyak_pembelian_success' => $banyakPembelianSuccess,
            'total_deposit' => $totalPembayaran,
            'banyak_deposit' => $banyakPembayaran,
            'total_keseluruhan_pembelian' => Pembelian::sum('harga'),
            'banyak_keseluruhan_pembelian' => Pembelian::count(),
            'total_keseluruhan_pembelian_berhasil' => Pembelian::where('status', 'Sukses')->sum('harga'),
            'banyak_keseluruhan_pembelian_berhasil' => Pembelian::where('status', 'Sukses')->count(),
            'total_keseluruhan_pembelian_pending' => Pembelian::where('status', 'Pending')->sum('harga'),
            'banyak_keseluruhan_pembelian_pending' => Pembelian::where('status', 'Pending')->count(),
            'total_keseluruhan_pembelian_batal' => Pembelian::where('status', 'Batal')->sum('harga'),
            'banyak_keseluruhan_pembelian_batal' => Pembelian::where('status', 'Batal')->count(),
            'total_keseluruhan_deposit' => Pembayaran::where('status', 'Lunas')->sum('harga'),
            'banyak_keseluruhan_deposit' => Pembayaran::where('status', 'Lunas')->count(),
            'keuntungan_bersih' => Pembelian::where('status', 'Sukses')->sum('profit'),
            'morris_data' => json_encode($arrayDate)
        ]);
    }
}

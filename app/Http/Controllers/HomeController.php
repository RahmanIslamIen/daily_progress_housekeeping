<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DailyShift;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == "admin") {
            // Ambil data dari tabel daily_shift
            $data = DailyShift::select('tanggal', DailyShift::raw('COUNT(*) as total'))->groupBy('tanggal')->get();

            // Pisahkan data tanggal dan jumlahnya
            $dates = $data->pluck('tanggal');
            $totals = $data->pluck('total');

            return view('admin.admin-grafik', compact('dates', 'totals'));
        }
        if (Auth::user()->role == "user") {
            // Ambil data dari tabel daily_shift
            $data = DailyShift::select('tanggal', DailyShift::raw('COUNT(*) as total'))->groupBy('tanggal')->get();

            // Pisahkan data tanggal dan jumlahnya
            $dates = $data->pluck('tanggal');
            $totals = $data->pluck('total');

            return view('user.user-grafik', compact('dates', 'totals'));
        }
    }

}

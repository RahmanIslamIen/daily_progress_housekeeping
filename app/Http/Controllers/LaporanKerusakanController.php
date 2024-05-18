<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKerusakanToilet;

class LaporanKerusakanController extends Controller
{
    // * ======================================================================================
    // *                                    BAGIAN ADMIN
    // * ======================================================================================

    // * Laporan Kerusakan
    // Kerusakan Toilet
    public function semuaKerusakanToilet()
    {
        $data = DataKerusakanToilet::all();
        return view('admin.laporan_kerusakan.data-kerusakan-toilet.semua-kerusakan-toilet', compact('data'));
    }
    public function tambahKerusakanToilet()
    {
        return view('admin.laporan_kerusakan.data-kerusakan-toilet.tambah-kerusakan-toilet');
    }
    public function simpanKerusakanToilet(Request $request)
    {
        DataKerusakanToilet::create($request->all());
        return redirect('semua-kerusakan-toilet');
    }
    public function editKerusakanToilet($id)
    {
        $data = DataKerusakanToilet::find($id);
        return view('admin.laporan_kerusakan.data-kerusakan-toilet.ubah-kerusakan-toilet', compact('data'));
    }
    public function ubahKerusakanToilet(Request $request, $id)
    {
        $data = DataKerusakanToilet::findOrFail($id);
        $data->update($request->all());

        return redirect('semua-kerusakan-toilet');
    }
    public function hapusKerusakanToilet($id)
    {
        $data = DataKerusakanToilet::findOrFail($id);
        $data->delete();

        return redirect('semua-kerusakan-toilet');
    }

    // * ======================================================================================
    // *                                    BAGIAN USER
    // * ======================================================================================
    // Kerusakan Toilet
    public function UserSemuaKerusakanToilet()
    {
        $data = DataKerusakanToilet::all();
        return view('user.laporan_kerusakan.data-kerusakan-toilet.semua-kerusakan-toilet', compact('data'));
    }
    public function UserTambahKerusakanToilet()
    {
        return view('user.laporan_kerusakan.data-kerusakan-toilet.tambah-kerusakan-toilet');
    }
    public function UserSimpanKerusakanToilet(Request $request)
    {
        DataKerusakanToilet::create($request->all());
        return redirect('user-semua-kerusakan-toilet');
    }
    public function UserHapusKerusakanToilet($id)
    {
        $data = DataKerusakanToilet::findOrFail($id);
        $data->delete();

        return redirect('user-semua-kerusakan-toilet');
    }


    // ? ======================================================================================
    // ?                                    PRINT LAPORAN
    // ? ======================================================================================
    public function printPDFkerusakanToilet($id)
    {
        $data = DataKerusakanToilet::findOrFail($id);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('report.print-pdf-kerusakan-toilet', compact('data')));
        $mpdf->Output();
    }

}

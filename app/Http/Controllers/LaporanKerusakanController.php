<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKerusakanToilet;
use Illuminate\Support\Facades\Log;

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
        $validatedData = $request->validate([
            'kd_karyawan' => 'required|string',
            'kd_toilet' => 'required|string',
            'tanggal_pembuatan' => 'required|date',
            'tanggal_kejadian' => 'required|date',
            'nama_kerusakan' => 'required|string|max:255',
            'lokasi_kerusakan' => 'required|string|max:255',
            'kronologi_kerusakan' => 'required|string',
            'tindakan' => 'required|string',
            'lampiran_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'yang_melaporkan' => 'required|string|max:255',
            'yang_mengetahui' => 'required|string|max:255',
            'catatan_perbaikan' => 'required|string',
            'yang_mengerjakan' => 'required|string|max:255'
        ]);

        try {
            $dataKerusakanToilet = new DataKerusakanToilet();
            $dataKerusakanToilet->kd_karyawan = $validatedData['kd_karyawan'];
            $dataKerusakanToilet->kd_toilet = $validatedData['kd_toilet'];
            $dataKerusakanToilet->tanggal_pembuatan = $validatedData['tanggal_pembuatan'];
            $dataKerusakanToilet->tanggal_kejadian = $validatedData['tanggal_kejadian'];
            $dataKerusakanToilet->nama_kerusakan = $validatedData['nama_kerusakan'];
            $dataKerusakanToilet->lokasi_kerusakan = $validatedData['lokasi_kerusakan'];
            $dataKerusakanToilet->kronologi_kerusakan = $validatedData['kronologi_kerusakan'];
            $dataKerusakanToilet->tindakan = $validatedData['tindakan'];
            $dataKerusakanToilet->yang_melaporkan = $validatedData['yang_melaporkan'];
            $dataKerusakanToilet->yang_mengetahui = $validatedData['yang_mengetahui'];
            $dataKerusakanToilet->catatan_perbaikan = $validatedData['catatan_perbaikan'];
            $dataKerusakanToilet->yang_mengerjakan = $validatedData['yang_mengerjakan'];

            if ($request->hasFile('lampiran_foto')) {
                $imagePath = $request->file('lampiran_foto')->store('data_kerusakan_toilet', 'public');
                $dataKerusakanToilet->lampiran_foto = $imagePath;
            }

            // Log data yang akan disimpan
            Log::info('Data yang akan disimpan:', $dataKerusakanToilet->toArray());

            $dataKerusakanToilet->save();

            // Log setelah data berhasil disimpan
            Log::info('Data berhasil disimpan.');

            return redirect('semua-kerusakan-toilet')->with('success', 'Data kerusakan toilet berhasil disimpan.');
        } catch (\Exception $e) {
            // Log error jika terjadi kesalahan
            Log::error('Error saat menyimpan data:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
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

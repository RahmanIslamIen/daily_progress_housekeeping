<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanUbahDailyShift;
use App\Models\PermintaanUbahToilet;

class PermintaanPerubahanController extends Controller
{
    // * ======================================================================================
    // *                                    BAGIAN ADMIN
    // * ======================================================================================

    // * Permintaan Perubahan
    // Permintaan Perubahan Daily Shift
    public function semuaPermintaanUbahDailyShift()
    {
        $data = PermintaanUbahDailyShift::all();
        return view('admin.permintaan_perubahaan.perubahan-daily-shift.semua-perubahan-daily-shift', compact('data'));
    }
    public function tambahPermintaanUbahDailyShift()
    {
        return view('admin.permintaan_perubahaan.perubahan-daily-shift.tambah-perubahan-daily-shift');

    }
    public function simpanPermintaanUbahDailyShift(Request $request)
    {
        PermintaanUbahDailyShift::create($request->all());
        return redirect('semua-permintaan-perubahan-daily-shift')->with('success', 'berhasil simpan permintaan!');
    }
    public function editPermintaanUbahDailyShift($id)
    {
        $data = PermintaanUbahDailyShift::find($id);
        return view('admin.permintaan_perubahaan.perubahan-daily-shift.ubah-perubahan-daily-shift', compact('data'));
    }
    public function ubahPermintaanUbahDailyShift(Request $request, $id)
    {
        $data = PermintaanUbahDailyShift::findOrFail($id);
        $data->update($request->all());

        return redirect('semua-permintaan-perubahan-daily-shift')->with('success', 'berhasil ubah permintaan!');
    }
    public function hapusPermintaanUbahDailyShift($id)
    {
        $data = PermintaanUbahDailyShift::findOrFail($id);
        $data->delete();

        return redirect('semua-permintaan-perubahan-daily-shift')->with('success', 'hapus permintaan perubahan daily shift!');
    }
    // Permintaan Perubahan Toilet
    public function semuaPermintaanUbahToilet()
    {
        $data = PermintaanUbahToilet::all();
        return view('admin.permintaan_perubahaan.perubahan-toilet.semua-perubahan-toilet', compact('data'));
    }
    public function tambahPermintaanUbahToilet()
    {
        return view('admin.permintaan_perubahaan.perubahan-toilet.tambah-perubahan-toilet');
    }
    public function simpanPermintaanUbahToilet(Request $request)
    {
        PermintaanUbahToilet::create($request->all());
        return redirect('semua-permintaan-perubahan-toilet')->with('success', 'simpan permintaan perubahan!');
    }
    public function editPermintaanUbahToilet($id)
    {
        $data = PermintaanUbahToilet::find($id);
        return view('admin.permintaan_perubahaan.perubahan-toilet.ubah-perubahan-toilet', compact('data'));
    }
    public function ubahPermintaanUbahToilet(Request $request, $id)
    {
        $data = PermintaanUbahToilet::findOrFail($id);
        $data->update($request->all());

        return redirect('semua-permintaan-perubahan-toilet')->with('success', 'ubah permintaan perubahan!');
    }
    public function hapusPermintaanUbahToilet($id)
    {
        $data = PermintaanUbahToilet::findOrFail($id);
        $data->delete();

        return redirect('semua-permintaan-perubahan-toilet')->with('success', 'hapus permintaan perubahan!');
    }

    // * ======================================================================================
    // *                                    BAGIAN USER
    // * ======================================================================================

    // * Permintaan Perubahan
    // Permintaan Perubahan Daily Shift
    public function UserSemuaPermintaanUbahDailyShift()
    {
        $data = PermintaanUbahDailyShift::all();
        return view('user.permintaan_perubahaan.perubahan-daily-shift.semua-perubahan-daily-shift', compact('data'));
    }
    public function UserTambahPermintaanUbahDailyShift()
    {
        return view('user.permintaan_perubahaan.perubahan-daily-shift.tambah-perubahan-daily-shift');

    }
    public function UserSimpanPermintaanUbahDailyShift(Request $request)
    {
        PermintaanUbahDailyShift::create($request->all());
        return redirect('user-semua-permintaan-perubahan-daily-shift')->with('success', 'berhasil menambah permintaan perubahan!');
    }
    public function UserHapusPermintaanUbahDailyShift($id)
    {
        $data = PermintaanUbahDailyShift::findOrFail($id);
        $data->delete();

        return redirect('user-semua-permintaan-perubahan-daily-shift')->with('success', 'hapus permintaan perubahaan!');
    }
    // Permintaan Perubahan Toilet
    public function UserSemuaPermintaanUbahToilet()
    {
        $data = PermintaanUbahToilet::all();
        return view('user.permintaan_perubahaan.perubahan-toilet.semua-perubahan-toilet', compact('data'));
    }
    public function UserTambahPermintaanUbahToilet()
    {
        return view('user.permintaan_perubahaan.perubahan-toilet.tambah-perubahan-toilet');
    }
    public function UserSimpanPermintaanUbahToilet(Request $request)
    {
        PermintaanUbahToilet::create($request->all());
        return redirect('user-semua-permintaan-perubahan-toilet')->with('success', 'simpan permintaan ubah!');
    }
    public function UserHapusPermintaanUbahToilet($id)
    {
        $data = PermintaanUbahToilet::findOrFail($id);
        $data->delete();

        return redirect('user-semua-permintaan-perubahan-toilet')->with('success', 'hapus permintaan perubahan!');
    }

}

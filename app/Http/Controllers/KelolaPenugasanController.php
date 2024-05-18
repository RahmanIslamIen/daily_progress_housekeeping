<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyShift;
use App\Models\ShiftTask;

class KelolaPenugasanController extends Controller
{
    // * ======================================================================================
    // *                                    BAGIAN ADMIN
    // * ======================================================================================

    // * Shift Task
    public function semuaShiftTask()
    {
        $data = ShiftTask::all();
        return view('admin.kelola_penugasan.shift-task.semua-shift-task', compact('data'));
    }
    public function tambahShiftTask()
    {
        return view('admin.kelola_penugasan.shift-task.tambah-shift-task');
    }
    public function simpanShiftTask(Request $request)
    {
        ShiftTask::create($request->all());
        return redirect('semua-shift-task');
    }
    public function editShiftTask($id)
    {
        $data = ShiftTask::find($id);
        return view('admin.kelola_penugasan.shift-task.ubah-shift-task', compact('data'));
    }
    public function ubahShiftTask(Request $request, $id)
    {
        $dailyShift = ShiftTask::findOrFail($id);
        $dailyShift->update($request->all());

        return redirect('semua-shift-task');
    }
    public function hapusShiftTask($id)
    {
        $dailyShift = ShiftTask::findOrFail($id);
        $dailyShift->delete();

        return redirect('semua-shift-task');
    }
    // * Daily Shift
    public function semuaDailyShift()
    {
        $data = DailyShift::all();
        return view('admin.kelola_penugasan.daily-shift.semua-daily-shift', compact('data'));
    }
    public function tambahDailyShift()
    {
        return view('admin.kelola_penugasan.daily-shift.tambah-daily-shift');
    }
    public function simpanDailyShift(Request $request)
    {
        $request->validate([
            'kd_daily_task' => 'required',
            'ploting_lantai' => 'required',
            'kd_karyawan' => 'required',
            'jenis_shift' => 'required',
            'tanggal' => 'required',
            'nama' => 'required',
            'checklist_masuk' => 'required',
            'checklist_keluar' => 'required',
        ]);

        DailyShift::create($request->all());

        return redirect('semua-daily-shift');
    }
    public function editDailyShift($id)
    {
        $dailyShift = DailyShift::findOrFail($id);

        return view('admin.kelola_penugasan.daily-shift.ubah-daily-shift', compact('dailyShift'));
    }
    public function ubahDailyShift(Request $request, $id)
    {
        $request->validate([
            'kd_daily_task' => 'required',
            'ploting_lantai' => 'required',
            'kd_karyawan' => 'required',
            'jenis_shift' => 'required',
            'tanggal' => 'required',
            'nama' => 'required',
            'checklist_masuk' => 'required',
            'checklist_keluar' => 'required',
        ]);

        $dailyShift = DailyShift::findOrFail($id);
        $dailyShift->update($request->all());

        return redirect('semua-daily-shift');
    }
    public function hapusDailyShift($id)
    {
        $dailyShift = DailyShift::findOrFail($id);
        $dailyShift->delete();

        return redirect('semua-daily-shift');
    }

    // * ======================================================================================
    // *                                    BAGIAN USER
    // * ======================================================================================

    // * Daily Shift 
    public function UserSemuaDailyShift()
    {
        $data = DailyShift::all();
        return view('user.absensi_harian.daily-shift.semua-daily-shift', compact('data'));
    }
    public function UserTambahDailyShift()
    {
        return view('user.absensi_harian.daily-shift.tambah-daily-shift');
    }
    public function UserSimpanDailyShift(Request $request)
    {
        DailyShift::create($request->all());

        return redirect('user-semua-daily-shift');
    }

    // ? ======================================================================================
    // ?                                    PRINT LAPORAN
    // ? ======================================================================================
    // print shift task
    public function printShiftTask()
    {
        $data = ShiftTask::all();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('report.print-pdf-shift-task', compact('data')));
        $mpdf->Output();
    }
    // print daily shift
    public function printPDFdailyShift()
    {
        $data = DailyShift::all();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('report.print-pdf-daily-shift', compact('data')));
        $mpdf->Output();
    }
}

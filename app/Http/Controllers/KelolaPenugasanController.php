<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DailyShift;
use App\Models\ShiftTask;
use Illuminate\Support\Facades\Auth;

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
        $lastTask = ShiftTask::orderBy('kd_daily_task', 'desc')->first();
        $newKdDailyTask = 'T001';

        if ($lastTask) {
            $lastNumber = intval(substr($lastTask->kd_daily_task, 1));
            $newKdDailyTask = 'T' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        }

        return view('admin.kelola_penugasan.shift-task.tambah-shift-task', compact('newKdDailyTask'));
    }
    public function simpanShiftTask(Request $request)
    {
        $request->validate([
            'kd_daily_task' => 'required',
            'jam' => 'required',
            'task_pekerjaan' => 'required',
            'jenis_toilet' => 'required',
            'keterangan' => 'required',
        ]);

        ShiftTask::create($request->all());

        return redirect('semua-shift-task')->with('success', 'Shift Task berhasil ditambahkan!');
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

        return redirect('semua-shift-task')->with('success', 'Shift Task berhasil diperbarui!');
    }
    public function hapusShiftTask($id)
    {
        $dailyShift = ShiftTask::findOrFail($id);
        $dailyShift->delete();

        return redirect('semua-shift-task')->with('success', 'Shift Task berhasil dihapus!');
    }
    // * Daily Shift
    public function semuaDailyShift()
    {
        $data = DailyShift::all();
        return view('admin.kelola_penugasan.daily-shift.semua-daily-shift', compact('data'));
    }
    public function tambahDailyShift()
    {
        $shiftTasks = ShiftTask::all();
        return view('admin.kelola_penugasan.daily-shift.tambah-daily-shift', compact('shiftTasks'));
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

        return redirect('semua-daily-shift')->with('success', 'berhasil di simpan!');
    }
    public function editDailyShift($id)
    {
        $dailyShift = DailyShift::findOrFail($id);
        $shiftTasks = ShiftTask::all();
        return view('admin.kelola_penugasan.daily-shift.ubah-daily-shift', compact('dailyShift', 'shiftTasks'));
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

        return redirect('semua-daily-shift')->with('success', 'berhasil di update!');
    }
    public function hapusDailyShift($id)
    {
        $dailyShift = DailyShift::findOrFail($id);
        $dailyShift->delete();

        return redirect('semua-daily-shift')->with('success', 'berhasil di hapus!');
    }

    // * ======================================================================================
    // *                                    BAGIAN USER
    // * ======================================================================================

    // * Daily Shift 
    public function UserSemuaDailyShift()
    {
        $data = DailyShift::all()->where('nama', Auth::user()->name);
        return view('user.absensi_harian.daily-shift.semua-daily-shift', compact('data'));
    }
    public function UserTambahDailyShift()
    {
        $shiftTasks = ShiftTask::all();
        return view('user.absensi_harian.daily-shift.tambah-daily-shift', compact('shiftTasks'));
    }
    public function UserSimpanDailyShift(Request $request)
    {
        DailyShift::create($request->all());

        return redirect('user-semua-daily-shift')->with('success', 'berhasil absensi!');
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
    public function aturPrintprintPDFdailyShift()  // admin
    {
        $listNamaKaryawan = DailyShift::distinct()->pluck('nama');
        return view('admin.kelola_penugasan.daily-shift.atur-print-daily-shift', compact('listNamaKaryawan'));
    }
    public function aturPrintprintPDFdailyShiftUser() // user
    {
        $listNamaKaryawan = DailyShift::distinct()->pluck('nama');
        return view('user.absensi_harian.daily-shift.atur-print-daily-shift', compact('listNamaKaryawan'));
    }
    public function printPDFdailyShift(Request $request)
    {
        $startDate = Carbon::parse($request->input('start_date'))->locale('id')->isoFormat('dddd, D MMMM YYYY');
        $endDate = Carbon::parse($request->input('end_date'))->locale('id')->isoFormat('dddd, D MMMM YYYY');
        $nama = $request->input('nama');

        $dailyShifts = DailyShift::whereBetween('tanggal', [$request->input('start_date'), $request->input('end_date')])
            ->where('nama', 'LIKE', "%$nama%")
            ->get();

        $mpdf = new \Mpdf\Mpdf();
        $html = view('report.print-pdf-daily-shift', compact('dailyShifts', 'startDate', 'endDate', 'nama'))->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}

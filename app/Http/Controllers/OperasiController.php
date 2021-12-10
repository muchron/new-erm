<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Operasi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OperasiController extends Controller
{
    public function index()
    {


        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();

        $label = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $dataCaesar = [];
        $dataCuretage = [];

        for ($i = 1; $i <= 12; $i++) {
            $sc = Operasi::whereMonth('tgl_operasi', $i)
                ->whereYear('tgl_operasi', $sekarang->year)
                ->whereHas('paketOperasi', function ($query) {
                    $query->where('nm_perawatan', 'like', '%SC%');
                    $query->orWhere('nm_perawatan', 'like', '%Sectio Caesaria%');
                })->count();
            $curetage = Operasi::whereMonth('tgl_operasi', $i)
                ->whereYear('tgl_operasi', $sekarang->year)
                ->whereHas('paketOperasi', function ($query) {
                    $query->where('nm_perawatan', 'like', '%curetage%');
                })->count();

            $dataCaesar[] = $sc;
            $dataCuretage[] = $curetage;
        }

        return view('dashboard.content.operasi.list_operasi', [
            'title' => 'Data Operasi',
            'bigTitle' => 'Operasi',
            'month' => 'Jadwal Operasi : ' . $sekarang->translatedFormat('d F Y'),
            'dateNow' => $sekarang->toDateString(),
            'dateStart' => $awalBulan->toDateString(),
            'label' => $label,
            'dataCaesar' => $dataCaesar,
            'dataCuretage' => $dataCuretage,
        ]);
    }
    public function json(Request $request)
    {
        $data = '';
        $tanggal = new Carbon('this month');
        $sekarang = $tanggal->now();
        $awalBulan = $tanggal->startOfMonth();
        if ($request->ajax()) {
            if (!empty($request->tgl_pertama) || !empty($request->tgl_kedua)) {
                $data = Operasi::whereBetween('tgl_operasi', [$request->tgl_pertama . ' 00:00:00', $request->tgl_kedua . ' 23:59:59'])
                    ->whereHas('paketOperasi', function ($query) use ($request) {
                        if ($request->operasi == 'sc') {
                            $query->where('nm_perawatan', 'like', '%SC%');
                            $query->orWhere('nm_perawatan', 'like', '%Sectio Caesaria%');
                        } else if ($request->operasi == 'curetage') {
                            $query->where('nm_perawatan', 'like', '%Curetage%');
                        }
                    })
                    ->whereHas('dokter', function ($query) use ($request) {
                        $query->where('nm_dokter', 'like', '%' . $request->dokter . '%');
                    })
                    ->whereHas('pembiayaan', function ($query) use ($request) {
                        $query->where('png_jawab', 'like', '%' . $request->pembiayaan . '%');
                    });
            } else {
                $data = Operasi::with('paketOperasi')
                    ->where('tgl_operasi', '>=', $sekarang->toDateString() . ' 00:00:00');
            }
        }
        return DataTables::of($data)
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && $request->get('search')['value']) {
                    return $query->whereHas('dokter', function ($query) use ($request) {
                        $query->where('nm_dokter', 'like', '%' . $request->get('search')['value'] . '%');
                    });
                }
            })
            ->editColumn('tgl_operasi', function ($data) {
                return Carbon::parse($data->tgl_operasi)->translatedFormat('d F Y (H:i:s)');
            })
            ->editColumn('nm_perawatan', function ($data) {
                return $data->paketOperasi->nm_perawatan;
            })
            ->editColumn('dokter', function ($data) {
                return $data->dokter->nm_dokter;
            })
            ->editColumn('asisten1', function ($data) {
                return $data->asisten1->nama;
            })
            ->editColumn('asisten2', function ($data) {
                return $data->asisten2->nama;
            })
            ->editColumn('dokterAnestesi', function ($data) {
                return $data->dokterAnestesi->nm_dokter;
            })
            ->editColumn('asistenAnestesi', function ($data) {
                return $data->asistenAnestesi->nama;
            })
            ->editColumn('dokterAnak', function ($data) {
                return $data->dokterAnak->nm_dokter;
            })
            ->editColumn('omloop', function ($data) {
                return $data->omloops->nama;
            })
            ->editColumn('pembiayaan', function ($data) {
                return $data->pembiayaan->png_jawab;
            })
            ->make(true);
    }

    public function diagram($tahun)
    {
        for ($i = 1; $i <= 12; $i++) {
            $sc = Operasi::whereMonth('tgl_operasi', $i)
                ->whereYear('tgl_operasi', $tahun)
                ->whereHas('paketOperasi', function ($query) {
                    $query->where('nm_perawatan', 'like', '%SC%');
                    $query->orWhere('nm_perawatan', 'like', '%Sectio Caesaria%');
                })->count();
            $curetage = Operasi::whereMonth('tgl_operasi', $i)
                ->whereYear('tgl_operasi', $tahun)
                ->whereHas('paketOperasi', function ($query) {
                    $query->where('nm_perawatan', 'like', '%curetage%');
                })->count();

            $dataCaesar[] = $sc;
            $dataCuretage[] = $curetage;
        }

        return response()->json([
            'sc' => $dataCaesar,
            'curetage' => $dataCuretage
        ]);
    }
}

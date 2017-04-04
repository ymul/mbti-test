<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\KategoriSoal;
use App\PenilaianPeserta;
use App\PenilaianPesertaDetail;
use App\OpsiSoal;
use App\Peserta;
use App\KategoriSoalPenilaian;
use Illuminate\Support\Facades\Auth;

class SoalTestController extends Controller {

    public function soalTest(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $kategorisoal = KategoriSoal::where('nama', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $kategorisoal = KategoriSoal::paginate($perPage);
        }

        return view('soal-test.soal-test', compact('kategorisoal'));
    }

    public function formTest($kategoriSoalId) {
        $kategoriSoal = KategoriSoal::findOrFail($kategoriSoalId);
        $counterSoal = 1;
        return view('soal-test.form-test', compact('kategoriSoal', 'counterSoal'));
    }

    public function proccessTest(Request $request, $kategoriSoalId) {
        $totalNilai = 0;
        $kategoriSoal = KategoriSoal::findOrFail($kategoriSoalId);
        $peserta = Peserta::where('user_id', '=', Auth::id())->first();
        $penilaianPeserta = new PenilaianPeserta();
        $penilaianPeserta->peserta_id = $peserta->id;
        $penilaianPeserta->kategori_soal_id = $kategoriSoal->id;
        $penilaianPeserta->total_nilai = $totalNilai;
        $penilaianPeserta->save();

        foreach ($kategoriSoal->soal as $row):
            $fieldSoalForm = 'soal' . $row->id;
            $opsiSoal = $request->$fieldSoalForm;
            $penilaianPesertaDetail = new PenilaianPesertaDetail();
            $penilaianPesertaDetail->penilaian_peserta_id = $penilaianPeserta->id;
            $penilaianPesertaDetail->soal_id = $row->id;
            $penilaianPesertaDetail->opsi_soal_id = $opsiSoal;
            $dataOpsiSoal = OpsiSoal::find($opsiSoal);
            $penilaianPesertaDetail->nilai = $dataOpsiSoal->nilai;
            $penilaianPesertaDetail->save();
            $totalNilai = $totalNilai + $dataOpsiSoal->nilai;
        endforeach;
        $penilaianPeserta->total_nilai = $totalNilai;
        $penilaianPeserta->save();

        //get result
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $result = $kategoriSoalPenilaian->getResult($kategoriSoal->id, $totalNilai);
        Session::flash('flash_message', 'Successfully Processed!');
        return view('soal-test.result-test', compact('result', 'kategoriSoal'));
    }

}

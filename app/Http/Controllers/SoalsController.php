<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Soal;
use App\KategoriSoal;
use App\TipeSoal;
use App\OpsiSoal;
use Illuminate\Http\Request;
use Session;

class SoalsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $soals = Soal::where('kategori_soal_id', 'LIKE', "%$keyword%")
                    ->orWhere('tipe_soal_id', 'LIKE', "%$keyword%")
                    ->orWhere('soal', 'LIKE', "%$keyword%")
                    ->orWhere('urutan', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $soals = Soal::paginate($perPage);
        }

        return view('soal.index', compact('soals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $getKategoriSoal = KategoriSoal::all();
        $kategoriSoal = array();
        foreach ($getKategoriSoal as $r) {
            $kategoriSoal[$r->id] = $r->nama;
        }

        $getTipeSoal = TipeSoal::all();
        $tipeSoal = array();
        foreach ($getTipeSoal as $r) {
            $tipeSoal[$r->id] = $r->nama;
        }
        return view('soal.create', compact('kategoriSoal', 'tipeSoal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
            'kategori_soal_id' => 'required',
            'tipe_soal_id' => 'required',
            'soal' => 'required',
            'urutan' => 'required'
        ]);
        $requestData = $request->all();

        $soal = Soal::create($requestData);

        if ($request->tipe_soal_id == 1) {
            $opsiA = new OpsiSoal();
            $opsiA->soal_id = $soal->id;
            $opsiA->opsi = 'A';
            $opsiA->jawaban = $request->a;
            $opsiA->nilai = $request->a_nilai;
            $opsiA->save();

            $opsiB = new OpsiSoal();
            $opsiB->soal_id = $soal->id;
            $opsiB->opsi = 'B';
            $opsiB->jawaban = $request->b;
            $opsiB->nilai = $request->b_nilai;
            $opsiB->save();

            $opsiC = new OpsiSoal();
            $opsiC->soal_id = $soal->id;
            $opsiC->opsi = 'C';
            $opsiC->jawaban = $request->c;
            $opsiC->nilai = $request->c_nilai;
            $opsiC->save();

            $opsiD = new OpsiSoal();
            $opsiD->soal_id = $soal->id;
            $opsiD->opsi = 'D';
            $opsiD->jawaban = $request->d;
            $opsiD->nilai = $request->d_nilai;
            $opsiD->save();
        }

        Session::flash('flash_message', 'Soal added!');

        return redirect('soal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $soal = Soal::findOrFail($id);

        return view('soal.show', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $getKategoriSoal = KategoriSoal::all();
        $kategoriSoal = array();
        foreach ($getKategoriSoal as $r) {
            $kategoriSoal[$r->id] = $r->nama;
        }

        $getTipeSoal = TipeSoal::all();
        $tipeSoal = array();
        foreach ($getTipeSoal as $r) {
            $tipeSoal[$r->id] = $r->nama;
        }
        $soal = Soal::findOrFail($id);
        $checkOpsiA = OpsiSoal::where('opsi', '=', 'A')->where('soal_id', '=', $id)->first();
        $checkOpsiB = OpsiSoal::where('opsi', '=', 'B')->where('soal_id', '=', $id)->first();
        $checkOpsiC = OpsiSoal::where('opsi', '=', 'C')->where('soal_id', '=', $id)->first();
        $checkOpsiD = OpsiSoal::where('opsi', '=', 'D')->where('soal_id', '=', $id)->first();

        return view('soal.edit', compact('soal', 'kategoriSoal', 'tipeSoal', 'checkOpsiA', 'checkOpsiB', 'checkOpsiC', 'checkOpsiD'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request) {
        $this->validate($request, [
            'kategori_soal_id' => 'required',
            'tipe_soal_id' => 'required',
            'soal' => 'required',
            'urutan' => 'required'
        ]);
        $requestData = $request->all();

        $soal = Soal::findOrFail($id);
        $tipeSoalIdOld = $soal->tipe_soal_id;
        $soal->update($requestData);
        
        if ($request->tipe_soal_id == 1) {
            $checkOpsiA = OpsiSoal::where('opsi', '=', 'A')->where('soal_id', '=', $id);
            
            if($checkOpsiA->count() > 0){
                $opsiA = OpsiSoal::find($checkOpsiA->first()->id);
            }else{
                $opsiA = new OpsiSoal();
            }
            
            $opsiA->soal_id = $soal->id;
            $opsiA->opsi = 'A';
            $opsiA->jawaban = $request->a;
            $opsiA->nilai = $request->a_nilai;
            $opsiA->save();
            
            $checkOpsiB = OpsiSoal::where('opsi', '=', 'B')->where('soal_id', '=', $id);
            
            if($checkOpsiB->count() > 0){
                $opsiB = OpsiSoal::find($checkOpsiB->first()->id);
            }else{
                $opsiB = new OpsiSoal();
            }

            $opsiB->soal_id = $soal->id;
            $opsiB->opsi = 'B';
            $opsiB->jawaban = $request->b;
            $opsiB->nilai = $request->b_nilai;
            $opsiB->save();
            
            $checkOpsiC = OpsiSoal::where('opsi', '=', 'C')->where('soal_id', '=', $id);
            
            if($checkOpsiC->count() > 0){
                $opsiC = OpsiSoal::find($checkOpsiC->first()->id);
            }else{
                $opsiC = new OpsiSoal();
            }

            $opsiC->soal_id = $soal->id;
            $opsiC->opsi = 'C';
            $opsiC->jawaban = $request->c;
            $opsiC->nilai = $request->c_nilai;
            $opsiC->save();

            $checkOpsiD = OpsiSoal::where('opsi', '=', 'D')->where('soal_id', '=', $id);
            
            if($checkOpsiD->count() > 0){
                $opsiD = OpsiSoal::find($checkOpsiD->first()->id);
            }else{
                $opsiD = new OpsiSoal();
            }
            
            $opsiD->soal_id = $soal->id;
            $opsiD->opsi = 'D';
            $opsiD->jawaban = $request->d;
            $opsiD->nilai = $request->d_nilai;
            $opsiD->save();
        }

        Session::flash('flash_message', 'Soal updated!');

        return redirect('soal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Soal::destroy($id);

        Session::flash('flash_message', 'Soal deleted!');

        return redirect('soal');
    }

}

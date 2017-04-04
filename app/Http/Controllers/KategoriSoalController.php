<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KategoriSoal;
use Illuminate\Http\Request;
use Session;
use App\KategoriSoalPenilaian;

class KategoriSoalController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $kategorisoal = KategoriSoal::where('nama', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $kategorisoal = KategoriSoal::paginate($perPage);
        }

        return view('kategori-soal.index', compact('kategorisoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('kategori-soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {

        $requestData = $request->all();

        KategoriSoal::create($requestData);

        Session::flash('flash_message', 'KategoriSoal added!');

        return redirect('kategori-soal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $kategorisoal = KategoriSoal::findOrFail($id);

        return view('kategori-soal.show', compact('kategorisoal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $kategorisoal = KategoriSoal::findOrFail($id);

        return view('kategori-soal.edit', compact('kategorisoal'));
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

        $requestData = $request->all();

        $kategorisoal = KategoriSoal::findOrFail($id);
        $kategorisoal->update($requestData);

        Session::flash('flash_message', 'KategoriSoal added!');

        return redirect('kategori-soal');
    }

    public function addResult(Request $request, $kategoriId) {
        $this->validate($request, [
            'range_awal' => 'required',
            'range_akhir' => 'required',
            'hasil' => 'required'
        ]);
        $kategoriPenilaian = new KategoriSoalPenilaian();
        $kategoriPenilaian->kategori_id = $kategoriId;
        $kategoriPenilaian->range_awal = $request->range_awal;
        $kategoriPenilaian->range_akhir = $request->range_akhir;
        $kategoriPenilaian->hasil = $request->hasil;
        $kategoriPenilaian->save();
        Session::flash('flash_message', 'Result added!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        KategoriSoal::destroy($id);

        Session::flash('flash_message', 'KategoriSoal deleted!');

        return redirect('kategori-soal');
    }

    public function destroyResult($id) {
        KategoriSoalPenilaian::destroy($id);
        Session::flash('flash_message', 'Result deleted!');

        return redirect()->back();
    }

}

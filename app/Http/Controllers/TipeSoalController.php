<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TipeSoal;
use Illuminate\Http\Request;
use Session;

class TipeSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tipesoal = TipeSoal::where('nama', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $tipesoal = TipeSoal::paginate($perPage);
        }

        return view('tipe-soal.index', compact('tipesoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tipe-soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        TipeSoal::create($requestData);

        Session::flash('flash_message', 'TipeSoal added!');

        return redirect('tipe-soal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tipesoal = TipeSoal::findOrFail($id);

        return view('tipe-soal.show', compact('tipesoal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tipesoal = TipeSoal::findOrFail($id);

        return view('tipe-soal.edit', compact('tipesoal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $tipesoal = TipeSoal::findOrFail($id);
        $tipesoal->update($requestData);

        Session::flash('flash_message', 'TipeSoal updated!');

        return redirect('tipe-soal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        TipeSoal::destroy($id);

        Session::flash('flash_message', 'TipeSoal deleted!');

        return redirect('tipe-soal');
    }
}

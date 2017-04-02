<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peserta;
use Illuminate\Http\Request;
use Session;
use App\User;

class PesertaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $peserta = Peserta::where('nama', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $peserta = Peserta::paginate($perPage);
        }

        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, array(
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'));

        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Jadikan user ini sebagai peserta
        $user->assignRole('Peserta');

        $peserta = new Peserta();
        $peserta->nama = $request->nama;
        $peserta->user_id = $user->id;
        $peserta->save();

        Session::flash('flash_message', 'Peserta added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $peserta = Peserta::findOrFail($id);

        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $peserta = Peserta::findOrFail($id);

        return view('peserta.edit', compact('peserta'));
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

        $peserta = Peserta::findOrFail($id);
        $peserta->update($requestData);

        Session::flash('flash_message', 'Peserta updated!');

        return redirect('peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Peserta::destroy($id);

        Session::flash('flash_message', 'Peserta deleted!');

        return redirect('peserta');
    }

}

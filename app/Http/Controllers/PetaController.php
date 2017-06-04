<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetaRequest;
use App\pegawai;
use App\Peta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth');
    }

    public function index(){
        $petas = Peta::all();
        return view('peta.index', compact('petas'));
    }

    public function show($id){
        $peta = Peta::findOrFail($id);
        return $peta;
    }

    public function create(){
        return view('peta.create');
    }

    public function store(PetaRequest $request){
        $input = $request->input();

        $peta = New Peta($input);

        $peta->save();

        return redirect(url( 'peta'));
    }

    public function storePegawai(PetaRequest $request, $id){
        $peta = Peta::findOrFail($id);

        $input = $request->input();

        $input['petas_id'] = $peta->id;

        $pegawai = New pegawai($input);

        Auth::user()->pegawais()->save($input);

        return back();
    }

    public function pegawais(){
        return $this->HasMany(pegawai::class);
    }

}

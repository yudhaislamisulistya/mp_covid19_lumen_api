<?php

namespace App\Http\Controllers;

use App\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = Cases::all();
        return response($data);
    }

    public function day(){
        $data = Cases::orderBy('id_case', 'desc')->first();
        return response($data);
    }

    public function total(){
        $data = Cases::all();
        $confirmed_cases = 0;
        $total_deaths = 0;
        $total_recovered = 0;
        $new_cases = 0;
        for ($i=0; $i < count($data); $i++) {
            $confirmed_cases = $confirmed_cases + $data[$i]->confirmed_cases;
            $total_deaths = $total_deaths + $data[$i]->total_deaths;
            $total_recovered = $total_recovered + $data[$i]->total_recovered;
            $new_cases = $new_cases + $data[$i]->new_cases;
        }
        $total = array();
        array_push($total, $confirmed_cases, $total_deaths, $total_recovered, $new_cases);
        return response($total);
    }

    public function show($id)
    {
        $data = Cases::where('id_case', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Cases();
        $data->confirmed_cases = $request->input('confirmed_cases');
        $data->total_deaths = $request->input('total_deaths');
        $data->total_recovered = $request->input('total_recovered');
        $data->new_cases = $request->input('new_cases');
        $data->date = $request->input('date');
        $data->save();
        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        $data = Cases::find($id);
        $data->confirmed_cases = $request->input('confirmed_cases');
        $data->total_deaths = $request->input('total_deaths');
        $data->total_recovered = $request->input('total_recovered');
        $data->new_cases = $request->input('new_cases');
        $data->date = $request->input('date');
        $data->save();
        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = Cases::where('id_case', $id)->delete();
        return response('Berhasil Menghapus Data');
    }

    //
}

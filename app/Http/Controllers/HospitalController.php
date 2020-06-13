<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
        $data = Hospital::all();
        return response($data);
    }

    public function show($id)
    {
        $data = Hospital::where('id_hospital', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Hospital();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->city = $request->input('city');
        $data->longitude = $request->input('longitude');
        $data->latitude = $request->input('latitude');
        $data->save();
        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        $data = Hospital::where('id_hospital', $id)->first();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->city = $request->input('city');
        $data->longitude = $request->input('longitude');
        $data->latitude = $request->input('latitude');
        $data->save();
        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = Hospital::where('id_hospital', $id)->first();
        $data->delete();
        return response('Berhasil Menghapus Data');
    }

    //
}

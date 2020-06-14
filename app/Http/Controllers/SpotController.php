<?php

namespace App\Http\Controllers;

use App\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
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
        $data = Spot::all();
        return response($data);
    }

    public function show($id)
    {
        $data = Spot::where('id_spot', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Spot();
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
        $data = Spot::find($id);
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
        $data = Spot::where('id_spot', $id)->delete();
        return response('Berhasil Menghapus Data');
    }

    //
}

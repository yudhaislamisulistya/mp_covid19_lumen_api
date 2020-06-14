<?php

namespace App\Http\Controllers;

use App\Dial;
use Illuminate\Http\Request;

class DialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(){
        $data = Dial::all();
        return response($data);
    }

    public function show($id)
    {
        $data = Dial::where('id_dial', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Dial();
        $data->name = $request->input('name');
        $data->cellphone = $request->input('cellphone');
        $data->save();
        return response('Berhasil Tambah Data');
    }
    public function update(Request $request, $id)
    {
        $data = Dial::find($id);
        $data->name = $request->input('name');
        $data->cellphone = $request->input('cellphone');
        $data->save();
        return response('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = Dial::where('id_dial', $id)->delete();
        return response('Berhasil Menghapus Data');
    }
}

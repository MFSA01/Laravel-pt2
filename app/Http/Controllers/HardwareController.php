<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;

class HardwareController extends Controller
{
    public function index(){
        $hardwares = Hardware::all();

        $data = [
            "hardwares" => $hardwares
        ];

        return view("hardware.index", $data);
    }

    public function destroy($id) {
        $hardware = Hardware::where("id", $id)->first();
        $hardware->delete();

        return redirect("/hardware");
    }

    public function create() {
        return view("hardware.tambah");
    }

    public function store(Request $request) {
        $hardware = $request->hardware;
        $keterangan = $request->keterangan;

        $dataHardware = new Hardware();
        $dataHardware->hardware = $hardware;
        $dataHardware->keterangan = $keterangan;
        $dataHardware->save();

        return redirect("/hardware");
    }

    public function edit($id){
        $hardware = Hardware::where("id", $id)->first();
        $data = [ 
           "hardware" => $hardware
        ];
    
        return view("hardware.edit", $data);
    }

    public function update(Request $request, $id) {
        $hardware = $request->hardware;
        $keterangan = $request->keterangan;

        $edithardware = Hardware::where("id", $id)->first();
        $edithardware->hardware = $hardware;
        $edithardware->keterangan = $keterangan;
        $edithardware->save();

        return redirect("/hardware");
    }
}

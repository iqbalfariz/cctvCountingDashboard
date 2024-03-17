<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cctv;

class CctvController extends Controller
{
    public function index (){
        $cctvs = Cctv::all();
        return view('pages.dashboard.cctv-list', ['cctvs' => $cctvs]);
    }

    public function create(){
        return view('pages.dashboard.cctv-create');
    }

    public function store(Request $request){
        $data = $request->all();

        // $request->validate([
        //     'name' => 'required',
        //     'amount' => 'required|numeric',
        //     'active' => 'required'
        // ]);

        Cctv::create($data);

        return redirect()->route('cctv.index');

        // dd($request->name);
    }

    public function edit(Cctv $cctv){
        return view('pages.dashboard.cctv-edit', ['cctv' => $cctv]);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $cctv = Cctv::findOrFail($id);
        $cctv->update($data);
        return redirect()->route('cctv.index');
    }

    public function destroy($id)
    {
        $cctv = Cctv::findOrFail($id);
        $cctv->delete();
        return redirect()->route('cctv.index');
    }
}

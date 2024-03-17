<?php

namespace App\Http\Controllers;

use App\Models\Counting;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CountingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $lastCountings;
    public function index()
    {
        //
        $countings = Counting::all();
        $lastCountings = Counting::latest()->limit(5)->get();
        foreach($lastCountings as $count){
            $createdAtDatabase = $count->created_at;
            $data['label'][] = Carbon::parse($createdAtDatabase)->setTimezone('Asia/Jakarta')->format('H:i:s');
            $data['data'][] = (int) $count->in;
        }
        $this->lastCountings = $data;
        // dd($lastCountings);
        return view('pages.dashboard.general-dashboard', compact('countings', 'lastCountings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Counting $counting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counting $counting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Counting $counting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counting $counting)
    {
        //
    }
}

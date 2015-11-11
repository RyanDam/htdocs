<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreBottleTreeRequest;
use App\Http\Controllers\Controller;
use App\BottleTree;

class bottleTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bts = BottleTree::orderBy('created_at', 'desc')->get();
        return view('bt.index', compact('bts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBottleTreeRequest $request)
    {
        $bt = BottleTree::create([
            'code' => $request->input('code'),
            'nameScience' => $request->input('nameScience'),
            'nameNormal' => $request->input('nameNormal'),
            'info' => $request->input('info'),
            'img' => $request->input('img')
        ]);
        return redirect()->route('bt.show', ['id' => $bt->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bt = BottleTree::find($id);
        return view('bt.show', compact('bt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bt = BottleTree::find($id);
        return view('bt.edit', compact('bt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBottleTreeRequest $request, $id)
    {
        $bt = BottleTree::find($id);
        $bt->code = $request->input('code');
        $bt->nameNormal = $request->input('nameNormal');
        $bt->nameScience = $request->input('nameScience');
        $bt->info = $request->input('info');
        $bt->img = $request->input('img');
        $bt->save();
        return redirect()->route('bt.show', ['id' => $bt->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bt = BottleTree::find($id);
        $bt->delete();
        return redirect()->route('bt.index');
    }
}

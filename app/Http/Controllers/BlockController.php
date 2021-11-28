<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Block::all());
        return view('blocks',['blocks' => Block::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);

        Block::create([
            'name' => request('name'),
            
        ]);

        return redirect('blocks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $name)
    {
        return view('blocks.edit', ['name' => $name ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $name)
    {
        request()->validate([
            'name' => 'required',
        ]);
        $post->update([
            'name' => request('name')
        ]);

        return redirect('blocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $name)
    {
        $name->delete();

            return redirect('blocks');
    }
}

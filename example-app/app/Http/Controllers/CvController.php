<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cv = CV::latest()->paginate(5);
    
        return view('index',compact('cv'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'interesting_position' => 'required',
            'Location' => 'required',

        ]);
    
        //cv::create($request->all());
        cv::create([
            'user_id' => $request->user_id,
            'interesting_position' => $request->interesting_position,
            'Location' => $request->Location,
        ]);
     
        return redirect()->route('items.index')
                        ->with('success','CV created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cV, $item)
    {
        $cV=$cV->find($item);
        return view('show',compact('cV'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $cV,$item)
    {
        
        $cV=$cV->find($item);
        return view('edit',compact('cV','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CV $cV,$item)
    {
        
        $request->validate([
            'interesting_position' => 'required',
            'Location' => 'required',
        ]);
    
        $cV->find($item)->update($request->all());
    
        return redirect()->route('items.index')
                        ->with('success','CV updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $cV,$item)
    {
        
        $cV->find($item)->delete();
        return redirect()->route('items.index')
                        ->with('success','CV deleted successfully');
    }
}

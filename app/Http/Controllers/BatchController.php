<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batch = Batch::all();
        return view('batches.index')->with('batches', $batch);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $courses= Course::pluck('name','id');
        return view('batches.create',compact('courses'));
        // return view('batches.create');
     

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('/batches')->with('flash_message','Batch added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batches', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch = Batch::find($id);
        return view('batches.edit')->with('batches', $batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('/batches')->with('flash_message', 'Batch updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Batch::destroy($id);
      return redirect('/batches')->with('flash_message', 'Batch Deleted!!');
        
    }
}

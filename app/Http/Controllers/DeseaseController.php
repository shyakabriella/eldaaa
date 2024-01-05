<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desease;

class DeseaseController extends Controller
{
        /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  function __construct()
    //  {
    //       $this->middleware('permission:desease-list|desease-create|desease-edit|desease-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:desease-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:desease-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:desease-delete', ['only' => ['destroy']]);
 
    //  }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
 
      {
  
          $desease = Desease::latest()->paginate(5);
          //dd($asset);
          return view('desease.index',compact('desease'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }
  
      
  
      /**
  
       * Show the form for creating a new resource.
  
       *
  
       * @return \Illuminate\Http\Response
  
       */
  
      public function create()
  
      {
          return view('desease.create');
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
              'details' => 'required',
          ]);
          Desease::create($request->all());
          return redirect()->route('desease.index')
                          ->with('success','Desease created successfully.');
  
      }
      /**
       * Display the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function show(Desease $desease)
  
      {
          return view('desease.show',compact('desease'));
      }
      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function edit(Desease $desease)
  
      {
          return view('desease.edit',compact('desease'));
      }
  
      
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
  
      public function update(Request $request, Desease $desease)
  
      {
           request()->validate([
              'name' => 'required',
              'details' => 'required',
             
          ]);
          $desease->update($request->all());
          return redirect()->route('desease.index')
                          ->with('success','desease updated successfully');
  
      }
      /**
  
       * Remove the specified resource from storage.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function destroy(Desease $desease)
  
      {
          $desease->delete();
          return redirect()->route('desease.index') 
                          ->with('success','desease deleted successfully');
      }
}

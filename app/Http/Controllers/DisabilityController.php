<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disability;

class DisabilityController extends Controller
{
          /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    //  function __construct()

    //  {
 
    //       $this->middleware('permission:disability-list|disability-create|disability-edit|disability-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:disability-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:disability-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:disability-delete', ['only' => ['destroy']]);
 
    //  }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
 
      {
  
          $disability = Disability::latest()->paginate(5);
          //dd($asset);
          return view('disability.index',compact('disability'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
  
      }
  
      
  
      /**
  
       * Show the form for creating a new resource.
  
       *
  
       * @return \Illuminate\Http\Response
  
       */
  
      public function create()
  
      {
          return view('disability.create');
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
          Disability::create($request->all());
          return redirect()->route('disability.index')
                          ->with('success','disability created successfully.');
  
      }
 
 
     
      /**
       * Display the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function show(Disability $disability)
  
      {
          return view('disability.show',compact('disability'));
      }
      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function edit(Disability $disability)
  
      {
          return view('disability.edit',compact('disability'));
      }
  
      
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
  
      public function update(Request $request, Disability $disability)
  
      {
           request()->validate([
              'name' => 'required',
              'details' => 'required',
             
          ]);
          $disability->update($request->all());
          return redirect()->route('disability.index')
                          ->with('success','disability updated successfully');
  
      }
      /**
  
       * Remove the specified resource from storage.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function destroy(Disability $disability)
  
      {
          $disability->delete();
          return redirect()->route('disability.index') 
                          ->with('success','desease deleted successfully');
      }
}

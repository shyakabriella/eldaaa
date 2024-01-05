<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    
       /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    //  function __construct()

    //  {
 
    //       $this->middleware('permission:education-list|education-create|education-edit|education-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:education-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:education-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:education-delete', ['only' => ['destroy']]);
 
    //  }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
 
      {
  
          $education = Education::latest()->paginate(5);
          return view('education.index',compact('education'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
  
      }
  
      
  
      /**
  
       * Show the form for creating a new resource.
  
       *
  
       * @return \Illuminate\Http\Response
  
       */
  
      public function create()
  
      {
  
          return view('education.create');
  
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
              'level' => 'required',
              'nclass' => 'required',
  
          ]);
          Education::create($request->all());
          return redirect()->route('education.index')
                          ->with('success','Product created successfully.');
  
      }
 
 
     
      /**
       * Display the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function show(Education $education)
  
      {
          return view('education.show',compact('education'));
      }
      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function edit(Education $education)
  
      {
          return view('education.edit',compact('education'));
      }
  
      
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
  
      public function update(Request $request, Education $education)
  
      {
           request()->validate([
              'level' => 'required',
              'nclass' => 'required',
          ]);
          $education->update($request->all());
          return redirect()->route('education.index')
                          ->with('success','education updated successfully');
  
      }
      /**
  
       * Remove the specified resource from storage.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function destroy(Education $education)
  
      {
          $education->delete();
          return redirect()->route('education.index') 
                          ->with('success','education deleted successfully');
      }
}

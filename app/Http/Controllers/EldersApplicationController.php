<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class EldersApplicationController extends Controller
{
        /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    //  function __construct()

    //  {
 
    //       $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:product-delete', ['only' => ['destroy']]);
 
    //  }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
 
      {
  
          $application = Application::latest()->paginate(5);
         // dd($application );
          return view('application.index',compact('application'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
  
      }
  
      
  
      /**
  
       * Show the form for creating a new resource.
  
       *
  
       * @return \Illuminate\Http\Response
  
       */
  
      public function create()
  
      {
          return view('asset.create');
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
              'number' => 'required',
              'location' => 'required',
  
          ]);
          Asset::create($request->all());
          return redirect()->route('assety.index')
                          ->with('success','asset created successfully.');
  
      }
 
 
     
      /**
       * Display the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function show(Asset $asset)
  
      {
          return view('asset.show',compact('asset'));
      }
      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function edit(Asset $asset)
  
      {
          return view('asset.edit',compact('asset'));
      }
  
      
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
  
      public function update(Request $request, Asset $asset)
  
      {
           request()->validate([
              'name' => 'required',
              'number' => 'required',
              'location' => 'required',
          ]);
          $asset->update($request->all());
          return redirect()->route('asset.index')
                          ->with('success','asset updated successfully');
  
      }
      /**
  
       * Remove the specified resource from storage.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
  
       */
      public function destroy(Asset $asset)
  
      {
          $asset->delete();
          return redirect()->route('assety.index') 
                          ->with('success','asset deleted successfully');
      }
}

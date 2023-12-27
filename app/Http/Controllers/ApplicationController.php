<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use \PDF;



class ApplicationController extends Controller
{
      /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  function __construct()

    //  {
    //       $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:event-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    //  }
 
     /**
 
      * Display a listing of the resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
      {
          $apply = Application::latest()->paginate(5);
          return view('application.index', compact('apply'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }
      
     /**
 
      * Show the form for creating a new resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function create()
 
     {
         return view('pages.index');
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
             'nid' => 'required',
             'phone' => 'required',
             'gender' => 'required',
             'province' => 'required',
             'district' => 'required',
             'sector' => 'required',
             'desease' => 'required',
             'village' => 'required',
             'ubudehe' => 'required',
             'asset' => 'required',
             'education' => 'required',
             'disability' => 'required',
         ]);
         Application::create($request->all());
         return redirect()->route('/')
                         ->with('success','Event created successfully.');
     }
     /**
 
      * Display the specified resource.
 
      *
      * @param  \App\Event  $product
      * @return \Illuminate\Http\Response
      */
     public function show(Event $event)
 
     {
         return view('events.show',compact('event'));
     }
     /**
 
      * Show the form for editing the specified resource.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
     public function edit(Event $event)
 
     {
         return view('events.edit',compact('events'));
     }
     /**
 
      * Update the specified resource in storage.
 
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Event $event)
 
     {
          request()->validate([
             'name' => 'required',
             'detail' => 'required',
         ]);
 
         $events->update($request->all());
         return redirect()->route('events.index')
                       ->with('success','events updated successfully');
     }


// ... your other methods ...

public function approve(Application $application)
    {
        // Implement the logic to approve the application
        $application->update(['status' => 'approved']);

        // Redirect to the approved applications view
        return redirect()->route('approved-applications.index')
            ->with('success', 'Application approved successfully');
    }

public function reject(Application $application)
{
    // Implement the logic to reject the application
    $application->delete();

    return redirect()->route('apply.index')
        ->with('success', 'Application rejected successfully');
}



 // ... your other methods ...

 public function approvedApplications()
 {
     $approvedApplications = Application::where('status', 'approved')->get();
     return view('pdf.approved-applications', ['applications' => $approvedApplications]);
 }

 public function generateApprovedPDF()
 {
     $approvedApplications = Application::where('status', 'approved')->get();

     // Check if there are approved applications
     if ($approvedApplications->isEmpty()) {
         return response()->json(['message' => 'No approved applications to generate PDF']);
     }

     // Generate PDF
     $pdf = PDF::loadView('pdf.approved-applications', ['applications' => $approvedApplications]);

     // Save or output the PDF as needed
     // For example, save to storage
     
     $pdf->save(storage_path('app/approved-applications.pdf'));



     return response()->json(['message' => 'PDF generated successfully']);
 }

 public function deleteRejectedApplications()
 {
     Application::where('status', 'rejected')->delete();

     return redirect()->route('apply.index')
         ->with('success', 'Rejected applications deleted successfully');
 }






 
     /**
 
      * Remove the specified resource from storage.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
 
     public function destroy(Event $event)
 
     {
         $event->delete();
         return redirect()->route('events.index')
                         ->with('success','Events deleted successfully');
     }




}

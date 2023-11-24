<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;
use DB;

class PolicyController extends Controller
{
    public function index()
    {
        $policy = Policy::latest()->paginate(5);
        //dd($policy);
        return view('policy.index',compact('policy'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function create()
     {
         return view('policy.create');
     }

     public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'publication_date' => 'required',
            'source_organization' => 'required',
        ]);
        Policy::create($request->all());
        return redirect()->route('polic.index')
                        ->with('success','Policy created successfully.');
    }

    // public function destroy(Policy $policy)

    // {

    //     $policy->delete();

    //     return redirect()->route('polic.index')
    //                     ->with('success','policyt deleted successfully');

    // }



    public function destroy($id)

    {
        DB::table("policies")->where('id',$id)->delete();
        return redirect()->route('polic.index')
                        ->with('success','Role deleted successfully');

    }
}

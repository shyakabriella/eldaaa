<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Models\Application;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  

    public function approval()
{
    return view('approval');
}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apply = Application::all();
        $totalApplications = Application::count();
        $approvedApplications = Application::where('status', 'approved')->count();
        //dd($approvedApplications);
        return view('home')
        ->with('totalApplications',$totalApplications);
      
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
        
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
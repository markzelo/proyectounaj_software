<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $selected_project_id = $user->selected_project_id;
      

        
            //consulatar incidencis reportadas por mi 

       $incidents = Incident::all();
          
        return view('report.ver_reportes')->with(compact('incidents'));
       
    }
}

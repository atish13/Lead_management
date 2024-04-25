<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leads;

class LeadsController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $leads = new Leads;
        $leads->title =$request['title'];
        $leads->email =$request['email'];
        $leads->contact =$request['contact'];
        $leads->save();
        return redirect()->route('view.leads');
    }
    public function view()
    {
        $lead=Leads::all();
        $data=compact('lead');
        return view('leads')->with($data);
    }
}

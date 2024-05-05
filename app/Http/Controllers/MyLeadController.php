<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadAssign;
use App\Models\User;
use App\Models\Leads;

class MyLeadController extends Controller
{
    //
    public function show($id)
    {
      

        $leadassign=LeadAssign::select('id','lead_id','status','user_id')->where('user_id',$id)->get();
        $data=compact('leadassign');

            // echo($leadid);
        return view('userModule.mylead')->with($data);
    }

    public function edit($id)
    {

      $lead=LeadAssign::find($id);
            if(is_null($lead))
            {
                return redirect()->back();
            }
            $url=url('/leadassign/update/')."/".$id;
            // $leadid=$lead->lead_id;
            // $userid=$lead->user_id;           
             $data=compact('lead','url');
            return view('userModule.myleadform')->with($data);
   
      }
      public function update($id,Request $request)
      {


        $leadassign=LeadAssign::select('id','lead_id','status','user_id')->where('id',$id)->first();

        $leadassign->id=$request['id'];
        $leadassign->lead_id=$request['lead_id'];
        $leadassign->status = $request->input('selectOption');
        $leadassign->user_id=$request['user_id'];
       
        $leadassign->save();
        return view('dashboard');
      }

      public function followup($id)
      {
        $lead=LeadAssign::select('id','lead_id','status','user_id')->where('status','followup',)->get();
        
        $data=compact('lead');
        return view('userModule.followup')->with($data);

      }
}

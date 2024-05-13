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

    //    $leadassign =LeadAssign::leftJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
    // ->select('lead_assign.*', 'table_leads.*')
    // ->union(
    //     LeadAssign::rightJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
    //         ->select('lead_assign.*', 'table_leads.*')
    // )
    // ->get();
     
    
        $data=compact('leadassign');

            // echo($leadid);
        return view('userModule.mylead')->with($data);
    }

    public function leadinfo($id)
    {
      // $leadinfo =LeadAssign::leftJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
      // ->select('lead_assign.*', 'table_leads.*')
      // ->union(
      //     LeadAssign::rightJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
      //         ->select('lead_assign.*', 'table_leads.*')
      // )->where('user_id',$id)
      // ->get();

      $leadinfo = Leads::leftJoin('lead_assign', function($join) use ($id) {
        $join->on('table_leads.id', '=', 'lead_assign.lead_id')
             ->where('lead_assign.user_id', '=', $id);
    })
    ->select('table_leads.*', 'lead_assign.*')
    ->union(
        LeadAssign::rightJoin('table_leads', function($join) use ($id) {
            $join->on('table_leads.id', '=', 'lead_assign.lead_id')
                 ->where('lead_assign.user_id', '=', $id);
        })
        ->select('table_leads.*', 'lead_assign.*')
    )
    ->get();
      $data=compact('leadinfo');

      return view('userModule.leadinfo')->with($data);
    }

    public function edit($id)
    {
      
      $lead=LeadAssign::find($id);
            if(is_null($lead))
            {
              // return 'went wrong';
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
        $lead=LeadAssign::select('id','lead_id','status','user_id')->where('status','followup',)->where('user_id',$id)->get();
        
        $data=compact('lead');
        return view('userModule.followup')->with($data);

      }
}

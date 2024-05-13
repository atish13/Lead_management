<?php

namespace App\Http\Controllers;
use App\Models\LeadAssign;

use Illuminate\Http\Request;

class LeadAssignController extends Controller
{
    //
    public function create()
    {
        return view('leadAssign.leadAssignForm');
    }


    public function show()
    {
        $leadassign=LeadAssign::all();
        $data=compact('leadassign');
        return view('leadAssign.leadAssign')->with($data);

    }
    public function allleadinfo()
    {
         $leadinfo =LeadAssign::leftJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
      ->select('lead_assign.*', 'table_leads.*')
      ->union(
          LeadAssign::rightJoin('table_leads', 'lead_assign.lead_id', '=', 'table_leads.id')
              ->select('lead_assign.*', 'table_leads.*')
      )
      ->get();
      $data=compact('leadinfo');
      return view('adminView.allleadinfo')->with($data);

    }
    public function store(Request $request)
        {
            $leadstore=new LeadAssign;
            $leadstore->lead_id=$request['lead_id'];
            $leadstore->status = $request->input('selectOption');
            $leadstore->user_id=$request['user_id'];

            $leadstore->save();

            return redirect()->route('leadassign.show');

        }
         public function delete($id)
        {
            $lead=LeadAssign::find($id);
            if($lead!=null)
            {
                $lead->delete();
            }
            return redirect()->back();

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
            // echo($lead);

            // print_r($leadassign);

            // $lead=LeadAssign::find($id);
            $leadassign->id=$request['id'];
            $leadassign->lead_id=$request['lead_id'];
            $leadassign->status = $request->input('selectOption');
            $leadassign->user_id=$request['user_id'];
           
            $leadassign->save();
    
            return redirect()->route('leadassign.show');
        }
}

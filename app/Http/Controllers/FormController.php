<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FormController extends Controller
{
    // form data's show
    public function index()
    {
        $form= Form::all();
        $data=compact("form");
            return view("form.Info")->with($data);
    }
    /// form create
    public function create()
    {
        $url=("/Form");
        $title="Form";
        // $form= Form::all();


        
        $data=compact("url","title");

        return view("form.create")->with($data);

    }

    public function store(Request $request)
    {
        // $rules=[
        //     'name'=>'required|min:5',
        //     'email'=>'required|min:3',
        //     'contact'=>'required|min:10'
        // ];
        // $validator=Validator::make($request->all(),$rules);

        // if($validator->fails())
        // {
        //     return redirect()->route('form.create')->withInput()->withErrors($validator);
        // }
        
            $form=new Form;
            $form->name=$request['name'];
            $form->email=$request['email'];
            $form->phone_no=$request['phone_no'];
            $form->title=$request['title'];
            $form->save();
            return redirect()->route('form.index')->with('success','submited successfully');


        
        
        // $request->validate
        // {
        //     [
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'phone_no'=>'required|min:10'
        //     ]

        // };

      
        // $lead_form=new Form;
        // $lead_form->name=$request['name'];
        // $lead_form->email=$request['email'];
        // $lead_form->phone_no=$request['phone_no'];
        // $lead_form->save();

    }

    public function delete($id)
    {
        $form=Form::find($id);
        if(!is_null($form))
        {
            $form->delete();
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $form=Form::find($id);
        if(is_null($form))
        {
            return redirect()->back();
        }
        $title="Form Edit";
        $url=url('Form/update/')."/".$id;
        $data=compact("title","url","form");
        return view("form.create")->with($data);
    }
    function update($id,Request $request)
    {
        $form= Form::find($id);
        $form->name=$request['name'];
        $form->email=$request['email'];
        $form->phone_no=$request['phone_no'];
        $form->save();
        return redirect('/Form');

    }
}

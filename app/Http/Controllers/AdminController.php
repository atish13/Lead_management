<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user= User::all();
        $data=compact("user");
       
            return view("adminView.user")->with($data);    
        }

    public function create()
    {
        return view("adminView.userView");
    }
    public function store(Request $req)
    {
        $user=new User;
        $user->name=$req['name'];
        $user->email=$req['email'];
        $user->password=$req['password'];
        $user->save();

        return redirect()->route('user.index');
        
        

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

       
    }
    public function delete($id)
    {
        $user=User::find($id);
        if(!is_null($user))
        {
            $user->delete();
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $user=User::find($id);
        if(is_null($user))
        {
            return redirect()->back();
        }
        // $title="Form Edit";
        // $url=url('/userAdd')."/".$id;
        // $data=compact("url","user");
        // return view("adminView.userView")->with($user); 
        return view("adminView.userView");
    }

    function update($id,Request $request)
    {
        $user= User::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();
        return redirect('/viewUser');

    }
}

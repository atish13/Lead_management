<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\controllers\LeadsController;
use App\Http\controllers\LeadAssignController;
use App\Http\controllers\MyLeadController;
use App\Models\{User,Role,permission,Leads,LeadAssign};






Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',function()
{
    // $admin=User::whereName('Admin')->first();

    // $admin_role=Role::whereName('admin')->first();
    // $admin->roles()->attach($admin_role);

    // $user=User::whereName('User')->with('roles')->first();

    // $user_role =Role::whereName('user')->first();
    // $user-> roles()->attach($user_role);

    // dd($user->toArray());
    // dd($admin->toArray());




    //permission

  $add_user_permission=permission::where('name','add_user');
   $view_user_permission=permission::where('name','view_user')->first();


    $admin_role=Role::whereName('Admin')->with('permissions')->first();
    $admin_role->permissions()->attach($view_user_permission);
    $admin_role->permissions()->attach($add_user_permission);
    dd($add_user_permission->toArray());

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    
    // Route::get("/Form/create",[FormController::class,"create"])->name('form.create');
    // Route::post("/Form",[FormController:: class,"store"])->name('form.store');
    // Route::get("/Form",[FormController::class,"index"])->name('form.index');
    // Route::get("/Form/delete/{id}",[FormController::class,"delete"])->name('form.delete');
    // Route::get("/Form/edit/{id}",[FormController::class,"edit"])->name('form.edit');
    // Route::post("/Form/update/{id}",[FormController::class,"update"])->name('form.update');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //leads
    Route::get('/leads',[LeadsController::class,'index'])->name('lead.form');
    Route::post('/leads',[LeadsController::class,'store']);
    Route::get('/leadsshow',[LeadsController::class,'view'])->name('view.leads');


    // Admin
    Route::get('/viewUser',[AdminController:: class,'index'])->name('user.index');
    Route::get('/userAdd',[AdminController:: class,'create'])->name('user.create');
    Route::post('/userAdd',[AdminController:: class,'store'])->name('user.add');
    Route::get("/user/delete/{id}",[AdminController::class,"delete"])->name('user.delete');
    Route::get("/userAdd/{id}",[AdminController::class,"edit"])->name('user.edit');
    Route::post("/userAdd/{id}",[AdminController::class,"update"])->name('user.update');
    



    // Route::get('/userAdd', [AdminController::class, 'create']);

    // Route::post('register', [RegisteredUserController::class, 'store']);

    //leadassign

    Route::get('/leadassignform',[LeadAssignController::class,'create'])->name('leadassign.form');
    Route::get('/leadassign',[LeadAssignController::class,'show'])->name('leadassign.show');
    Route::post('/leadassign',[LeadAssignController::class,'store'])->name('leadassign.store');
    Route::get('/leadassign/leadinfo',[LeadAssignController::class,'allleadinfo'])->name('leadassign.info');
    Route::get('/leadassign/delete/{id}',[LeadAssignController::class,'delete'])->name('leadassign.delete');
    Route::get('/leadassign/edit/{id}',[LeadAssignController::class,'edit'])->name('leadassign.edit');
    Route::post('/leadassign/update/{id}',[LeadAssignController::class,'update'])->name('leadassign.update');

    //myleads
     Route::get('/mylead/show/{id}',[MyLeadController::class,'show'])->name('mylead.show');
     Route::get('/mylead/edit/{id}',[MyLeadController::class,'edit'])->name('mylead.edit');
     Route::post('/mylead/update/{id}',[MyLeadController::class,'update'])->name('mylead.update');
     Route::get('/mylead/leadinfo/{id}',[MyLeadController::class,'leadinfo'])->name('mylead.info');
     Route::get('/mylead/followup/{id}',[MyLeadController::class,'followup'])->name('mylead.followup');
    //  Route::get('/mylead',function ()
    //  {
    //     return view('dashboard');
    //  });

    
   
});

require __DIR__.'/auth.php';

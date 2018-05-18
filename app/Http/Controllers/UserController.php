<?php

namespace App\Http\Controllers;

use App\Ufficio;
use Illuminate\Http\Request;

use App\User;
use Auth;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['auth', 'isAdmin'])->except('changePassword');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $offices = Ufficio::orderBy('denominazione')->get();
        return view('users.create')->with('roles', $roles)->with('offices', $offices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users'
        ]);


        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['name'];
        $user->office_id = $request['office_id'];

        $user->save();

        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r);
            }
        }        

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();
        $offices = Ufficio::orderBy('denominazione')->get();

        return view('users.edit', compact('user', 'roles', 'offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
        ]);

        $input = $request->only(['name', 'email', 'office_id']);
        $roles = $request['roles'];
        //$user->fill($input)->save();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->office_id = $request['office_id'];
        $user->save();
        
        if (isset($roles)) {        
            $user->roles()->sync($roles);            
        }        
        else {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')
            ->with('flash_message', 'Utente correttamente Aggiornato.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
    }

    public function changePassword(Request $request){
        if (!(\Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","La password corrente non corrisponde a quella inserita.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","La nuova password deve essere diversa da quella attuale.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = $request->get('new-password');
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

}

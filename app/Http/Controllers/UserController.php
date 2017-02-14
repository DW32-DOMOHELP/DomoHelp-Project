<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Laracasts\Flash\Flash;
use HttpOz\Roles\Models\Role;

class UserController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::orderBy('id_user', 'ASC') -> paginate(5);
        
        $users = DB::table('users')
            ->join('role_user', 'users.id_user', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select('users.*', 'roles.group')
            ->orderBy('id_user', 'asc')
            ->paginate(5);
        
        return view('00_admin.00_users.index') -> with('users', $users);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('00_admin.00_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request -> all());
        $user -> password = bcrypt($request -> password);
        $user -> save();
        if($request -> user_type === '1'){
            $user-> attachRole(1);
        }elseif($request -> user_type === '2'){
            $user-> attachRole(2);
        }else{
            $user-> attachRole(3);
        }
        Flash::success("Se ha registrado ". $user->name . " de forma correcta");
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        $user = User::find($id_user);
        
        $type = DB::table('role_user')
            ->select('role_id')
            ->where('user_id', $id_user)
            ->get();
        
        // $user = DB::table('users')
        //     ->join('role_user', 'users.id_user', '=', 'role_user.user_id')
        //     ->join('roles', 'roles.id', '=', 'role_user.role_id')
        //     ->select('users.*', 'roles.group')
        //     ->where('id_user', $id_user)
        //     ->get();
        return view('00_admin.00_users.edit')->with('role_user', $type)->with('user', $user);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $user = User::find($id_user);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->pcod = $request->pcod;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user -> save();
        $user->detachAllRoles();
        if($request -> user_type === '1'){
            $user-> attachRole(1);
        }elseif($request -> user_type === '2'){
            $user-> attachRole(2);
        }else{
            $user-> attachRole(3);
        }
        
        Flash::warning("El usuario ". $user->name . " se ha editado de forma correcta");
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        $user = User::find($id_user);
        $user->delete();
        Flash::error("Se ha eliminado a ". $user->name . " de forma correcta");
        return redirect()->route('users.index');
    }
}

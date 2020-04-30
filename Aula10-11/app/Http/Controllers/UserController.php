<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = User::orderBy('id' , 'DESC')->paginate(5);
        return view( 'users.index' , compact('data'))->with('i' , ($request->input ('page' , 1) - 1 ) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            $User = User::find($id);
            return view('user.show', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $User = User::find($id);
        $roles = Role::pluck('name' , 'name')->all();
        $userRole = $User->roles->pluck('name' , 'name')->all();
        return view('users.edit' , compact ('user' , 'roles' , 'userRole'));
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
        //

        $this->validate($request,[
                    'name' => 'required' ,
                    'email' => 'required|email|unique:users,email,'.$id ,
                    'password' => 'same:confirm=password',
                    'roles' => 'required' , ]);

                    $input = $request->all();

            if(!empty($input['password'])){

                $input['password'] = Hash::make($input['password']);
            }else{
                $input = Arr::except($input, array('password'));
            }


                $user = User::find($id);
                $user->update($input);
                DB::table('model_has_roles')->where('model_id' , $id)->delete();
                $user->assingRole($request->input('roles'));
                return redirect()->route('users.index')->with('sucess' , 'Usuario editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::find($id)->delete();
        return redirect()->Route::view('users.index')->with('sucess' , 'Usuario exluido com sucesso');
    }
}

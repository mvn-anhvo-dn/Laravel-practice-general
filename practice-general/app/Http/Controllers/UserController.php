<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.list-user');
    }

    /**
     * method API get Users + AJAX JQUERY Practice 3
     *
     * 
     */
   public function getUser(){
    // return response()->json(User::all(),200);
    $user = User::all();
        return response()->json([
            'users'=>$user,
        ]);
   }
   
    /**
     * method API Add Users + AJAX JQUERY Practice 3
     *
     * 
     */
   public function addUser(Request $request){
    $user = User::create($request->all());
    return response()->json([
                    'status'=>201,
                    'message'=>'Add User Successfully.'
                ]);
   }

    /**
     * method API only update Users Practice 3
     *
     * 
     */
   public function updateUser(Request $request, $id){
    $user = User::find($id);
    if(is_null($user)){
        return response()->json(['message' => 'User not found'], 404);
    }
    $user->update($request->all());
    return response()->json($user, 200);
   }


    /**
     * method API delete Users + AJAX JQUERY Practice 3
     *
     * 
     */
   public function deleteUser(Request $request, $id){
    $user = User::find($id);
    if($user)
    {
        $user->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Delete User Successfully.'
        ]);
    }
    else
    {
        return response()->json([
            'status'=>404,
            'message'=>'User Not Found'
        ]);
    }
   }

    /** AJAX JQUERY GET ID
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if($user)
        {
            return response()->json([
                'status'=>200,
                'user'=> $user,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'User not found'
            ]);
        }
        // dd($user);
    }

    /** AJAX JQUERY UPDATE
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $user = User::find($id);
            if($user)
            {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Update User Successfully.'
                ]);
            }

    }
}
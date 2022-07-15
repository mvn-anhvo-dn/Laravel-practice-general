<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Collection;
use App\Http\Controllers\UserController;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.search', compact('users'));
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
        $comments = Comment::where('user_id', $id)->with('users')->get();
        return view('users.show',compact('comments'));
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $userDetail = User::where('id',$id)->with('profile')->first();
        $users = User::where('id', $id)->with('comments','posts')->get();
        return view('users.detail',compact('users','userDetail'));
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
    }

    
    public function search()
    {
        // $search_text = $_GET['search2'];
        // $users = User::where('name','LIKE','%'.$search_text.'%')->get(); 
        
        $search_text = $_GET['search2'];
        // dd($search_text);
        if($search_text !== ''){
          
            $users = User::where('name','LIKE','%'.$search_text.'%')->get();
            // dd($users);
            return view('users.search', ['users' => $users]);
        };
       
        return view('users.search', compact('users'));
    }

    public function searchByComment(){
        if (isset($_GET['search3'])) {
            $data = User::with('comments')->get();
            $data1 = $_GET['search3'];
            $users=[];
            foreach ($data as $user_key => $user_value) {
                if (count($user_value->comments) ==  $data1) {
                    $users[$user_key] = $user_value;
                }
            }
            return view('users.search', compact('users'));
        }
    }

    public function searchByPosts(){
        if (isset($_GET['search4'])) {
            $data = User::with('posts')->get();
            $data1 = $_GET['search4'];
            $users=[];
            foreach ($data as $user_key => $user_value) {
                if (count($user_value->posts) ==  $data1) {
                    $users[$user_key] = $user_value;

                }
            }

            return view('users.search', compact('users'));
        }
    }
}

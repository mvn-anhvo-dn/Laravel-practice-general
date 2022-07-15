<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Collection;
use App\Http\Controllers\UserController;
use DB;


class UserController extends Controller
{
    protected $usersObj;

    public function __construct(){
        $this->usersObj = new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Sort logic
        $sortBy = $request->input('sort-by');
        $sortType = $request->input('sort-type');
        $allowSort = ['asc', 'desc'];

        if(!empty($sortType) && in_array($sortType, $allowSort)){
            if($sortType=='desc'){
                $sortType = 'asc';
            }else{
                $sortType = 'desc';
            }
        }else{
            $sortType = 'asc';
        }

        $sortArr = [
            'sortBy' => $sortBy,
            'sortType' => $sortType
        ];

        // $userList = $this->$usersObj->getAllUsers($sortArr);
        // dd($sortArr);
        $users = $this->usersObj->getAllUsers($sortArr);


        return view('users.list-user',compact('users','sortType'));

        // if(empty($request->search)){
        //     $users = User::paginate(5);
        //     return view('users.list-user', ['users' => $users]);
        // }else{
        //     $users = User::paginate(5)->where('name', 'like', '%'. $request->search .'%')->Paginate(5);
        //     return view('users.list-user', ['users' => $users]);
        // }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        if($user){
            return redirect()->route('users.list-user');
        }else{
            return redirect()->route('users.list-user');
        }
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


    
}

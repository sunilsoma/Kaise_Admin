<?php

namespace App\Http\Controllers;
use App\Modal\Home as Group;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Group $group)
    {
        $this->middleware('auth');
        $this->group = $group;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups =  $this->group->get_all_group();
        return view('home',['groups' => $groups]);
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group/create');
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($groupId)
    {
        $group =  $this->group->get_group_deatail($groupId);
        //print_r($group); die;
        return view('group/detail',['group' => $group]);
    }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('group/edit');
    }
}

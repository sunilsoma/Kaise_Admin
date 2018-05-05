<?php

namespace App\Http\Controllers;
use App\Modal\Home as Group;
use Illuminate\Http\Request;
use App\Http\Requests\AddGroup;
use DB;
use Auth;
use App\Groups;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Group $group)
    {
        //$this->middleware('auth');
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
        
        $group_category = $this->group->get_group_category();
        return view('group/create', ['group_category' =>$group_category]);
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
    public function edit($groupId)
    {
        $group_category = $this->group->get_group_category();
        $group =  $this->group->get_group_deatail($groupId);
        //print_r($group->id); die;
        return view('group/edit', ['group_category' =>$group_category,'group' =>$group,]);
    }

    public function store(AddGroup $request)
    {
        //$this->group->store_group($request);
      //echo   Auth::User()->id; die();
        $groups = new Groups;
        $groups->admin_user_id = Auth::User()->id;
        $groups->admin_group_link = $request->admin_group_link;
        $groups->admin_group_name = $request->admin_group_name;
        $groups->admin_group_description = $request->admin_group_description;
        $groups->admin_group_owner = $request->admin_group_owner;
        $groups->admin_group_categories_id = $request->admin_group_categories_id;
        $groups->admin_group_type = $request->admin_group_type;
        $groups->admin_group_tag_words = $request->admin_group_tag_words;
        $groups->admin_group_invite_url = $request->admin_group_invite_url;
        $groups->admin_group_rating = $request->admin_group_rating;
        $groups->admin_group_follower = $request->admin_group_follower;
        $groups->device_token = $request->device_token;
        $groups->admin_group_place_holder_1 = $request->admin_group_place_holder_1;
        $groups->admin_group_place_holder_2 = $request->admin_group_place_holder_2;
        if($request->hasFile('admin_group_image'))
        {
            $file = $request->file('admin_group_image');
            // Get the contents of the file
            $contents = $file->openFile()->fread($file->getSize());
            $groups->admin_group_image = $contents;
        }
        $groups->save();
        return redirect()->back()->with('status', trans('user.group_add_success'));
    }
    public function update(AddGroup $request, $groupId)
    {
       // echo $request->admin_group_categories_id; die;
        $groups = Groups::find($groupId);
        $groups->admin_user_id = Auth::User()->id;
        $groups->admin_group_link = $request->admin_group_link;
        $groups->admin_group_name = $request->admin_group_name;
        $groups->admin_group_description = $request->admin_group_description;
        $groups->admin_group_owner = $request->admin_group_owner;
        $groups->admin_group_categories_id = $request->admin_group_categories_id;
        $groups->admin_group_type = $request->admin_group_type;
        $groups->admin_group_tag_words = $request->admin_group_tag_words;
        $groups->admin_group_invite_url = $request->admin_group_invite_url;
        $groups->admin_group_rating = $request->admin_group_rating;
        $groups->admin_group_follower = $request->admin_group_follower;
        $groups->device_token = $request->device_token;
        $groups->admin_group_place_holder_1 = $request->admin_group_place_holder_1;
        $groups->admin_group_place_holder_2 = $request->admin_group_place_holder_2;
        if($request->hasFile('admin_group_image'))
        {
            $file = $request->file('admin_group_image');
            // Get the contents of the file
            $contents = $file->openFile()->fread($file->getSize());
            $groups->admin_group_image = $contents;
        }
        $groups->save();
        return redirect()->back()->with('status', trans('user.group_update_success'));
    }

    public function all_groups()
    {
        $all_groups =  $this->group->all_groups();
        foreach ($all_groups as $key => $value) {
            $value->admin_group_image = base64_encode($value->admin_group_image);
        }

return response() -> json($all_groups, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        
    }
}

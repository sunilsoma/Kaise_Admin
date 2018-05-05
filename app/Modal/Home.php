<?php

namespace App\Modal;
use DB;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
use Auth;
class Home extends Model
{
    protected $table = 'admin_groups';

	protected $connection;

    //it's for data base connection
    function __construct()
    {
        $this->connection = DB::connection();
    }

	public function get_all_group()
	{
		//return $this->paginate(1,['user_firstname','user_email','status','user_type']);
		return $query = $this->connection->table('admin_groups as u')->select(['u.*','ccu.admin_category_name'])->leftjoin( 'admin_groups_categories as ccu', 'ccu.id', '=', 'u.admin_group_categories_id' )->get();

	}
	public function get_group_deatail($groupId)
	{
		return $query = $this->connection->table('admin_groups as u')->select(['u.*','ccu.admin_category_name'])->leftjoin	( 'admin_groups_categories as ccu', 'ccu.id', '=', 'u.admin_group_categories_id')->where('u.id',$groupId)->first();


	}
	public function get_group_category()
	{
		return $query = $this->connection->table('admin_groups_categories as u')->select(['u.*'])->get();
	}
	public function store_group($request)
	{
		$groups = new Home;
        $groups->admin_user_id = Auth::User()->id;
        $groups->admin_group_link = $request->admin_group_link;
        return $groups->save();
	//echo 		$request->admin_group_link; die;
	}

	public function all_groups()
	{
		return $query = $this->connection->table('admin_groups as u')->select(['u.*','ccu.admin_category_name',DB::raw('MAX(u.admin_group_rating)')])->leftjoin( 'admin_groups_categories as ccu', 'ccu.id', '=', 'u.admin_group_categories_id' )->groupBy('ccu.id')->paginate(5);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		//Role::create(['name' => 'writer']);
		//Role::create(['name' => 'editor']);
		//Role::create(['name' => 'publisher']);
		//Role::create(['name' => 'admin']);
		
		//Permission::create(['name' => 'write post']);
		//Permission::create(['name' => 'edit post']);
		//Permission::create(['name' => 'publish post']);
		
		/*$role = Role::find(4);
		$permission = Permission::find(3);
		$role->givePermissionTo($permission);*/
		
		//$permission->removeRole($role);
		//$role->revokePermissionTo($permission);
		
		//$permission->assignRole($role);
		
		/*$user = \App\User::find(4);
		$user->assignRole('admin');*/
		
		
		//auth()->user()->givePermissionTo('write post');
		
		
		/*$permissions = auth()->user()->getRoleNames();
		dd($permissions);
		*/	
		
		/*$user = \App\User::find(1);
		$user->givePermissionTo('edit post');*/
		
		/*$role = Role::find(1);
		$permission = Permission::find(2);
		$role->givePermissionTo($permission);*/
		
		//return auth()->user()->getPermissionsViaRoles();

        return view('home');
    }
}

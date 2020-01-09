<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;
use App\Models\Room;
use App\Models\Position;
use Hash;
use Session;
use Auth;


class HomeController extends Controller
{
    public function Home(){
    	return view('admin/home');
    }


    public function ManageUsers(){

    	$data = Users::join('position', 'position.id', '=', 'users.id_position')
    	->join('room', 'room.id', '=', 'users.id_room')
	    ->get();
    	return view('account/manage-users',compact('data'));
    }


    public function CreateUsers(){

    	$rooms = Room::all();
    	$position = Position::all();
    	return view('account/create',compact('rooms','position'));
    }





}

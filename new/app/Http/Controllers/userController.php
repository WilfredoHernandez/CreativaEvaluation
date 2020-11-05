<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class userController extends Controller {

public function index(){
    $clients = Clients::all()->toArray;
return view('index', compact('clients'));
}

}

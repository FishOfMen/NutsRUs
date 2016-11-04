<?php
/**
 * Created by PhpStorm.
 * User: Zack
 * Date: 10/23/2016
 * Time: 7:16 PM
 */

namespace App\Http\Controllers;
use DB;
use Auth;

class AboutLoginController extends Controller {


    public function index()
    {
        return view('AboutLogin.index');
    }
}
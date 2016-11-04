<?php
/**
 * Created by PhpStorm.
 * User: Zack
 * Date: 10/23/2016
 * Time: 7:18 PM
 */

namespace App\Http\Controllers;
use DB;
class OrderController extends Controller {


    public function index()
    {
        //$orders = DB::select('select * from users');
        //return dd($orders);
        return view('Order.index');
    }
}
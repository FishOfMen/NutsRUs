<?php
/**
 * Created by PhpStorm.
 * User: Zack
 * Date: 10/23/2016
 * Time: 7:18 PM
 */

namespace App\Http\Controllers;

class CheckoutController extends Controller {


    public function index()
    {
        return view('Checkout.index');
    }
}
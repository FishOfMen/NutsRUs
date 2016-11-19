<?php
/**
 * Created by PhpStorm.
 * User: Zack
 * Date: 10/23/2016
 * Time: 7:16 PM
 */

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AboutLoginController extends Controller {


    public function index()
    {
        return view('AboutLogin.index');
    }

    public function store(Request $request)
    {
        $creds = $request->all();
        //unset($creds['_token']);

        if (Auth::attempt($creds))
        {
            dd('Success!');
            //return Redirect::intended('AboutLogin');
        }
        else
        {
            return Redirect::intended('AboutLogin');
        }
    }

    //public function getLogin()
    //{

    //}

    /*public function login()
    {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::to('AboutLogin')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else
        {
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            if (Auth::attempt($userdata))
            {
                echo  'Success!';
            }
            else
            {
                return Redirect::to('AboutLogin');
            }
        }


    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('index');
    } */
}
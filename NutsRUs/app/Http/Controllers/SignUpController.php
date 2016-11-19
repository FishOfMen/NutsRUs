<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
Use App\Address;

class SignUpController extends Controller {


    public function index()
    {
        return view('SignUp.index');
    }

    public function create()
    {
        return view('SignUp.create');
    }

    public function store(Request $request)
    {

        //user info

        $input = $request->all();

        $user = new User($input);

        $user->save();

        $address = new Address($input);

        $address->save();

        return redirect('/ThankYou');


        //dd($request->all());
        //$input = array($first_name, $last_name, $email, $phone, $password, $updated_at, $created_at);
        //dd($input);
    }
}
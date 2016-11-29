<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
Use App\Address;

use Auth;

class SignUpController extends Controller {


    public function index()
    {
        return view('SignUp.index');
    }

    public function create()
    {
        return view('SignUp.create');
    }

    public  function address()
    {
        return view('SignUp.address');

    }

    protected $redirectTo = '/AboutLogin';

    protected function shipping(Request $request)
    {
        $data = $request->all();

        $id = Auth::id();

        $address = [
            'U_id' => $id,
            'house_number' => $data['house_number'],
            'street' => $data['street'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip']];

        Address::create($address);

        return redirect('/AboutLogin');
    }
}
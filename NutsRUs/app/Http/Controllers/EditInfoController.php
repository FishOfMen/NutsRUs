<?php
namespace App\Http\Controllers;

use App\User;
use  App\Address;
use Auth;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Session;

class EditInfoController extends Controller {


    public function index()
    {
        if(Auth::guest()) {

            return redirect('/SignUp/create');
        }
        else
        {

            $id = Auth::id();
            $users = User::all();
            $addresses = Address::all();

            foreach ($users as $user) {
                if ($id == $user->id)
                {
                    $userName = $user->name;
                    $userEmail = $user->email;
                }
            }

            foreach ($addresses as $address) {
                if ($id == $address->U_id)
                {
                    $userHouse = $address->house_number;
                    $userStreet = $address->street;
                    $userCity = $address->city;
                    $userState = $address->state;
                    $userZip = $address->zip;
                }
            }
            //return dd($userInfo);
            return view('EditInfo.index')
                ->with('name', $userName)
                ->with('email', $userEmail)
                ->with('house', $userHouse)
                ->with('street', $userStreet)
                ->with('city', $userCity)
                ->with('state', $userState)
                ->with('zip', $userZip);

            //return view('EditInfo.index')->with($user);
        }
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $id = Auth::id();

        Address::where('U_id', $id)
            ->update(['house_number' => $data['house_number'],
            'street' => $data['street'],
            'city'  => $data['city'],
            'state'  => $data['state'],
            'zip'  => $data['zip']]);

        User::where('id', $id)
            ->update(['name' => $data['name'],
            'email' => $data['email']]);

        Session::flash('success', 'Information updated successfully');

        return redirect('/AboutLogin');

        //return dd($address);
    }
}
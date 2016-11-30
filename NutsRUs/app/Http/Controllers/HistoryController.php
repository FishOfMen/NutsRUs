<?php
namespace App\Http\Controllers;

use App\Order;
use App\Address;
use App\Date;
use App\Batch;
use App\Item;
use Auth;

class HistoryController extends Controller {


    public function index()
    {
        //get current users Id
        $id = Auth::id();

        //get all table info
        $addresses = Address::all();
        $dates = Date::all();
        $orders = Order::where('U_id', $id);
        ->get()->toArray();
        $batches = Batch::all();
        $items = Item::all();

        $orderIDs = array();
        $itemIDs = array();


        //get all orders the current user has made
        foreach ($orders as $o)
        {
            foreach ($batches as $b)
            {
                if ($o->O_id == $b->O_id)
                {
                    array_push($itemIDs, $b->I_id);

                }
            }
        }

        return dd($itemIDs);

        //return view('History.index');
    }
}
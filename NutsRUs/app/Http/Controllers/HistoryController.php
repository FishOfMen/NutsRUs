<?php
namespace App\Http\Controllers;

use App\Order;
use App\Address;
use App\Date;
use App\Batch;
use App\Item;
use Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller {


    public function index()
    {
        //get current users Id
        $id = Auth::id();

        //get all table info
        $addresses = Address::all();
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



        $orders = Order::where('U_id', $id)
        ->get()->toArray();

        $orderIDs = array();
        $batches = array();


        /*$batchIDs = Batch::where('O_id', $o)
                ->join('items', 'items.I_id', '=', 'batch.I_id')
                ->select('items.name')
                ->get()->toArray();

            array_push($batchIDs, $o['updated_at'], $o['shipping_status']);
            array_push($history, $batchIDs);*/

        //Could not get this section to work. Does not effect the view
        /*foreach ($orders as $o)
        {
            array_push($orderIDs, $o['O_id']);
            $itemsArray = array();
            $allItems = array();


            foreach ($orderIDs as $order)
            {

                $batchIDs = Batch::where('O_id', $order)
                    ->get()->toArray();

                foreach ($batchIDs as $b)
                {
                    array_push($batches, $b['I_id']);

                    foreach ($batches as $x)
                    {
                        $itemID = Item::where('I_id', $x)
                            ->get()->toArray();
                    }

                    foreach ($itemID as $items)
                    {
                        array_push($allItems, $items['name']);
                    }
                }
                unset($batches);
                $batches = array();
                array_push($itemsArray, $allItems);
                unset($allItems);
                $allItems = array();
            }
        }*/
        //return dd($address);
        //return dd("orders for this user", $orders, "The individual order id's", $orderIDs, $batchIDs, $batches, "Order id followed by the item names",  $itemsArray);

        return view('History.index')
            ->with('orders', $orders)
            ->with('house', $userHouse)
            ->with('street', $userStreet)
            ->with('city', $userCity)
            ->with('state', $userState)
            ->with('zip', $userZip);
    }
}
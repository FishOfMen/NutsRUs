<?php
/**
 * Created by PhpStorm.
 * User: Zack
 * Date: 10/23/2016
 * Time: 7:18 PM
 */

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use DateTime;
use auth;
use App\Address;
use App\User;
use App\Item;
use App\Order;
use App\Batch;
class OrderController extends Controller {


    public function index()
    {
        $orders = DB::select('select * from items');
        //return dd($orders);
        return view('Order.index', $orders);
    }
    public function order()
    {
        if(Auth::guest()) {
            return redirect('/SignUp/create');
        }
        else{
            return view('Order.index');
        }
    }
    protected function postOrder(Request $request)
    {
        //get basics
        $data = $request->all();
        $now = new DateTime();
        $name = Auth::user()->name;
        $U_id = Auth::id();
        $addresses = address::all();

        //get user address id
        foreach ($addresses as $address) {
            if ($U_id == $address->U_id)
            {
                $A_id = $address->A_id;
            }
        }

        //get order counts
        //fix nulls

        //get real vals
        try{$PeaC = $data['PeaC'];
            try{$test = $PeaC / 1;}
            catch(Exception $e){$PeaC = 0;}
            if ($PeaC == ''){
                $PeaC = 0;
            }
        }
        catch(Exception $e){$PeaC = 0;}

        try{$AlmC = $data['AlmC'];
            try{$test = $AlmC / 1;}
            catch(Exception $e){$AlmC = 0;}
            if ($AlmC == ''){
                $AlmC = 0;
            }
        }
        catch(Exception $e){$AlmC = 0;}

        try{$CasC = $data['CasC'];
            try{$test = $CasC / 1;}
            catch(Exception $e){$CasC = 0;}
            if ($CasC  == ''){
                $CasC  = 0;
            }
        }
        catch(Exception $e){$CasC = 0;}

        try{$MacC = $data['MacC'];
            try{$test = $MacC / 1;}
            catch(Exception $e){$MacC = 0;}
            if ($MacC  == ''){
                $MacC  = 0;
            }
        }
        catch(Exception $e){$MacC = 0;}

        try{$WalC = $data['WalC'];
            try{$test = $WalC / 1;}
            catch(Exception $e){$WalC = 0;}
            if ($WalC  == ''){
                $WalC  = 0;
            }
        }
        catch(Exception $e){$WalC = 0;}

        try{$DriRasC = $data['DriRasC'];
            try{$test = $DriRasC / 1;}
            catch(Exception $e){$DriRasC = 0;}
            if ($DriRasC  == ''){
                $DriRasC  = 0;
            }
        }
        catch(Exception $e){$DriRasC = 0;}

        try{$MnMC = $data['MnMC'];
            try{$test = $MnMC / 1;}
            catch(Exception $e){$MnMC = 0;}
            if ($MnMC == ''){
                $MnMC = 0;
            }
        }
        catch(Exception $e){$MnMC = 0;}


        //get item costs
        $items = Item::all();
        foreach ($items as $item) {
            if (1 == $item->I_id){
                $AlmCost = $item->price;
            }
            if (2 == $item->I_id){
                $CasCost = $item->price;
            }
            if (3 == $item->I_id){
                $PeaCost = $item->price;
            }
            if (4 == $item->I_id){
                $MacCost = $item->price;
            }
            if (5 == $item->I_id){
                $WalCost = $item->price;
            }
            if (6 == $item->I_id){
                $DriRasCost = $item->price;
            }
            if (7 == $item->I_id){
                $MnMCost = $item->price;
            }
        }

        //calc total
        $total = $PeaC * $PeaCost + $CasC * $CasCost + $AlmC * $AlmCost + $MacC * $MacCost + $WalC * $WalCost + $DriRasC * $DriRasCost + $MnMC * $MnMCost;

        //make order array

        $order = [
            'U_id' => $U_id,
            'A_id' => $A_id,
            //'D_id' => $now,
            //'D_id' => 0,
            'shipping_status' => 'Not Shipped',
            'total' => $total
        ];

        //create order
        Order::create($order);

        //make and create batch arrays
        //we neeed the new order id:
        //get orders
        $orders = Order::all();
        //get the new order id
        foreach ($orders as $o) {
            if ($U_id == $o->U_id)
            {
                $orderID = $o->O_id;
            }
        }

        //Almonds
        if($AlmC != null && $AlmC >= 1){
            $batch1 = [
                'O_id' => $orderID,
                'I_id' => 1,
                'amount' => $AlmC		];
            Batch::create($batch1);
        }


        //cashews
        if($CasC != null && $CasC >= 1){
            $batch2 = [
                'O_id' => $orderID,
                'I_id' => 2,
                'amount' => $CasC		];
            Batch::create($batch2);
        }


        //peanuts
        if($PeaC != null && $PeaC >= 1){
            $batch3 = [
                'O_id' => $orderID,
                'I_id' => 3,
                'amount' => $PeaC		];
            Batch::create($batch3);
        }


        //Macadmias
        if($MacC != null && $MacC >= 1){
            $batch4 = [
                'O_id' => $orderID,
                'I_id' => 4,
                'amount' => $MacC		];
            Batch::create($batch4);
        }

        //Walnuts
        if($WalC != null && $WalC >= 1){
            $batch5 = [
                'O_id' => $orderID,
                'I_id' => 5,
                'amount' => $WalC		];
            Batch::create($batch5);
        }


        //Dried Raspberries
        if($DriRasC != null && $DriRasC >= 1){
            $batch6 = [
                'O_id' => $orderID,
                'I_id' => 6,
                'amount' => $DriRasC		];
            Batch::create($batch6);
        }


        //MnMs
        if($MnMC != null && $MnMC >= 1){
            $batch7 = [
                'O_id' => $orderID,
                'I_id' => 7,
                'amount' => $MnMC		];
            Batch::create($batch7);
        }


        return redirect('/Checkout');
    }


}
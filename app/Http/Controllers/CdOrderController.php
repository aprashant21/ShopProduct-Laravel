<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cd;
use App\Models\Order;

class cdOrderController extends Controller
{
    public function checkout( Request $request)
    {
    	if( isset( $request->pid) )
    	{
    		$cd =  Cd::where('id', $request->pid)->first();
    		$order = new Order;
    		$order->product_id = $cd->id;
    		$order->invoice_no = $cd->id . time();
    		$order->total = $cd->price;
    		$order->save();


            $fonepay =[];
            $fonepay['RU'] = route('fonepay.return');
            $fonepay['PID'] = 'NBQM';
            $fonepay['PRN'] = $order->invoice_no;
            $fonepay['AMT'] = $order->total;
            $fonepay['CRN'] = 'NPR';
            $fonepay['DT'] = date('m/d/Y');
            $fonepay['R1'] = 'test';
            $fonepay['R2'] = 'letslearntogether';
            $fonepay['MD'] = 'P';

            $data = $fonepay['PID'] .','.
                $fonepay['MD'] .','.
                $fonepay['PRN'] .','.
                $fonepay['AMT'] .','.
                $fonepay['CRN'] .','.
                $fonepay['DT'] .','.
                $fonepay['R1'] .','.
                $fonepay['R2'] .',' .         
                $fonepay['RU'];

            $fonepay['DV'] = hash_hmac('sha512', $data, 'a7e3512f5032480a83137793cb2021dc');

    		return view('cdcheckout', compact('cd', 'order', 'fonepay'));
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class ShopController extends Controller
{

    public function Invoice(Request $request)
    {
        // insert

        $row=[

            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'Username'=>$request->Username,
            'email'=>$request->email,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'country'=>$request->country,
            'state'=>$request->state,
            'zip'=>$request->zip,
            'ccName'=>$request->ccName,
            'ccNumber'=>$request->ccNumber,
            'ccExpiration'=>$request->ccExpiration,
            'ccCvv'=>$request->ccCvv,
            'ProductName'=>$request->ProductName,
            'Total'=>$request->Total,

        ];

        DB::table('invoice')->insert($row);

        $laptop=DB::table('invoice')
        ->where('email','=',$request->email)
        ->first();

        return view('invoice',['inv'=>$laptop]);
    }

    public function CheckOut($id)
    {
        $laptops=DB::table('product')
        ->where('id','=',$id)
        ->first();

        return view('checkout',['laptops'=>$laptops]);
    }

    public function LaptopType()
    {

        $laptops=DB::table('product')->get();

        return view('welcome',['laptops'=>$laptops]);
    }
}

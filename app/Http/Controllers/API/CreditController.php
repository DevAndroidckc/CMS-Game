<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Credit;
class CreditController extends Controller
{
     public function layDanhSach()
    {
    	$dsCredit = Credit::all();
    	$result=[
    		'success' => true,
    		'data' 	  =>$dsCredit
    	];

    	return response()->json($result);
    }
}

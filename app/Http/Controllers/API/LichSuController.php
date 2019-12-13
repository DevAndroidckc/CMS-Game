<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LichSuController extends Controller
{
	public function layDanhSach(Request $request)
	{
    	$page=$request->query('page',1);
    	$limit=$request->query('limit',25);
    	$listLuotChoi=LuotChoi::orderBy('created_at','desc')->skip(($page-1)*$limit)->take($limit)->get();

    	return response()->json([
    		'total'=>LuotChoi::count();
    		'data'=>$listLuotChoi;
    		]);
    }
     public function layLuotChoi(Request $request, $id)
    {
         $luot_choi=LuotChoi::find($id);
         if($luot_choi==null)
         {
            return response()->json(['success'=>false]);
         }
         $result=[
            'success'=>true,
            'luot_choi'=>$luot_choi
         ];
         return response()->json($result);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
class DangNhapController extends Controller
{
    public function dangNhap(Request $request)
    {
    	$ten_dang_nhap=$request->ten_dang_nhap;
    	$mat_khau=$request->mat_khau;
    	if($ten_dang_nhap =='thanh' && $mat_khau == '123')
    	{
    		return response()->json([
    			'success'=>true,
    			'message'=>'Đăng nhập thành công',
    			'token'=>'Đây là token'
    		]);

    	}
    	else
    	{
    		return response()->json([
    			'success'=>false,
    			'message'=>'Đăng nhập thất bại'
    		]);
    	}
    	//$DangNhap=NguoiChoi::WhereColumn([['ten_dang_nhap',$tendangnhap],['mat_khau',$matkhau]]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //Buổi 1
    public function Index()
    {
        //Nạp dữ liệu để đổ lên view
        $arr = [1, 2, 3, 4, 55];
        return view('admin.sanpham.sanpham', ['a' => $arr]);
    }
}

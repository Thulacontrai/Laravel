<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Các phương thức trong route
// Route::get($uri, $callback);
// Route::post($uri, $callback);Thêm
// Route::put($uri, $callback);Thay thế toàn bộ nội dung của tài nguyên
// Route::patch($uri, $callback);Chỉ cập nhật một phần nội dung của thông tin
// Route::delete($uri, $callback);Xóa nội dung
// Route::options($uri, $callback);
Route::get('SanPham', [SanPhamController::class, 'Index']);
//Route có tham số (parameter)
//Tham số bắt buộc  (required parameter)
Route::get('SanPham/{id}/{name}', function ($id, $name = null) {
    echo $id . $name;
})->name('sp');
// tham số không bắt buộc thì thêm ? vào đằng sau 
Route::get('demo/{id}/{name?}', function ($id, $name = null) {
    echo $id . $name;
})->name('sp');

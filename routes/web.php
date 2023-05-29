<?php
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

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

Route::get("example",function(){
    return "Example route get";
});

Route::get("coba",function(){
    return view("coba",["nama"=>"VRHD"]);
});

Route::get("/example/{exampleID}", function($exampleID){
    return "example number : $exampleID";
    //example number : 1
});

Route::get("/posts/{postID}/comments/{commentID}",function($postID,$commentID){
    return "ini post ke : $postID dan comments ke: $commentID";
});
//opsional (boleh kosong)
Route::get("posts/{postID?}",function($postID = null){
    return "post opsional: $postID";
});

Route::get("/coba/example",[CobaController::class, "example"]);

Route::get("/coba/request",[CobaController::class,"request"]);
Route::post("/coba/nested-request",[CobaController::class,"nestedRequest"]);

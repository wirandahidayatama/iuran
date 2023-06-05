<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterTagihanController;
use App\Http\Controllers\SesiController;
use App\Http\Livewire\MasterTagihan;
use App\Http\Livewire\MasterUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//awal untuk login

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/admin/admin',[AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/user',[AdminController::class, 'user'])->middleware('userAkses:user');;
    Route::get('/logout',[SesiController::class, 'logout']);
});

//akhir untuk login

Route::get('/admin/m_tagihan', function () {
    return view ('admin/v_m_tagihan',[
        "judul" => "Master Tagihan",]);
        })->name('m_tagihan.home');

Route::get('/tagihan/{id}',[MasterTagihanController::class, 'show'])->name('tagihan.details');
Route::get('/tagihan/{id}/edit',[MasterTagihanController::class, 'edit'])->name('tagihan.edit');

//route untuk menu admin

// Route::get('/admin/m_users',[AdminController::class, 'm_users']);

//dengan livewire
// Route::get('/admin/m_tagihan/', MasterTagihan::class);
// Route::get('/admin/m_users', MasterUsers::class);




//akhir route untuk menu admin

//route untuk menu user

//akhir route untuk menu user




// Route::get('/', function () {
//     return view ('login');
// });


//untuk admin

// Route::get('/admin', function () {
//     $blog_posts = [
//         [
//             "title" => "Judul Post Pertama",
//             "author"=> "Wiranda",
//             "body" => "tentang makanan"
//         ],
//         [
//             "title" => "Judul Post Kedua",
//             "author"=> "Budi",
//             "body" => "tentang fashion"
//         ],
//         ];
//     return view ('admin/dashboard',[
//         "title" => "Dashboard",
//         "posts" =>$blog_posts
//     ]);
// });

// Route::get('/admin/m_users', function () {
//     return view ('admin/m_users',[
//         "title" => "Users",
//         "name" =>"wiranda hidayatama",
//         "email" =>"randa@gmail.com",
//         "image" => "randa.jpg"
//     ]);
// });







// //untuk user
// Route::get('/user', function () {
//     return view ('user/dashboard',[
//         "title" => "Dashboard | User"
//     ]);
// });




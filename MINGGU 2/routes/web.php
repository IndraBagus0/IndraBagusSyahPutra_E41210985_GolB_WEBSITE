<?php

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

//route default
Route::get('/', function () {
    return view('welcome');
});

// menentukan rute di routes/web.phpfile Anda. Rute yang ditentukan di routes/web.phpdapat diakses dengan memasukkan URL rute yang ditentukan
Route::get('/user', [UserController::class, 'index']);

// //Metode router
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

//Redirect route 
// Jika Anda menentukan rute yang dialihkan ke URI lain, Anda dapat menggunakan Route::redirectmetode ini
Route::redirect('/here', '/there');

// Route view 
// ini digunakan, jika hanya ingin mengembalikan "view" saja. metode ini menyediakan pintasan sederhana sehingga Anda tidak perlu menentukan rute atau pengontrol lengkap.
Route::view('/welcome', 'welcome');


//Route Parameter
//perlu mendapatkan sebuah variabel yang terdapat di dalam sebuah "URI".
Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});


//Named Routing
//Anda juga dapat menentukan named route untuk controller. Named route harus unik
Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');


//Middleware
//Untuk menetapkan middleware ke semua rute dalam grup, Anda dapat menggunakan middlewaremetode ini sebelum menentukan grup. Middleware dijalankan sesuai urutan yang tercantum dalam larik:
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

//Controllers
//Jika sekelompok rute semuanya menggunakan pengontrol yang sama, Anda dapat menggunakan metode pengontrol untuk menentukan pengontrol umum untuk semua rute dalam grup. Kemudian, saat menentukan rute, Anda hanya perlu menyediakan metode pengontrol yang dipanggil:
use App\Http\Controllers\OrderController;

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});

//Subdomain Routing
//Grup rute juga dapat digunakan untuk menangani perutean subdomain. Subdomain dapat diberi parameter rute seperti halnya URI rute, memungkinkan Anda menangkap sebagian subdomain untuk digunakan dalam rute atau pengontrol Anda. Subdomain dapat ditentukan dengan memanggil metode domain sebelum menentukan grup:
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function (string $account, string $id) {
        // ...
    });
});

//Route prefixes
//Metode awalan dapat digunakan untuk mengawali setiap rute dalam grup dengan URI yang diberikan. Misalnya, Anda mungkin ingin mengawali semua URI rute dalam grup dengan admin:
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

//Route Name Prefixes
//Metode ini namedapat digunakan untuk mengawali setiap nama rute dalam grup dengan string yang diberikan. Misalnya, Anda mungkin ingin mengawali semua nama rute yang dikelompokkan dengan admin. String yang diberikan diawali dengan nama rute persis seperti yang ditentukan, jadi kami pasti akan memberikan karakter tambahan .di awalan:

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});

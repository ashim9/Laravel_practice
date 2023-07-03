<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermissionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function(){
//     return '<h1>Welcome to post page!</h1>';
// });

// Route::get('/post', function(){
//     return view('post');
// });

// Route::view('/post','post');

// Route::get('/hello', function(){
//     return view('post');
// });

// Route::get('/post/firstpost', function(){
//     return view('post');
// });

//single parameter pass
// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){
//         return "<h1>Post ID: ". $id ."</h1>";
//     }
//     else{
//         return "<h1>No ID Found</h1>";
//     }
// });
//multiple parameters pass
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
//     if($id){
//         return "<h1>Post ID: ". $id ."</h1> <h2>" . $comment . "</h2>";
//     }
//     else{
//         return "<h1>No ID Found</h1>";
//     }
// });


// Route::get('/post/{id}', function (string $id) {

// Route::get('/post/{id}/comment/{commentid}', function (string $id, string $comment) {
//     if($id){
        // return "<h1>Post ID: ". $id ."</h1>";

    //     return "<h1>Post ID: ". $id ."& Comment : ". $comment ."</h1>";
    // }
    // else{
    //     return "<h1>No ID Found</h1>";
    // }
// })->whereNumber('id');
// })->whereIn('id',['movie','song','painting']);

// })->where('id','[0-9]+')->whereAlpha('commentid');


// Route::get('/', 'TestController@index')->name('home');

// Route::get('/post/{id?}',function( string $id = null) {
//     if($id){
//         return "<h1>Post id: ".$id."</h1>";
//     }
//     else{
//         return "<h1>No Id Found</h1>";
//     }
// });

// Route::get('post/{id?}/comment/{commentid?}',function( string $id = null, string $comment = null) {
//     if($id){
//         return "<h1>Post id" .$id." & comment id: ".$comment."<h1>";
//     }
//     else{
//         return "<h1>No Id Found</h1>";
//     }
// });

// Route::get('/post', function(){
//     return view('post');
// })->name('mypost');

// Route::get('/test', function(){
//     return view('about');
// }); 

// Route::redirect('/about','/test',301);

// Route::prefix('page')->group(function() {

//     Route::get('/about', function(){
//         return "<h1>About Page</h1>";
//     });
    
//     Route::get('/gallery', function(){
//         return "<h1>Gallery</h1>";
//     });
    
//     Route::get('/post/first', function(){
//         return "<h1>First Post</h1>";
//     });

// });

Route::get('/test', function(){
    return view('test');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/','showHome')->name('home');
    Route::get('/blog','showBlog')->name('blog');
    Route::get('/user/{id}','showUser')->name('user');
});


Route::get('/test',TestingController::class);

// Route::get('/',[PageController::class, 'showHome'])->name('home');
// Route::get('/blog',[PageController::class, 'showBlog'])->name('blog');
// Route::get('/user/{id}',[PageController::class, 'showUser'])->name('user');


// Route::fallback(function(){
//     return "<h1>Page Not Found....! </h1>";
// });

Route::get('/posts/{id}', function(string $id){
    if($id){
        return "<h1?>Id no:" .$id. "</h1>";
    }
    else{
        return "No data found";
    }
})->whereNumber('id');




Route::get('/users', function(){
    // return view('users', ['users'=> "AKBAR","city"=>" "]);
    // $name = "AKBAR";
    $names = [
        1 => ['name' => "AKBAR","city" => "Dhaks","phone"=>"01010102"],
        2 => ['name' => "AKBAR","city" => "Dhaks","phone"=>"01010102"],
        3 => ['name' => "AKBAR","city" => "Dhaks","phone"=>"01010102"],
        4 => ['name' => "AKBAR","city" => "Dhaks","phone"=>"01010102"]
    ];
    return view('users',[
        'user'=> $names,
        // 'city'=> 'Dhaka'
    ]);
});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/post', function(){
    return view('post');
});

Route::get('/about', function(){
    return view('about');
});








// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});


//plan routes
Route::get('plans', 'PlanController@index')->name('plans');
Route::get('plan/create', 'PlanController@create')->name('plan.create');
Route::post('plan/store', 'PlanController@store')->name('plan.store');
Route::get('plan/edit/{id}', 'PlanController@edit')->name('plan.edit');
Route::post('plan/update/{id}', 'PlanController@update')->name('plan.update');
Route::post('plan/delete/{id}', 'PlanController@delete')->name('plan.delete');

//student routes
Route::get('students', 'StudentController@index')->name('students');
Route::get('student/create', 'StudentController@create')->name('student.create');
Route::post('student/store', 'StudentController@store')->name('student.store');
Route::get('student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('student/update/{id}', 'StudentController@update')->name('student.update');
Route::post('student/delete/{id}', 'StudentController@delete')->name('student.delete');


// Country routes
Route::get('countries','CountryController@index')->name('countries');
Route::get('country/create', 'CountryController@create')->name('country.create');
Route::post('country/store', 'CountryController@store')->name('country.store');
Route::get('country/edit/{id}', 'CountryController@edit')->name('country.edit');
Route::post('country/update/{id}', 'CountryController@update')->name('country.update');
Route::post('country/delete/{id}', 'CountryController@delete')->name('country.delete');

// Division routes
Route::get('divisions','DivisionController@index')->name('divisions');
Route::get('division/create', 'DivisionController@create')->name('division.create');
Route::post('division/store', 'DivisionController@store')->name('division.store');
Route::get('division/edit/{id}', 'DivisionController@edit')->name('division.edit');
Route::post('division/update/{id}', 'DivisionController@update')->name('division.update');
Route::post('division/delete/{id}', 'DivisionController@delete')->name('division.delete');


// District routes
Route::get('districts','DistrictController@index')->name('districts');
Route::get('district/create', 'DistrictController@create')->name('district.create');
Route::post('district/store', 'DistrictController@store')->name('district.store');
Route::get('district/edit/{id}', 'DistrictController@edit')->name('district.edit');
Route::post('district/update/{id}', 'DistrictController@update')->name('district.update');
Route::post('district/delete/{id}', 'DistrictController@delete')->name('district.delete');

// Area routes
Route::get('areas','AreaController@index')->name('areas');
Route::get('area/create', 'AreaController@create')->name('area.create');
Route::post('area/store', 'AreaController@store')->name('area.store');
Route::get('area/edit/{id}', 'AreaController@edit')->name('area.edit');
Route::post('area/update/{id}', 'AreaController@update')->name('area.update');
Route::post('area/delete/{id}', 'AreaController@delete')->name('area.delete');


//category routes
Route::get('categories','CategoryController@index')->name('categories');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');

//Product routes
Route::get('products','ProductController@index')->name('products');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/store', 'ProductController@store')->name('product.store');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('product/update/{id}', 'ProductController@update')->name('product.update');
Route::post('product/delete/{id}', 'ProductController@delete')->name('product.delete');



// AJAX Calls
Route::get('load_divisions', 'DistrictController@load_divisions')->name('load_divisions');
Route::get('load_districts', 'AreaController@load_districts')->name('load_districts');



//permission routes
Route::get('permissions', 'PermissionController@index')->name('permissions');
Route::get('permission/create', 'PermissionController@create')->name('permission.create');
Route::post('permission/store', 'PermissionController@store')->name('permission.store');
Route::get('permission/edit/{id}', 'PermissionController@edit')->name('permission.edit');
Route::post('permission/update/{id}', 'PermissionController@update')->name('permission.update');
Route::post('permission/delete/{id}', 'PermissionController@delete')->name('permission.delete');
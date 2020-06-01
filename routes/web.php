<?php

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

Route::get('/', function () {
    return redirect('/about');
});

Route::get('/about', function () {
    return view('about');

})->name('about');

Route::get('/map', function () {
    return view('map');

})->name('map');

Route::get('/testrating', function () {
    return view('testrating');

})->name('testrating');

Route::get('/attractions', function () {
    return view('attractions');

})->name('attractions');

Route::get('/foods', function () {
    return view('foods');

})->name('foods');

Route::get('/contact-us', function () {
    return view('contact');

})->name('contact-us');

Route::get('/tent-room', function () {
    return view('tentroom');

})->name('tentroom');

Route::get('/a-frame', function () {
    return view('aframe');

})->name('aframe');

Route::get('/b-frame', function () {
    return view('bframe');

})->name('bframe');

Route::get('/login', function () {
    return view('login');

});

Route::get('/reserve', function () {
    return view('reserve');

})->name('reserve');

Route::get('/sentmail', function () {
    return view('sentmail');

})->name('sentmail');

Route::get('/inforeserve', function () {
    return view('inforeserve');

})->name('inforeserve');

Route::get('/infopayment', function () {
    return view('infopayment');

})->name('infopayment');

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

//PDF
Route::get('pdf','PDFController@pdf')->name('pdf');

Route::resource('/reports', 'ReportsController');



Route::resource('/posts', 'PostsController');





Route::get('/profile',  'UsersController@profile' )->name('profile');
Route::resource('/users', 'UsersController');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::resource('/roomcategories', 'RoomCategoriesController');

Route::get('/tasks', 'TasksController@index');
Route::resource('/tasks', 'TasksController');

Route::get('/details/paid','DetailsController@indexPaid')->name('details.paid');
Route::get('/details/all','DetailsController@indexAll')->name('details.all');

Route::post('/details/create','DetailsController@create');
Route::resource('/details', 'DetailsController');

Route::resource('/rooms', 'RoomsController');

Route::resource('/pricetracks', 'PriceTracksController');

Route::get('/payments/paid','PaymentsController@indexPaid')->name('payments.paid');
Route::get('/payments/all','PaymentsController@indexAll')->name('payments.all');
Route::resource('/payments', 'PaymentsController');
Route::post('/payments/create','PaymentsController@create');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('review', 'ProductReviewController');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






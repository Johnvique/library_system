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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/Admin/index', function () {
        return view('Admin/index');
    });
    Route::get('/Admin/library-books', 'LibraryBooksController@index');
    Route::get('/Admin/book-category', 'BookCategoryController@index');
    Route::get('/Admin/system-settings', function () {
        return view('Admin/system-settings');
    });
    Route::get('/Admin/borrowed-books', 'BorrowedBooksController@index');
    Route::get('/Admin/returned-books', 'ReturnedBooksController@index');
    Route::get('/Admin/lost-books', 'LostBooksController@index');
    Route::get('/Admin/attendance-register', 'AttendanceRegisterController@index');
    Route::get('/Admin/penalties', 'PenaltiesController@index');
    Route::get('/Admin/library-officials', function () {
        return view('Admin/library-officials');
    });
    Route::get('/Admin/user-roles', function () {
        return view('Admin/user-roles');
    });
    Route::get('/Admin/user-permissions', function () {
        return view('Admin/user-permissions');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('library-books', 'LibraryBooksController');
Route::resource('book-category', 'BookCategoryController');
Route::resource('borrowed-books', 'BorrowedBooksController');
Route::resource('returned-books', 'ReturnedBooksController');
Route::resource('lost-books', 'LostBooksController');
Route::resource('penalties', 'PenaltiesController');
Route::resource('attendance-register', 'AttendanceRegisterController');
Route::resource('library-officials', 'LibraryOfficialsController');
Route::resource('user-roles', 'UserRolesController');
Route::resource('user-permissions', 'UserPermissionsController');
Route::resource('system-settings', 'SystemSettingsController');

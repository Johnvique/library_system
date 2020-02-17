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
    Route::get('/admin/index', function () {
        return view('admin/index');
    });
    Route::get('/admin/library-books', function () {
        return view('admin/library-books');
    });
    Route::get('/admin/book-category', function () {
        return view('admin/book-category');
    });
    Route::get('/admin/system-settings', function () {
        return view('admin/system-settings');
    });
    Route::get('/admin/borrowed-books', function () {
        return view('admin/borrowed-books');
    });
    Route::get('/admin/returned-books', function () {
        return view('admin/returned-books');
    });
    Route::get('/admin/lost-books', function () {
        return view('admin/lost-books');
    });
    Route::get('/admin/daily-visit', function () {
        return view('admin/daily-visit');
    });
    Route::get('/admin/weekend-visit', function () {
        return view('admin/weekend-visit');
    });
    Route::get('/admin/holiday-visit', function () {
        return view('admin/holiday-visit');
    });
    Route::get('/admin/penalties', function () {
        return view('admin/penalties');
    });
    Route::get('/admin/attendance-register', function () {
        return view('admin/attendance-register');
    });
    Route::get('/admin/library-officials', function () {
        return view('admin/library-officials');
    });
    Route::get('/admin/user-roles', function () {
        return view('admin/user-roles');
    });
    Route::get('/admin/user-permissions', function () {
        return view('admin/user-permissions');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('library-books', 'LibraryBooksController');
Route::resource('book-category', 'BookCategoryController');
Route::resource('borrowed-books', 'BorrowedBooksController');
Route::resource('returned-books', 'ReturnedBooksController');
Route::resource('lost-books', 'LostBooksController');
Route::resource('daily-visit', 'DailyVisitController');
Route::resource('weekend-visit', 'WeekendVisitController');
Route::resource('holiday-visit', 'HolidayVisitController');
Route::resource('penalties', 'PenaltiesController');
Route::resource('attendance-register', 'AttendanceRegisterController');
Route::resource('library-officials', 'LibraryOfficialsController');
Route::resource('user-roles', 'UserRolesController');
Route::resource('user-permissions', 'UserPermissionsController');
Route::resource('system-settings', 'SystemSettingsController');

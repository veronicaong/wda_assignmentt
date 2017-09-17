<?php
use App\User;
use App\Tickets;
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

Route::get('/', 'HomeController@homePage');
Route::get('/home', 'HomeController@homePage');
Route::get('/form', 'HomeController@homePage');
Route::post('/comments', 'TicketController@ticketComments');
Route::get('/ticketdetails', 'TicketController@ticketDetails');
Route::get('/ticketsummary', 'TicketController@ticketSummary');
Route::get('/form', 'TicketController@formTicket');
Route::get('/faq', 'FaqController@faq');
Route::get('/disclaimer', 'HomeController@disclaimer');
Route::get('/terms', 'HomeController@terms');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/aboutits', 'HomeController@aboutIts');
Route::get('/trackticket', 'TicketController@trackTicket');
Route::get('/searchticket', 'TicketController@findTicket');
Route::get('/staffticketdetails', 'AdminController@staffTicketDetails');
Route::get('/staffticketlist', 'AdminController@staffTicketList');
Route::post('/updatestatus', 'AdminController@updateTicketList');
Route::get('/ticket', function () {
    $user = User::where(
        [
            "first_name"=>"VERONICA", 
        ]
    )->first();

    return $user->tickets()->get();
    return view('welcome');
});

Route::post('/formticket', 'TicketController@ticket');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

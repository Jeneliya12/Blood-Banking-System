<?php
use Illuminate\Support\Fascades\Input;
use App\Donor;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somethingg reat!
|
*/
Route::get('/chats', function () {
    return view('chats');
});

Route::get('/bloodsorting/{id}', 'BloodGroupController@show');

Route::get('/donorschart', 'ChartsController@index');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');

Route::post('/search', function(){
    $q= Request::get('q');
    if($q != ""){
        $donors= Donor::where('name', 'LIKE', '%' . $q . '%')
        ->get();
        if (count($donors)>0)
            return view ('searchcontent')->withDetails($donors)->withQuery($q);

    }
    $p= Request::get('p');
    if($p != ""){
        $donors= Donor::where('country', 'LIKE', '%' . $p . '%')
        ->get();
        if (count($donors)>0)
            return view ('searchcontent')->withDetails($donors)->withQuery($p);
    }
    $o= Request::get('o');
    if($o != ""){
        $donors= Donor::where('city', 'LIKE', '%' . $o . '%')
        ->get();
        if (count($donors)>0)
            return view ('searchcontent')->withDetails($donors)->withQuery($o);
    }
    $n= Request::get('n');
    if($n != ""){
        $donors= Donor::where('blood', 'LIKE', '%' . $n . '%')
        ->get();
        if (count($donors)>0)
            return view ('searchcontent')->withDetails($donors)->withQuery($n);
    }
    return view("searchcontent")->withMessage("No Donors found");
});

Route::post('/message', 'MessageController@message');

Route::get('testing', 'TestingController@index');
Route::get('/getCities/{id}', 'TestingController@getCities')->name('getCities');
Route::get('/getData/{id}', 'TestingController@getData')->name('getData');

Route::resource('employ', 'Employers\EmployersController');

Route::get('/employpdf', 'EmployPDFController@index');

Route::get('/employ_pdf/pdf', 'EmployPDFController@pdf');

Route::resource('news', 'News\NewsController');

Route::get('/news_pdf/pdf', 'NewsPDFController@pdf');

Route::get('/', 'IndexController@index');

Route::resource('donors', 'DonorsController');


Route::resource('questions', 'QuestionsController');

Route::get('/newspages', 'News\NewsListController@index');

Route::get('/donorspage', 'DonorsPageController@index');

Route::get('/employerpage', 'Employers\EmployerPagesController@index');

Route::get('/donors/{id}', 'DonorsListController@show');

Route::get('/donors/{id}', 'EmployerPagesController@show');

Route::get('/reserve/{id}', 'Admin\DonorsListController@reserve');

Route::get('/cancel/{id}', 'Admin\DonorsListController@bookingcancel');

Route::get('/employ/{id}', 'EmployerPagesController@show');

Route::get('/news/{id}', 'NewsListController@show');

Route::get('/about', 'Admin\AboutPagesController@index');

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/paypal', function () {
    return view('paypal');
});

Route::get('/sms', function () {
    return view('sms');
});

Route::post('sms', 'SmsController@sendsms');

Route::resource('/daterange', 'DateExtentController');

Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');

Route::get('/test', function(){
    return view('testview');
});

// Route::get('/sendemail/send', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/contact', 'ContactemailController@index');
Route::post('/contact/send', 'ContactemailController@send');

Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');

 Route::get('/agechart', 'AgeChartController@age');

Route::group(['middleware'=> ['auth', 'admin']], function(){

    /*Dashboard*/
    // Route::get('/dashboard', function(){
    //     return view('admin.dashboard');
    // });
     Route::get('/dashboard', 'Admin\DonorsListController@charts');
    /*End Dashboard*/
    
    /*Role Register*/
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::PATCH('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');
    Route::get('dashboard/user/changestatus/{id}', 'Admin\DashboardController@changestatus')->name('changestatus');
   /*End Role Register*/
    
    /*About Page*/
    Route::get('/about-register', 'Admin\AboutController@registered');
    Route::post('/save-about', 'Admin\AboutController@store');
    Route::get('/about-edit/{id}', 'Admin\AboutController@registeredit');
    Route::PATCH('/about-register-update/{id}', 'Admin\AboutController@registerupdate');
    Route::delete('/about-delete/{id}', 'Admin\AboutController@registerdelete');
    /*End About Page*/

    /*Donor Register*/
    Route::get('/donor-register', 'Admin\DonorsListController@registered');
    Route::get('/booking', 'Admin\DonorsListController@booking');
    Route::get('/donor-register/pdf', 'DynamicPDFController@pdf');
    Route::post('/save-donors', 'Admin\DonorsListController@store');
    Route::get('/donors-edit/{id}', 'Admin\DonorsListController@registeredit');
    Route::PATCH('/donor-register-update/{id}', 'Admin\DonorsListController@registerupdate');
    Route::delete('/donor-delete/{id}', 'Admin\DonorsListController@registerdelete');
    /*End Role Register*/

    /*Employ Register*/
    Route::get('/employ-register', 'Admin\EmployersController@registered');
    Route::post('/save-employ', 'Admin\EmployersController@store');
    Route::get('/employ-edit/{id}', 'Admin\EmployersController@registeredit');
    Route::PATCH('/employ-register-update/{id}', 'Admin\EmployersController@registerupdate');
    Route::delete('/employ-delete/{id}', 'Admin\EmployersController@registerdelete');
    /*End Employ Register*/

     /*News Register*/
    Route::get('/news-register', 'Admin\NewsController@registered');
    Route::post('/save-news', 'Admin\NewsController@store');
    Route::get('/news-edit/{id}', 'Admin\NewsController@registeredit');
    Route::PATCH('/news-register-update/{id}', 'Admin\NewsController@registerupdate');
    Route::delete('/news-delete/{id}', 'Admin\NewsController@registerdelete');

    /*End News Register*/
   

    
});

//Route::post('/submitdata','TestController@testfunction');


Route::group(['middleware' => 'auth'], function () {

    /**
     * Event related routes
     */
    $eventsController = "\App\Modules\Event\Http\Controllers\EventsController";
    Route::get('events', "{$eventsController}@index")->name('events');
    Route::get('events/add', "{$eventsController}@add")->name('event-add');
    Route::post('events/save', "{$eventsController}@store")->name('event-save');
    Route::get('Donors/{id}', "{$eventsController}@view")->name('event-view');
    Route::get('events/nearby', "{$eventsController}@nearby")->name('event-nearby');
});

Route::get('/header', function () {
    return view('header');
});

Route::post('/submitdata','TestController@testfunction');

Route::get('/test', function () {
    return view('testview');
});


Route::get('/charts', 'DonorController@index');

Route::get('/login', 'LoginController@registered');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Auth::routes(['verify'=>true]);




<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\showController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\sendmail;
use App\Http\Controllers\bookController;
use App\Http\Controllers\readerController;
use App\Http\Controllers\SmsController;

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

/*
|--------------------------------------------------------------------------
| MAIN Routes VIEW
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('main\home1');
});

Route::get('home', function () {
    return view('main\home1');
});

Route::get('about', function () {
    return view('main\aboutus');
});

Route::get('contact', function () {
    return view('main\contactus');
});

Route::get('services', function () {
    return view('main\services');
});

Route::get('signup', function () {
    return view('main\signup');
});

Route::get('login', function () {
    return view('main\login');
});

Route::get('show', function () {
    return view('main\viewData');
});

Route::get('test', function () {
    return view('main\test');
});

Route::get('forgetpassword', function () {
    return view('main\forgetpassword');
});



Route::post("reg",[MyController::class,'show']);

Route::get("showc1 ",[showController::class,'show']);

Route::post("update/{id}",[showController::class,'update']);

Route::post("insert",[showController::class,'insert']);

Route::get("delete/{regid}",[showController::class,'delete']);

Route::get("search/{regid}",[showController::class,'search']);

Route::get("ctest",[showController::class,'test']);

Route::post("getlogin",[loginController::class,'getlogin']);

Route::get("logout",[loginController::class,'logout']);

Route::post("contactus",[showController::class,'contactus']);

Route::post("forget1",[loginController::class,'forget1']);


/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
*/
Route::get('/adminhome', function () {
    return view('admin\adminhome');
});

//.....AUTHOR..............

Route::get('/authorform', function () {
    return view('admin\author\authorform');
});

Route::get('/showauthor', function () {
    return view('admin\author\showauthor');
});

Route::get('/testemail', function () {
    return view('admin\testemail');
});

Route::get('/adminemail', function () {
    return view('admin\adminemail');
});

Route::get("sendemail",[sendmail::class,'sendemail']);

Route::get("/sms",[SmsController::class,'index']);

//Route:get("/sms",[SmsController::class,'index']);



Route::get("/showa",[adminController::class,'showa']);
Route::get("/searcha/{authorid}",[adminController::class,'authorsearch']);
Route::post("/authorinsert",[adminController::class,'authorinsert']);
Route::post("/authorupdate",[adminController::class,'authorupdate']);
Route::get("/authorDelete/{authorid}",[adminController::class,'authorDelete']);
Route::get("/authorcreate",[adminController::class,'authorcreate']);
Route::get("/adminhome1",[adminController::class,'adminhome']);


//......PUBLICATION..........

Route::get('publicationform', function () {
    return view('admin\publication\publicationform');
});

Route::get("showp",[adminController::class,'showp']);
Route::post("pubinsert",[adminController::class,'pubinsert']);
Route::get("pubDelete/{pubid}",[adminController::class,'pubDelete']);
Route::get("pubsearch/{pubid}",[adminController::class,'pubsearch']);
Route::post("pubupdate",[adminController::class,'pubupdate']);


//.....FEEDBACK....READER....OWNER....REVIEW....CONTACT....

Route::get('feedbackshow', function () {
    return view('admin\feedbackshow');
});

Route::get('responseform', function () {
    return view('admin\responseform');
});

Route::get("showf",[adminController::class,'showf']);

Route::get("showr",[adminController::class,'showr']);

Route::get("showread",[adminController::class,'showread']);

Route::get("showo",[adminController::class,'showo']);
Route::get("selecto",[adminController::class,'selecto']);
Route::post("admincomm",[adminController::class,'admincomm']);

Route::get("showc",[adminController::class,'showc']);

Route::get("contactsearch/{contactid}",[adminController::class,'contactsearch']);
Route::post("response",[adminController::class,'response']);



/*
|--------------------------------------------------------------------------
| OWNER Routes
|--------------------------------------------------------------------------
*/
Route::get('/ownerhome', function () {
    return view('owner\ownerhome');
});

Route::get('bookform', function () {
    return view('owner\book\bookform');
});


Route::get('/ownerprofile', function () {
    return view('owner\ownerprofile');
});


Route::post("/bookinsert",[bookController::class,'bookinsert']);

Route::post("/bookupdate",[bookController::class,'bookupdate']);

Route::get("/conform/{bookingid}",[bookController::class,'conform']);
Route::get("/conform1/{bookingid}",[bookController::class,'conform1']);

Route::get("/bookshow",[bookController::class,'bookshow']);

Route::get("/bookingshow",[bookController::class,'bookingshow']);

Route::get("/booksearch/{bookid}",[bookController::class,'booksearch']);

Route::get("/bookDelete/{bookid}",[bookController::class,'bookDelete']);

Route::get("index",[ownerController::class,'index']);

Route::post("ownerupdate",[ownerController::class,'ownerupdate']);

Route::get("/authorselect",[bookController::class,'authorselect']);

Route::get("selectr",[ownerController::class,'selectr']);
Route::post("ownercomm",[ownerController::class,'ownercomm']);

Route::get("/bookingcancelo",[bookController::class,'bookingcancelo']);

Route::get("/bookreturno",[bookController::class,'bookreturno']);

Route::get("/accepted/{bkcanid}",[bookController::class,'accepted']);

/*
|--------------------------------------------------------------------------
| READER Routes
|--------------------------------------------------------------------------
*/
Route::get('readerhome',function()
{
    return view('reader\readerhome');
});

Route::get('readerbookshow', function () {
    return view('reader\readerbookshow');
});

Route::get('readerprofile', function () {
    return view('reader\readerprofile');
});

Route::post("/rprofile",[readerController::class,'rprofile']);

Route::get("/readerbookshowController",[readerController::class,'readerbookshowController']);

Route::get("readerpro",[readerController::class,'readerpro']);

//Route::post("booking",[readerController::class,'booking']);
Route::get("booking/{bookid}",[readerController::class,'booking']);

Route::get("/bookdetails/{bookid}",[readerController::class,'bookdetails']);

Route::get("readerbookingshow",[readerController::class,'readerbookingshow']);

Route::get("readerbookingcancelshow",[readerController::class,'readerbookingcancelshow']);

Route::get("readerbkcancel/{bookingid}",[readerController::class,'readerbkcancel']);

Route::post("bookingcancelinsert",[readerController::class,'bookingcancelinsert']);

Route::get("readerhome1",[readerController::class,'readerhome1']);

Route::get("readerbookreturn",[readerController::class,'readerbookreturn']);

Route::get("readerreturn/{returnid}",[readerController::class,'readerreturn']);
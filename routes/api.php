<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
route::post("localbusinesses",'LocalbusinessesController@entry');
route::post("gtrate", 'LocalbusinessesController@gtrate');
route::post("rate", 'LocalbusinessesController@createrate');
route::post("getbusiness", 'LocalbusinessesController@getbusiness');
route::post("productget", 'LocalbusinessesController@getproducts');
route::post("localbsearch", 'LocalbusinessesController@localbsearch');
route::post("localbsearcht", 'LocalbusinessesController@localbsearcht');
route::post("regionsget", 'LocalbusinessesController@regionsget');

Route::post('searchreviewdis', 'adminpanel@searchreviewdis');
Route::post('getreviewresponses', 'adminpanel@getreviewresponses');
Route::post('submitresponse', 'adminpanel@reviewresponses');
Route::post('getspon', 'adminpanel@getspon');
Route::post('sponsor', 'adminpanel@sponsor');
Route::post('sponsoradd', 'adminpanel@sponsoradd');
Route::post('sponsorid', 'adminpanel@sponsorid');
Route::post('sponsoredit', 'adminpanel@sponsoredit');
Route::post('sponsordelete', 'adminpanel@sponsordelete');
Route::post('sponsorsearch', 'adminpanel@sponsorsearch');

route::post("revdelet", 'adminpanel@revdelet');
route::post("reviewupd", 'adminpanel@reviewupd');
route::post("revdedit", 'adminpanel@revdedit');
route::post("getallreviews", 'LocalbusinessesController@getallreviews');
route::post("searchreview", 'LocalbusinessesController@searchreview');
route::post("subscribe", 'LocalbusinessesController@subscribe');

route::post("localbusinesscontent", 'LocalbusinessesController@display');
route::post("revdata", 'LocalbusinessesController@review');
route::post("localbget", 'LocalbusinessesController@reviewget');
route::post("getb",'LocalbusinessesController@getb');
route::post("products", 'LocalbusinessesController@products');
route::post("productsview", 'LocalbusinessesController@productsview');
route::post("vacanc", 'LocalbusinessesController@vacants');
route::post("vaca",'LocalbusinessesController@vacancies');
route::post("productsearch",'LocalbusinessesController@product');
route::post("addcovid",'LocalbusinessesController@addcoivd');
route::post("blog",'LocalbusinessesController@blog');
route::get("bloginfo", 'LocalbusinessesController@bloginfo');
route::post("blogcontent", 'LocalbusinessesController@blogcontent');
route::post("searchbloginfo", 'LocalbusinessesController@searchblogcontent');
route::post("searchvinfo", 'LocalbusinessesController@searchvinfo');
route::post("blogpolitic", 'LocalbusinessesController@blogpolitic');
route::post("agriblog", 'LocalbusinessesController@agriblog');
route::post("blogbus", 'LocalbusinessesController@blogbus');
route::post("fashion", 'LocalbusinessesController@Fashion');
route::post("blogsports", 'LocalbusinessesController@blogsports');
route::post("blogfood", 'LocalbusinessesController@blogfood');
route::post("blogTravel", 'LocalbusinessesController@blogTravel');
route::post("blogEducation", 'LocalbusinessesController@blogEducation');
route::post("blogothers", 'LocalbusinessesController@blogothers');


route::post("uploads",'eventsuploadController@index');
route::post("adminuploads", 'eventsuploadController@Aindex');
route::post("getads", 'eventsuploadController@getads');
route::post("Eventcontent", 'eventsuploadController@Eventcontent');
route::post("Questions", 'LocalbusinessesController@QNA');
route::post("getquest", 'LocalbusinessesController@QNAS');
route::post("searchqinfo", 'LocalbusinessesController@searchqinfo');
route::post("searchevent", 'LocalbusinessesController@searchevent');
route::post("gettotal", 'LocalbusinessesController@gettotal');
route::post("questionget", 'LocalbusinessesController@getquest');
route::post("relpy", 'LocalbusinessesController@relpy');
route::post("approvedevent", 'adminpanel@approvedevent');
route::post("Dapprovedevent", 'adminpanel@Dapprovedevent');

route::post("blogupda", 'adminpanel@blogupda');
route::post("blogupd", 'adminpanel@blogupd');
route::post("blogupdd", 'adminpanel@blogdelet');
route::post("blogedit", 'adminpanel@blogedit');
route::post("admineditupd", 'adminpanel@admineditupd');


route::post("searchproductinfo", 'adminpanel@searchproductinfo');
route::post("productinfo", 'adminpanel@productinfo');
route::post("productA", 'adminpanel@productA');
route::post("productD", 'adminpanel@productD');
route::post("productdelet", 'adminpanel@productDelet');
route::post("productedit", 'adminpanel@productedit');
route::post("producteditentry", 'adminpanel@producteditentry');
route::post("adminproducts", 'adminpanel@adminproducts');

route::post("searchvacaninfo", 'adminpanel@searchvacaninfo');
route::post("vacantinfo", 'adminpanel@vacantinfo');
route::post("vacantdelet", 'adminpanel@Deletvaca');
route::post("vacantedit", 'adminpanel@vacantedit');
route::post("adminvaca", 'adminpanel@vacantentry');
route::post("admineditvaca", 'adminpanel@admineditvaca');

route::post("searchlbinfo", 'adminpanel@searchlbinfo');
route::post("lbinfo", 'adminpanel@lbinfo');
route::post("lbdelet", 'adminpanel@localbdelet');
route::post("localbA", 'adminpanel@localbA');
route::post("localbD", 'adminpanel@localbD');
route::post("localbusinessesedt", 'adminpanel@localbusinessesedt');
route::post("localbupdt", 'adminpanel@localbupdt');

route::post("searchlQAINFO", 'adminpanel@searchQAINFO');
route::post("QAINFO", 'adminpanel@QAINFO');
route::post("Qdelet", 'adminpanel@Qdelet');
route::post("QA", 'adminpanel@QA');
route::post("QD", 'adminpanel@QD');
route::post("qdedit", 'adminpanel@qdedit');
route::post("Questionsupd", 'adminpanel@Questionsupd');
route::post("Questionsedit", 'adminpanel@QuestionsupdED');
route::post("qdcm", 'adminpanel@qdcm');
route::post("comdelet", 'adminpanel@comdelet');

route::post("Deletevent", 'adminpanel@Deletevent');
route::post("Editevent", 'adminpanel@Editevent');
route::post("blogadmin", 'adminpanel@blogadmin');
route::post("adminuploadsupd", 'adminpanel@updatetevent');
route::post("cancel", 'adminpanel@cancel');
route::post("comments", 'LocalbusinessesController@comments');
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'authController@login');
    Route::post('register', 'authController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('logout', 'authController@logout');
        Route::post('user', 'authController@user');
    });
});

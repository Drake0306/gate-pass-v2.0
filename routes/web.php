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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/','log_inController@log_in');
Route::any('/log_in','log_inController@log_in_config');
Route::any('/register','viewController@register');
Route::any('/view_home','viewController@home');
Route::any('/store_image','viewController@storeimg');
Route::any('log_out','viewController@log_out');
Route::any('/store_visitor_data','viewController@store_visitor_data');
Route::any('/in_out_register','viewController@in_out_register');
Route::any('/search_in_out_register','viewController@search_in_out_register');
Route::any('/visitor_register','viewController@visitor_register');
Route::any('/search_visitor_register','viewController@search_visitor_register');
Route::any('/snap','viewController@snap');
Route::any('/out_entry','viewController@out');
Route::any('/out_entry_data','viewController@out_entry_data');
//NEW ADDED
Route::get('/edit_visit_entry/{id}','viewController@edit_visit_entry');
Route::get('/snap_edit/{id}','viewController@snap_edit');
Route::any('/update_visitor_data/{id}','viewController@update_visitor_data');
Route::any('/print_pdf_new_updated/{id}','viewController@print_pdf_new_updated');
//15/4/2020
Route::any('/edit_visitor/{id}','viewController@edit_visitor');
Route::any('/update_visitor_personal_data/{id}','viewController@update_visitor_personal_data');
Route::any('/create_user_roll','viewController@create_user_roll');
//16/4/2020
Route::any('/create_new_user','viewController@create_new_user');
Route::any('/check_new_user_id','viewController@check_new_user_id');
Route::any('/create_new_user_/','viewController@create_new_user_');
// Truck Scan 
Route::any('/truck/data/scan','viewController@truckDataScan');
Route::any('/truck/visit/list','viewController@TruckVisitList');
Route::any('/truck/data/add','viewController@DriverHelperAdd');
Route::any('/truck/data/scan/edit/{id}','viewController@DriverHelperEditList');
Route::any('/truck/data/update/{id}','viewController@DriverHelperEditUpdate');
Route::any('/truck/data/update/file/upload/section/{id}','viewController@TruckVisitEditUploadSection');
Route::any('/truck/data/image/upload/{id}','viewController@TruckVisitUploadFile');
Route::any('/truck/data/pdf/print/{id}','viewController@TruckVisitPdfPrintView');
Route::any('/truck/data/pdf/print/now/{id}','viewController@TruckVisitPdfPrintNow');
// Ajax
Route::any('truck/ajax/load','viewController@truckDataloadAjax');

// Labour Scan
Route::any('labour/data/scan','viewController@LabourDataScan');

// master 
// Master Party 
Route::any('/master/party/home','viewController@paryMasterView');
Route::any('/master/search/party/master','viewController@paryMasterSearch');
Route::any('/master/party/list','viewController@paryMasterList');
Route::any('/master/pary/edit/{id}','viewController@paryMasterEdit');
Route::any('/master/party/update/{id}','viewController@paryMasterUpadte');
Route::any('/master/party/create','viewController@paryMasterAdd');
// Master Party 
Route::any('/company','viewController@companyAdd');
Route::any('/company/update/{id}','viewController@companyUpdate');
// Master Party 
Route::any('/party_wise_tt','viewController@paryMasterttHome');
Route::any('/party_wise_tt/list','viewController@paryMasterttList');
Route::any('/master/pary_tt/edit/{id}','viewController@paryMasterttEdit');
Route::any('/master/party_master_tt/update{id}','viewController@paryMasterttUpdate');
Route::any('/master/party_master_tt/search','viewController@paryMasterTTSearch');

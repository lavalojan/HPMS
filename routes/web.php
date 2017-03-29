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



Route::get('/homepage', function () {
    return view('home2');
 });



Route::get('/addprescription', function () {
    return view('treatment');
 });
Route::get('/addnoticeboard', function () {
    return view('AddNoticeBoard');
 });

Route::get('/addreceptionist', function () {
    return view('addReceptionist');
});
Route::get('/addDoctor', function () {
    return view('addDoctor');
});
Route::get('/addCashier', function () {
    return view('addCashier');
});
Route::get('/profile', function () {
    return view('profile');
});
// Route::get('/prescription', function () {
//     return view('doctor/addPrescription');
// });
Route::get('/addpayment', function () {
    return view('addPayment');
});






Route::get('/home', function () {
    return view('layout/home');
});
// Route::get('/SaveUser', 'addUserController@store';

Route::get('/addUser', function(){
	return view('adduser');
});

Route::get('/adddepartment', function(){
	return view('addDepartment');
});

Route::get('/registerNewPatient', function(){
	return view('registerNewPatient');
});

Route::get('/getPayment', function(){
	return view('payment');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/treatment', function(){
	return view('treatment');
});





Route::get('/users','ShowController@showUser');
Route::get('/patients','ShowController@showPatients');
Route::get('/department','ShowController@showDepartment');
Route::get('/doctors','ShowController@showDoctor');
Route::get('/cashier','ShowController@showCashier');
Route::get('/receptionist','ShowController@showReceptionist');
Route::get('/noticeboard','ShowController@showNoticeBoard');
Route::get('/prescription','ShowController@showPrescription');
Route::get('/payment','ShowController@showPayment');





Route::post('/StoreNewPatients', 'AddPatientController@Store');
Route::post('/AddUsers', 'AddUserController@Store');
Route::post('/AddDepartment', 'AddDepartmentController@Store');
Route::post('/SaveHistory', 'AddHistoryController@Store');
Route::post('/AddReceptionist', 'AddReceptionistController@Store');
Route::post('/AddDoctor', 'AddDoctorController@Store');
Route::post('/AddCashier', 'AddCashierController@Store');
Route::post('/AddNoticeBoard', 'AddNoticeBoardController@Store');
Route::post('/AddPayment', 'AddPaymentController@Store');

?>
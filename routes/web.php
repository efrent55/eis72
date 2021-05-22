<?php


// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;

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

//Auth::routes(['verify' => true]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/admin',function(){
//    return view('admin.dashboard');
//}) ;

Route::group(['middleware' => ['auth', 'admin']],function () {
    //login 
    
    // Route::get('/', function() {
    //    return view('admin.dashboard');
    // });

    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    });

    //Register

    route::get('/role-register', 'Admin\DashboardController@registered') ;

    // Edit
    route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

    //Update

    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate') ;   

    // delete 
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

   //Office mgt
   
    route::get('/officemgt', 'Admin\OfficemgtController@index');
    
    Route::post('/save-officemgt', 'Admin\OfficemgtController@store') ;

    Route::get('/edit-office/{id}', 'Admin\OfficemgtController@edit');
 
    Route::put('/update-office/{id}','Admin\OfficemgtController@update');    

    Route::delete('/delete-office/{id}', 'Admin\OfficemgtController@delete');  

    //Office View  - PDF

    route::get('/officeview', 'Admin\OfficemgtController@indexlist');


    //PDF
    Route::get('/dynamic_pdf/pdf','Admin\OfficemgtController@pdf');

    //Equipment Management

    route::get('/equipmentmgt', 'Admin\EquipmentmgtController@index');



   
    Route::post('/save-equipmentmgt', 'Admin\EquipmentmgtController@store') ;

    Route::get('/edit-equipment/{id}', 'Admin\EquipmentmgtController@edit');

    Route::put('/update-equipment/{id}','Admin\EquipmentmgtController@update');    

    Route::delete('/delete-equipment/{id}', 'Admin\EquipmentmgtController@delete'); 

    Route::get('/view-qr/{id}', 'Admin\EquipmentmgtController@view_qr');

    //Route::get('qrcode', function () {
    //    return QrCode::size(300)->generate('dadadad');
    //});

    //Customer pdf
    route::get('/customerview', 'Admin\OfficemgtController@customerindex');


    // transaction - Issuance - Turn -in - Incident
    route::get('/transaction', 'Admin\transactioncontroller@index');
        
    Route::get('/load-personaltransaction/{id}', 'Admin\transactioncontroller@transactionindex');

    Route::get('/load-issuancetran', 'Admin\transactioncontroller@issuanceindex');
    
});


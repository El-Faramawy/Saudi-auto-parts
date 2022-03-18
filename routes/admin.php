<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'admin'], function () {
    Route::get('login',function (){
        if (Auth::guard('admin')->check()){
            return redirect('admin/home');
        }
        return view('Admin/auth/login');
    });
    Route::post('do-log','AuthController@login')->name('do-log');


    //******* after login *******
    Route::group(['middleware' => 'admin:admin'], function () {

        Route::get('log-out','AuthController@logout')->name('log-out');

        Route::get('/',function (){
            return redirect('admin/home');
        })->name('/');
//        Route::get('home','IndexController@index')->name('home');
        Route::view('home','Admin.index')->name('home');

        ################################### Admins ##########################################
        Route::get('show-admins','AdminController@get')->name('show-admins');
        Route::view('add-admin','Admin.Admin.create')->name('add-admin');
        Route::post('store.admin','AdminController@store_admin')->name('store.admin');
        Route::post('admin_delete','AdminController@admin_delete')->name('admin_delete');
        Route::get('admin_edit/{id}','AdminController@admin_edit')->name('admin_edit');
//        Route::post('admin_check.delete','AdminController@admin_check_delete')->name('admin_check.delete');
        Route::post('store.admin_update','AdminController@store_admin_update')->name('store.admin_update');

        ################################### Users ##########################################
        Route::get('show-users','UserController@get')->name('show-users');
//        Route::get('get_one_user/{id}','UserController@get_one_user')->name('get_one_user');
        Route::view('add-user','Admin.CRUD.User.create')->name('add-user');
        Route::post('store.user','UserController@store_user')->name('store.user');
        Route::post('user_delete','UserController@user_delete')->name('user_delete');
//        Route::post('block_user','UserController@block_user')->name('block_user');
        Route::get('user_edit/{id}','UserController@user_edit')->name('user_edit');
        Route::post('store.user_update','UserController@store_user_update')->name('store.user_update');

        ################################### company ##########################################
        Route::get('show-companys','CompanyController@get')->name('show-companys');
        Route::view('add-company','Admin.CRUD.Company.create')->name('add-company');
        Route::post('store.company','CompanyController@store_company')->name('store.company');
        Route::post('company_delete','CompanyController@company_delete')->name('company_delete');
        Route::get('company_edit/{id}','CompanyController@company_edit')->name('company_edit');
        Route::post('store.company_update','CompanyController@store_company_update')->name('store.company_update');

        ################################### Trader ##########################################
        Route::get('show-traders','TraderController@get')->name('show-traders');
        Route::view('add-trader','Admin.CRUD.Trader.create')->name('add-trader');
        Route::post('store.trader','TraderController@store_trader')->name('store.trader');
        Route::post('trader_delete','TraderController@trader_delete')->name('trader_delete');
        Route::get('trader_edit/{id}','TraderController@trader_edit')->name('trader_edit');
        Route::post('store.trader_update','TraderController@store_trader_update')->name('store.trader_update');

        ################################### products ##########################################
        Route::get('show-products','ProductController@get')->name('show-products');
        Route::get('product_images/{id}','ProductController@product_images')->name('product_images');
        Route::post('product_delete','ProductController@product_delete')->name('product_delete');

        ################################### product offers ##########################################
        Route::get('product_offers/{id}','OfferController@product_offers')->name('product_offers');
        Route::post('offer_delete','OfferController@offer_delete')->name('offer_delete');

        ################################### offer_messages ##########################################
        Route::get('offer_messages/{id}','MessageController@offer_messages')->name('offer_messages');




        ################################### contact ##########################################
        Route::get('show-contact','ContactController@get')->name('show-contact');
        Route::post('contact_delete','ContactController@contact_delete')->name('contact_delete');

        ################################### Profile ##########################################
        Route::get('my_profile','AdminController@my_profile')->name('my_profile');
        Route::post('store-profile','AdminController@save_profile')->name('store-profile');




        ################################### About ##########################################
        Route::get('about_us','AboutUsController@index')->name('about_us');
        Route::post('edit_about','AboutUsController@edit_about')->name('edit_about');





    });//end Middleware Admin


});//end Prefix

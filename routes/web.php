<?php

Route::get('/', function () {
    return view('auth/signin');
});

Route::prefix('auth')->group(function () {
    Route::get('/signup', 'Auth\StaffAuthController@signup');
    Route::post('/signup', 'Auth\StaffAuthController@v_signup');
    Route::get('/signin', 'Auth\StaffAuthController@signin');
    Route::post('/signin', 'Auth\StaffAuthController@v_signin');
    // Route::get('/signout', 'Auth\StaffAuthController@signout');
    // Route::get('/locked', 'Auth\StaffAuthController@locked');
    // Route::post('/unlock', 'Auth\StaffAuthController@unlock');

    Route::prefix('reset')->group(function () {
        Route::get('/forgot', 'Auth\StaffAuthController@reset');
        // Route::post('/sendmail', 'Auth\StaffAuthController@sendMail');
        // Route::get('/{token}', 'Auth\StaffAuthController@v_newpassword');
        // Route::post('/{token}', 'Auth\StaffAuthController@resetPassword');
    });
});

Route::prefix('marketing')->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'Marketing\DashboardController@index')->name('dashboard');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'Marketing\UsersController@users')->name('users');
        Route::get('/all', 'Marketing\UsersController@user');
        Route::get('/summaryusers', 'Marketing\UsersController@summaryusers');
        Route::get('/usersyearly', 'Marketing\UsersController@usersyearly');
        Route::get('/usersday', 'Marketing\UsersController@usersday');
    });
    
    Route::prefix('transaction')->group(function () {
        Route::get('/', 'Marketing\TransactionsController@transaction')->name('transaction');
    });
    
    Route::prefix('payment')->group(function () {
        Route::get('/', 'Marketing\PaymentsController@payment')->name('payment');
    });

    Route::prefix('loyalty')->group(function () {
    
        Route::prefix('cashback')->group(function () {
            Route::get('/', 'Marketing\CashbacksController@cashback')->name('cashback');
        });
        
        Route::prefix('discount')->group(function () {
            Route::get('/', 'Marketing\DiscountsController@discount')->name('discount');
        });
        
        Route::prefix('voucher')->group(function () {
            Route::get('/', 'Marketing\VouchersController@voucher')->name('voucher');
        });
        
        Route::prefix('calculationrule')->group(function () {
            Route::get('/', 'Marketing\CalculationRulesController@calculationrule')->name('calculationrule');
        });
    });

    Route::prefix('broadcast')->group(function () {

        Route::prefix('sms')->group(function () {
            Route::get('/', 'Marketing\SmsController@sms')->name('sms');
        });
        
        Route::prefix('email')->group(function () {
            Route::get('/', 'Marketing\EmailController@email')->name('email');
        });
        
        Route::prefix('notification')->group(function () {
            Route::get('/', 'Marketing\NotificationsController@notification')->name('notification');
        });
    });
});



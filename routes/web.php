<?php

Auth::routes();

Route::get('/getexaminer','answerController@getExaminer');

Route::get('/', 'homeController@index');

Route::get('/sms', 'smsController@sendsms');

Route::get('/load', 'examinerController@index');

Route::get('/exam', function(){
    return view('exam.exam');
 });

 Route::get('/customerLead', function(){
   return view('pages.customerLead');
});


 Route::get('/upload', function(){
    return view('pages.upload');
 });

 //s3
 Route::post('upload', function(){    
    dd(request()->file('file'));
    // request()->file('file')->store(
    //     'my-file', 's3'
    // );
 })->name('upload');
 
 # create s3 bucket account + credit card
 # create user acount
     #my security credential
     # create IAM Users
     #create username
     #type of access 
        #programmatic access
        # set permission
        # attach existing policy directly
        # fullaccess
        # get access id and seccret access ky
        # region end point to ge the region
        # go to laravel doc for filesystem
        # install amazon s3 : composer requre leage'filesystem-aws-s3-v3
        # ( s3 url for s3 doc ) get accessing a bucket key
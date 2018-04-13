<?php
Route::get('/','AdminController@indexlang');

Route::get('/home/xyx/yug/{id}','AdminController@sidebar')->name('sidebar.topic');

Route::post('/admin','AdminController@login')->name('login.submit');
Route::get('/admin','AdminController@login');
Route::get('/admin/signup','AdminController@signup')->name('user.signup');

Route::get('/admin/hellolang','AdminController@hellolang')->name('hello.lang');
Route::post('/admin/hellolang','AdminController@helloinsert')->name('hello.lang.insert');

Route::get('/admin/langins','AdminController@langinsert')->name('lang.insert');
Route::get('/admin/topics','AdminController@topicinsert')->name('topic.insert');
Route::get('/admin/topics','AdminController@dropdownlang')->name('topic.insert');

Route::get('/admin/delete/{id}','AdminController@delete')->name('lang.delete');
Route::get('/admin/update/{id}','AdminController@update')->name('lang.update');
Route::post('/admin/update/{id}','AdminController@updatesubmit')->name('lang.update.submit');

Route::get('/admin/langview','AdminController@bindlang')->name('lang.bind');
Route::get('/admin/topicview','AdminController@bindtopics')->name('topics.bind');
Route::get('/admin/topicdelete/{id}','AdminController@deletetopics')->name('topics.delete');


Route::get('/admin/bindsubtopic','AdminController@bindsubtopic')->name('bind.subtopic');
Route::get('/admin/subdelete/{id}','AdminController@deletesubtopic')->name('subtopic.delete');
Route::post('/admin/subtopics','AdminController@subtopicinsert')->name('subtopic.insert');
Route::get('/admin/subtopics','AdminController@dropdowntopics')->name('subtopic.insert');
Route::get('/admin/subupadate','AdminController@dropdownuptopic')->name('update.subtopic');
Route::post('/admin/subupadate/{id}','AdminController@fillsubtopic')->name('update.subtopic.submit');

Route::post('/send/mail','MailController@sendmail')->name('sendmail.send');

Route::get('/create','HomeController@lang');
Route::get('/user','HomeController@user');
Route::get('/update/{id}','HomeController@update')->name('user.update');
Route::post('/update/{id}','HomeController@submitUpdate')->name('user.submit');
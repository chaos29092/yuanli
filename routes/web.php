<?php

Route::get('/', 'HomeController@index');
Route::get('about_us', 'HomeController@about_us');
Route::get('contact_us', 'HomeController@contact_us');

Route::get('articles/{slug}', 'HomeController@articles');
Route::get('article/{slug}', 'HomeController@article');

Route::get('product/{slug}', 'HomeController@product');
//Route::get('product_categories/{slug}', 'HomeController@product_categories');
Route::get('product_category/{slug}', 'HomeController@product_category');

Route::get('galleries', 'HomeController@galleries');
Route::get('gallery/{slug}', 'HomeController@gallery');

Route::get('sitemap.xml', 'HomeController@sitemap');

Route::post('contact_submit', 'MailController@submit');
Route::get('submit_ok', 'MailController@submit_ok');

Route::get('cache_clear','HomeController@cache_clear');
//Route::get('search_result','HomeController@search_result');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

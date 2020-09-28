<?php

// FRONT-END ROUTES
Route::get('/', 'FrontpageController@index')->name('home');
Route::get('/slider', 'FrontpageController@slider')->name('slider.index');

Route::get('/search', 'FrontpageController@search')->name('search');

Route::get('/batdongsan', 'PagesController@properties')->name('batdongsan');
Route::get('/batdongsan/{id}', 'PagesController@propertieshow')->name('property.show');
Route::post('/batdongsan/message', 'PagesController@messageAgent')->name('property.message');
Route::post('/batdongsan/comment/{id}', 'PagesController@propertyComments')->name('property.comment');
Route::post('/batdongsan/rating', 'PagesController@propertyRating')->name('property.rating');
Route::get('/batdongsan/project/{projectslug}', 'PagesController@propertyProjects')->name('property.project');

Route::get('/nhamoigioi', 'PagesController@agents')->name('nhamoigioi');
Route::get('/nhamoigioi/{id}', 'PagesController@agentshow')->name('agents.show');

Route::get('/bosuutap', 'PagesController@gallery')->name('bosuutap');

Route::get('/tintuc', 'PagesController@blog')->name('tintuc');
Route::get('/tintuc/{id}', 'PagesController@blogshow')->name('blog.show');
Route::post('/tintuc/comment/{id}', 'PagesController@blogComments')->name('blog.comment');

Route::get('/tintuc/categories/{slug}', 'PagesController@blogCategories')->name('blog.categories');
Route::get('/tintuc/tags/{slug}', 'PagesController@blogTags')->name('blog.tags');
Route::get('/tintuc/author/{username}', 'PagesController@blogAuthor')->name('blog.author');

Route::get('/lienhe', 'PagesController@contact')->name('lienhe');
Route::post('/lienhe', 'PagesController@messageContact')->name('contact.message');


Auth::routes();

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin'],'as'=>'admin.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tags','TagController');
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('features','FeatureController');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::resource('sliders','SliderController');
    Route::resource('services','ServiceController');
    Route::resource('testimonials','TestimonialController');

    Route::get('galleries/album','GalleryController@album')->name('album');
    Route::post('galleries/album/store','GalleryController@albumStore')->name('album.store');
    Route::get('galleries/{id}/gallery','GalleryController@albumGallery')->name('album.gallery');
    Route::post('galleries','GalleryController@Gallerystore')->name('galleries.store');

    Route::get('settings', 'DashboardController@settings')->name('settings');
    Route::post('settings', 'DashboardController@settingStore')->name('settings.store');

    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');

});

Route::group(['prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','agent'],'as'=>'agent.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

});

Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth','user'],'as'=>'user.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');

});

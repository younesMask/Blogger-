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

Route::get('/',[
   'uses' => 'FrontEndController@index',
   'as' => 'index'

]);
Route::get('/post/{slug}',[
   'uses' => 'FrontendController@singlePost',
   'as' => 'post.single'
]);
Route::get('/test', function() {
   return App\Profile::find(1)->User;
}); 

Route::get('Category/{id}', [
'uses' => 'FrontEndController@Category',
'as' => 'category.single'
]);
Route::get('tag/{id}',[
'uses' => 'FrontEndController@tag',
'as' => 'tag.single'
]);
Route::get('results', function(){
   $posts = \App\Post::where('title', 'like', '%' . request('query') .'%')->get();
   return view ('results')->with('posts', $posts)
   ->with('title', 'search results :'.request('query'))
   ->with('categories', \App\Category::take(5)->get())
   ->with('settings', \App\Setting::first())
   ->with('query', request('query'));

});
Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'auth'  ], function  () {

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/post/create',[
        'uses' => 'PostsController@create',
        'as' => 'post.create'
     ]);
    
     Route::post('/post/store',[
        'uses' => 'PostsController@store',
        'as' => 'post.store'
     ]);

     Route::get('/posts', [
      'uses' => 'PostsController@index',
      'as' => 'posts'
     ]);
     Route::get('/post/trashed', [
      'uses' => 'PostsController@trashed',
      'as' => 'post.trashed'
     ]);
     Route::get('/post/kill/{id}', [
      'uses' => 'PostsController@kill',
      'as' => 'post.kill'
     ]);

     Route::get('/post/restore/{id}', [
      'uses' => 'PostsController@restore',
      'as' => 'post.restore'
     ]);
     Route::get('/post/edit/{id}', [
      'uses' => 'PostsController@edit',
      'as' => 'post.edit'
     ]);
     Route::post('/post/update/{id}', [
      'uses' => 'PostsController@update',
      'as' => 'post.update'
     ]);

     Route::get('/post/delete/{id}', [
      'uses' => 'PostsController@destroy',
      'as' => 'post.delete'
     ]);
     Route::get('/category/create', [
        'uses' => 'CategoriesController@Create',
        'as' => 'category.create'
     ]);

     Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
     ]);
     Route::post('/category/store', [

        'uses' => 'CategoriesController@Store',
        'as' => 'category.store'

     ]);
     Route::get('/category/edit/{id}', [
      'uses' => 'CategoriesController@edit',
      'as' => 'category.edit'
     ]);
     Route::get('/category/delete/{id}', [
      'uses' => 'CategoriesController@destroy',
      'as' => 'category.delete'
     ]);
     Route::post('/category/update/{id}', [
      'uses' => 'CategoriesController@update',
      'as' => 'category.update'
     ]);
    

     //tags
     Route::get('tags', [
      'uses' =>'TagsController@index',
      'as' => 'tags'
     ]);
     Route::get('tag/edit/{id}', [
      'uses' =>'TagsController@edit',
      'as' => 'tag.edit'
     ]);
     Route::post('tag/update/{id}', [
      'uses' =>'TagsController@update',
      'as' => 'tag.update'
     ]);
     Route::get('tag/destroy/{id}', [
      'uses' =>'TagsController@destroy',
      'as' => 'tag.destroy'
     ]);
     Route::get('tag/create', [
      'uses' => 'TagsController@create',
      'as' => 'tag.create'
     ]);
     Route::post('tag/store', [
      'uses' => 'TagsController@store',
      'as' => 'tag.store'
     ]); 
      

     Route::get('users', [
      'uses' => 'UsersController@index',
      'as' => 'users'
     ]);
     Route::get('user/create', [
      'uses' => 'UsersController@create',
      'as' => 'user.create'
      
     ]);
     Route::post('user/store', [
      'uses' => 'UsersController@store',
      'as' => 'user.store'
     ]);

      Route::get('user/admin/{id}',[
         'uses' => 'UsersController@admin',
         'as' => 'user.admin'
      ]);
      Route::get('user/delete/{id}',[
         'uses' => 'UsersController@destroy',
         'as' => 'user.destroy'
      ]);
      Route::get('user/not-admin/{id}',[
         'uses' => 'UsersController@not_admin',
         'as' => 'user.notadmin'
      ]);
      Route::get('user/profile', [
         'uses' => 'ProfilesController@index',
         'as' => 'user.profile'
      ]);
      Route::post('user/profile/update',[
         'uses' => 'ProfilesController@update',
         'as' => 'user.profile.update'
      ]);

         Route::get('settings', [
               'uses' => 'SettingsController@index',
               'as' => 'settings'
         ]);

         Route::post('settings/update', [
            'uses' => 'SettingsController@update',
            'as' => 'settings.update'
      ]);


});





<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/user/{user}',function(User $user){
//   return $user;
// });
// Route::group(['middleware' => ['web']],function(){
//   //
// });

// Route::get('/', 'WelcomeController@index');
//
// Route::get('home', 'HomeController@index');
//
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
  // 基本理由
// Route::get('foo',function(){
//     return 'Hello World!';
// });

// Route::post('foo',function(){
//     return 'Hello Aspirant';
// });
// Route::put('foo/bar',function(){
//     //
// });
// Route::delete('foo/bar',function(){
//   //
// });
  // 多重动作注册路由
// Route::match(['get','post'], 'foo/bar',function(){
//     return 'Hello Aspire';
// });
// Route::any('foo',function(){
//     return 'Aspire World';
// });
// $url = url('foo');
  // 路有参数
// Route::get('user/{id}',function($id){
//     return 'User' .$id;
// });
// Route::get('posts/{post}/comments/{comment}',function($postId,$commentID){
//   //
// });
  // 可选的路由参数
// Route::get('user/{name?}',function($name= null){
//     return $name;
// });
// Route::get('user/{name?}',function($name='Aspirant'){
//     return $name;
// });
  // 限制参数
// Route::get('user{name}',function($name){
// })
// ->where('name','[A-Za-z]+');
// Route::get('user/{id}',function($id){
// })
// ->where('id','[0-9]+');
// Route::get('user/{id}/{name}',function($id,$name){
// })
// ->where(['id'=>'[0-9]+','name'=>'[a-z]+']);
  // 命名路由
// Route::get('user/profile',['as'=> 'profile',function(){
  //
// }]);

// Route::auth();

// Route::get('/home', 'HomeController@index');
// Route::get($uri,$callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri,$callback);
// Route::delete($uri,$callback);
// Route::options($uri,$callback);
// Route::match(['get','post'],'/',function() {
//   //
// });
// Route::any('foo',function() {
//   //
// });

// Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('/greeting',function(){
  // return view('greeting',['name' => 'Aspire']);
  return view('admin.profile',$data);
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

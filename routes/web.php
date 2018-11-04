 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|    These routes point to  a controller
|
*/
 use Illuminate\Support\Facades\Input;
 use App\User;

 Route::get('/', 'PagesController@getIndex');
 Route::get('about', 'PagesController@getAbout');
 Route::get('portfolio', 'PagesController@getPortfolio');
 Route::get('advertenties', 'PagesController@getAdvertenties');



Route::resource('posts','PostController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');




Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin', 'AdminController@show')->name('admin.dashboard');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/admin/userpage', 'UserPageController@index');



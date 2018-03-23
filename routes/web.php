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

Route::get('/', 'IndexController@index')->name('main');

Route::get('about_me', 'IndexController@about')->name('about');
Route::POST('about_me', 'IndexController@aboutme');


Route::get('vidguki', 'IndexController@stage')->name('stage');

Route::get('price', 'IndexController@price')->name('price');
Route::POST('price', 'IndexController@priceDW');

Route::get('certificate', 'IndexController@certificate')->name('certificate');

Route::get('blog', 'IndexController@blog')->name('blog');
Route::get('blog/{id}', 'IndexController@blogid')->name('blogID');

Route::get('feedback', 'IndexController@feedback')->name('feedback');

// //photos
Route::get('portfolio', 'IndexController@gallery')->name('portfolio');
Route::get('portfolio/{urls}', 'IndexController@photosesia')->name('photosesia');

//mail
Route::post('/', 'IndexController@send_mail')->name('main');






Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');



Route::group(['middleware'=> 'auth'], function (){
	// admin
// photo wedding
Route::resource('admin/wedding_one', 'WeddingOne');
Route::resource('admin/wedding_two', 'WeddingTwo');
Route::resource('admin/wedding_three', 'WeddingThree');
Route::resource('admin/wedding_four', 'WeddingFour');
Route::resource('admin/wedding_five', 'WeddingFive');
Route::resource('admin/wedding_six', 'WeddingSix');
Route::resource('admin/wedding_seven', 'WeddingSeven');
Route::resource('admin/wedding_eight', 'WeddingEight');

Route::resource('admin/wedding_nine', 'WeddingNine');
Route::resource('admin/wedding_ten', 'WeddingTen');
Route::resource('admin/wedding_eleven', 'WeddingEleven');
Route::resource('admin/wedding_twelve', 'WeddingTwelve');
Route::resource('admin/wedding_thirteen', 'WeddingThirteen');
Route::resource('admin/wedding_fourteen', 'WeddingFourteen');
Route::resource('admin/wedding_fifteen', 'WeddingFifteen');
Route::resource('admin/wedding_sixteen', 'WeddingSixteen');

 // photo ceremony
Route::resource('admin/ceremony_one', 'CeremonyOne');
Route::resource('admin/ceremony_two', 'CeremonyTwo');
Route::resource('admin/ceremony_three', 'CeremonyThree');
Route::resource('admin/ceremony_four', 'CeremonyFour');
Route::resource('admin/ceremony_five', 'CeremonyFive');
Route::resource('admin/ceremony_six', 'CeremonySix');
Route::resource('admin/ceremony_seven', 'CeremonySeven');
Route::resource('admin/ceremony_eight', 'CeremonyEight');

 // photo love story
Route::resource('admin/lovestory_one', 'LovestoryOne');
Route::resource('admin/lovestory_two', 'LovestoryTwo');
Route::resource('admin/lovestory_three', 'LovestoryThree');
Route::resource('admin/lovestory_four', 'LovestoryFour');
Route::resource('admin/lovestory_five', 'LovestoryFive');
Route::resource('admin/lovestory_six', 'LovestorySix');
Route::resource('admin/lovestory_seven', 'LovestorySeven');
Route::resource('admin/lovestory_eight', 'LovestoryEight');

// photo family
Route::resource('admin/family_one', 'FamilyOne');
Route::resource('admin/family_two', 'FamilyTwo');
Route::resource('admin/family_three', 'FamilyThree');
Route::resource('admin/family_four', 'FamilyFour');
Route::resource('admin/family_five', 'FamilyFive');
Route::resource('admin/family_six', 'FamilySix');
Route::resource('admin/family_seven', 'FamilySeven');
Route::resource('admin/family_eight', 'FamilyEight');

// photo individual
Route::resource('admin/individual_one', 'IndividualOne');
Route::resource('admin/individual_two', 'IndividualTwo');
Route::resource('admin/individual_three', 'IndividualThree');
Route::resource('admin/individual_four', 'IndividualFour');
Route::resource('admin/individual_five', 'IndividualFive');
Route::resource('admin/individual_six', 'IndividualSix');
Route::resource('admin/individual_seven', 'IndividualSeven');
Route::resource('admin/individual_eight', 'IndividualEight');




// Price
Route::resource('admin/price', 'IndexPrices');
// blog
Route::resource('admin/blog', 'IndexBlogs');
Route::resource('admin/blog_fotos', 'IndexBlogfotos');
//feedback
Route::resource('admin/feedback', 'IndexFeedback');
});
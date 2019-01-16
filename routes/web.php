<?php


use Illuminate\Http\Request;
use App\Models\Bets\Bet;

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


Route::get('/', 'MainController@main')->name('main');
Route::get('/sign', 'MainController@login')->name('sign');

//team
Route::get('/team/{id}', 'TeamController@getTeam')->name('getTeam');

//tourney
Route::get('/tourney/{id}', 'TourneyController@getTourney')->name('getTourney');



//matches
Route::get('/past', 'MatchesController@getPast')->name('getPast');
Route::match(['get', 'post'],'/past/search', 'MatchesController@getPastSearch')->name('getPastSearch');



Route::get('/upcoming', 'MatchesController@getUpcoming')->name('getUpcoming');
Route::match(['get', 'post'],'/upcoming/search', 'MatchesController@getUpcomingSearch')->name('getUpcomingSearch');

Route::get('/current', 'MatchesController@getCurrent')->name('getCurrent');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => 'auth'],   function () {
	//расписание матчей
	Route::get('/schedule', 'MainController@bets')->name('schedule');
	Route::get('/profile', 'User\ProfileController@profile')->name('profile');
	Route::get('/profiles/{id}', 'User\ProfileController@getChangeProfile')->name('getChangeProfile');
	Route::post('/profiles/{id}', 'User\ProfileController@postChangeProfile')->name('postChangeProfile');
	//admin
	Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function() {
		
		Route::get('/', 'Admin\AdminController@index');
		
		
//		Route::get('/users2', 'Admin\UsersController@index')->name('users');
//		Route::get('/user2', 'Admin\UsersController@addGetUser')->name('addGetUser');
//		Route::post('/user2', 'Admin\UsersController@addPostUser')->name('addPostUser');
//		Route::post('/getUsers', 'Admin\UsersController@getUsers')->name('getUsers');
//		Route::patch('/user/{id}', 'Admin\UsersController@edit')->name('getUser');
//		Route::delete('/user/{id}', 'Admin\UsersController@delete')->name('deleteUser');
		
		
		//users
		Route::get('/users', 'Admin\Users\UsersController@getUsers')->name('getUsers');
		Route::get('/user', 'Admin\Users\UsersController@getAddUser')->name('getAddUser');
		Route::post('/user', 'Admin\Users\UsersController@postAddUser')->name('postAddUser');
		// change user
		Route::get('/user/edit/{id}', 'Admin\Users\UsersController@getEditUser')->name('getEditUser');
		Route::post('/user/edit/{id}', 'Admin\Users\UsersController@postEditUser')->name('postEditUser');
		Route::delete('/user/delete/{id}', 'Admin\Users\UsersController@deleteUser')->name('deleteUser');
		
		
		//matches
		Route::get('/matches', 'Admin\Bets\MatchesController@getMatches')->name('getMatches');
		Route::get('/match', 'Admin\Bets\MatchesController@getAddMatch')->name('getAddMatch');
		Route::post('/match', 'Admin\Bets\MatchesController@postAddMatch')->name('postAddMatch');
		// change match
		Route::get('/match/edit/{id}', 'Admin\Bets\MatchesController@getEditMatch')->name('getEditMatch');
		Route::post('/match/edit/{id}', 'Admin\Bets\MatchesController@postEditMatch')->name('postEditMatch');
		Route::delete('/match/delete/{id}', 'Admin\Bets\MatchesController@deleteMatch')->name('deleteMatch');
		
		
		//past matches | прошедшие матчи
		Route::get('/past', 'Admin\Matches\MatchesController@getPast')->name('getPast');
		Route::match(['get', 'post'],'/pastBetween', 'Admin\Matches\MatchesController@getPastBetween')->name('getPastBetween');
		Route::match(['get', 'post'],'/pastTake', 'Admin\Matches\MatchesController@getPastTake')->name('getPastTake');
		//upcoming matches | предстоящие матчи
		Route::get('/upcoming', 'Admin\Matches\MatchesController@getUpcoming')->name('getUpcoming');
		Route::match(['get', 'post'],'/upcomingBetween', 'Admin\Matches\MatchesController@getUpcomingBetween')->name('getUpcomingBetween');
		Route::match(['get', 'post'],'/upcomingTake', 'Admin\Matches\MatchesController@getUpcomingTake')->name('getUpcomingTake');
		//current matches | текущие матчи
		Route::get('/current', 'Admin\Matches\MatchesController@getCurrent')->name('getCurrent');
		Route::match(['get', 'post'],'/currentBetween', 'Admin\Matches\MatchesController@getCurrentBetween')->name('getCurrentBetween');
		Route::match(['get', 'post'],'/currentTake', 'Admin\Matches\MatchesController@getCurrentTake')->name('getCurrentTake');
		//handbook | справочники
		Route::get('/handbook', 'Admin\Setting\HandbooksController@getHandbook')->name('getHandbook');
		//teams | команды
		Route::get('/teams', 'Admin\Bets\TeamsController@getTeam')->name('getTeam');
		
		Route::get('/team', 'Admin\Bets\TeamsController@addGetTeam')->name('addGetTeam');
		Route::post('/team', 'Admin\Bets\TeamsController@addPostTeam')->name('addPostTeam');
		
		Route::post('/team/edit/{id}', 'Admin\Bets\TeamsController@postEditTeam')->name('postEditTeam');
		Route::get('/team/edit/{id}', 'Admin\Bets\TeamsController@getEditTeam')->name('getEditTeam');
		Route::delete('/team/delete/{id}', 'Admin\Bets\TeamsController@deleteTeam')->name('deleteTeam');
		
		//tourney | турниры
		Route::get('/tourneys', 'Admin\Bets\TourneysController@getTourney')->name('getTourney');
		
		Route::get('/tourney', 'Admin\Bets\TourneysController@addGetTourney')->name('addGetTourney');
		Route::post('/tourney', 'Admin\Bets\TourneysController@addPostTourney')->name('addPostTourney');
		
		Route::post('/tourney/edit/{id}', 'Admin\Bets\TourneysController@postEditTourney')->name('postEditTourney');
		Route::get('/tourney/edit/{id}', 'Admin\Bets\TourneysController@getEditTourney')->name('getEditTourney');
		Route::delete('/tourney/delete/{id}', 'Admin\Bets\TourneysController@deleteTourney')->name('deleteTourney');
	
	});
});
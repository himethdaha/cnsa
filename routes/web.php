<?php
use App\Injurylog;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/it', function () {
    return view('welcome-it');
});

Route::get('/user/recruiter', function () {
    return view('welcome-recruiter');
});

Route::get('/user/manager', function () {
    return view('welcome-manager');
});

Route::get('/user/staff', function () {
    return view('welcome-staff');
});

Route::get('/itcrew/index', 'itcrew\IndexController@index');
Route::get('/recruiters/index', 'recruiters\IndexController@index');



Route::get('/register/create', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// Staff (CNSAStaff, Team Manager, Coach)
Route::resource('staff', 'StaffController');
Route::get('/staff/show', 'StaffController@show');
Route::get('/staff/create', 'StaffController@create');
Route::get('/staff/update', 'StaffController@update');
Route::resource('manager', 'TeamManagerController');
Route::get('/manager/show', 'TeamManagerController@show');
Route::get('/manager/create', 'TeamManagerController@create');
Route::get('/manager/update', 'TeamManagerController@update');
Route::get('/manager/history/create', 'TeamManagerHistoryController@create');
Route::get('/manager/history/update', 'TeamManagerHistoryController@update');

Route::resource('coach', 'CoachController');
Route::get('/coach/create', 'CoachController@create');
Route::get('/coach/update', 'CoachController@update');
Route::get('/coach/show', 'CoachController@show');
Route::get('/coach/history/create', 'CoachHistoryController@create');
Route::get('/coach/history/update', 'CoachHistoryController@update');

// Players
Route::resource('player', 'PlayersController');
Route::get('/player/show', 'PlayersController@show');
Route::get('/player/update', 'PlayersController@show');
Route::get('/player/{playerid}', 'PlayersController@update');
Route::post('/player/{playerid}', 'PlayersController@update');
Route::resource('playerhistory', 'PlayersHistoryController');
Route::get('/playerhistory/show', 'PlayersHistoryController@show');
Route::get('/playerhistory/update', 'PlayersHistoryController@show');
Route::get('/playerhistory/{playerhistoryid}', 'PlayersHistoryController@update');
Route::post('/playerhistory/{playerhistoryid}', 'PlayersHistoryController@update');
Route::get('/teamplayer/show', 'TeamShowController@show');


// Teams (Team, Home Team, Away Team)
Route::resource('teams', 'TeamsController');
Route::get('/teams/create', 'TeamsController@create');
Route::get('/teams/update', 'TeamsController@update');
Route::get('/teams/show', 'TeamsController@show');
Route::get('/teams/index', 'TeamsController@index');
// Route::get('/team/home/create', 'HomeTeamController@create');
// Route::get('/team/home/update', 'HomeTeamController@update');
// Route::get('/team/away/create', 'AwayTeamController@create');
// Route::get('/team/away/update', 'AwayTeamController@update');

// Game Statistics (Game Info, Game Player Stats, Player Stats)
Route::resource('gameinfo', 'GameInfoController');
Route::get('/gameinfo/update', 'GameInfoController@update');
Route::get('/gameinfo/show', 'GameInfoController@show');
Route::get('/gameplayerstats/create', 'GamePlayerStatsController@create');
Route::get('/gameplayerstats/update', 'GamePlayerStatsController@update');
Route::get('/playerstats/create', 'PlayerStatsController@create');
Route::get('/playerstats/update', 'PlayerStatsController@update');

// Logs (Incident Log, Injury Log)
Route::resource('incidentlog', 'IncidentLogController');
Route::get('/incidentlog/show', 'IncidentLogController@show');
Route::get('/incidentlog/{incidentlogid}', 'IncidentLogController@update');
Route::post('/incidentlog/{incidentlogid}', 'IncidentLogController@update');
Route::resource('injurylog', 'InjuryLogController');
Route::get('/injurylog/show', 'InjuryLogController@show');
Route::get('/injurylog/{injuryid}', 'InjuryLogController@update');
Route::post('/injurylog/{injuryid}', 'InjuryLogController@update');

// Locations (School, Stadium)
Route::resource('schools', 'SchoolsController');
Route::get('/schools/create', 'SchoolsController@create');
Route::get('/schools/update', 'SchoolsController@update');
Route::get('/schools/show', 'SchoolsController@show');
Route::resource('stadiums', 'StadiumsController');
Route::get('/stadiums/create', 'StadiumsController@create');
Route::get('/stadiums/update', 'StadiumsController@update');
Route::get('/stadiums/show', 'StadiumsController@show');

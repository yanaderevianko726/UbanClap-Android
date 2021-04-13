<?php

/*
|--------------------------------------------------------------------------
| Agent Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AgentController@dashboard')->name('index');
Route::get('/dashboard', 'AgentController@dashboard')->name('dashboard');

Route::resource('provider', 'Resource\ProviderAgentResource');

Route::group(['as' => 'provider.'], function () {
    Route::get('review/provider', 'AgentController@provider_review')->name('review');
    Route::get('provider/{id}/approve', 'Resource\ProviderAgentResource@approve')->name('approve');
    Route::get('provider/{id}/disapprove', 'Resource\ProviderAgentResource@disapprove')->name('disapprove');
    Route::get('provider/{id}/request', 'Resource\ProviderAgentResource@request')->name('request');
    Route::resource('provider/{provider}/document', 'Resource\ProviderAgentDocumentResource');
    Route::delete('provider/{provider}/service/{document}', 'Resource\ProviderAgentDocumentResource@service_destroy')->name('document.service');
});

Route::get('user/{id}/request', 'Resource\UserResource@request')->name('user.request');

Route::get('/statement', 'AgentController@statement')->name('ride.statement');
Route::get('/statement/provider', 'AgentController@statement_provider')->name('ride.statement.provider');

Route::get('map', 'AgentController@map_index')->name('map.index');
Route::get('map/ajax', 'AgentController@map_ajax')->name('map.ajax');

Route::get('profile', 'AgentController@profile')->name('profile');
Route::post('profile', 'AgentController@profile_update')->name('profile.update');

Route::get('/wallet', 'AgentController@wallet')->name('wallet');
Route::get('/transfer', 'AgentController@transfer')->name('transfer');
Route::post('/transfer/send', 'AgentController@requestamount')->name('requestamount');
Route::get('/transfer/cancel', 'AgentController@cancel')->name('cancel');

Route::get('password', 'AgentController@password')->name('password');
Route::post('password', 'AgentController@password_update')->name('password.update');

// Static Pages - Post updates to pages.update when adding new static pages.

Route::get('requests', 'Resource\TripResource@Agentindex')->name('requests.index');
Route::delete('requests/{id}', 'Resource\TripResource@Agentdestroy')->name('requests.destroy');
Route::get('requests/{id}', 'Resource\TripResource@Agentshow')->name('requests.show');
Route::get('scheduled', 'Resource\TripResource@Agentscheduled')->name('requests.scheduled');
Route::get('cards', 'AgentController@cards')->name('cards');
Route::post('card/store', 'Resource\AgentCardResource@store');
Route::post('card/set', 'Resource\AgentCardResource@set_default');
Route::delete('card/destroy', 'Resource\AgentCardResource@destroy');

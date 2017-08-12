<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('characters',[
    'uses' => 'CharacterController@fetchAllCharacters'
]

);
Route::get('character/{id}',[
    'uses' => 'CharacterController@fetchCharacter'
]

);

Route::post('character',[
        'uses' => 'CharacterController@addCharacter'
    ]

);
Route::delete('character/{id}',[
        'uses' => 'CharacterController@deleteCharacter'
    ]

);

Route::put('character/{id}',[
        'uses' => 'CharacterController@updateCharacter'
    ]

);



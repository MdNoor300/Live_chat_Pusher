<?php

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;



Route::post('send-message',function (Request $request){
    event(new MessageSent($request->username, $request->message));
    return ['success' => true];
});



Route::get('/chat', [ChatController::class, 'index']);



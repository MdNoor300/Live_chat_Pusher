<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ChatRequest;
use App\Http\Services\ChatService;
use App\Models\Chat;
use Pusher\Pusher;

class ChatController extends Controller
{

    public function index()
    {
        return view('chat');
    }
}

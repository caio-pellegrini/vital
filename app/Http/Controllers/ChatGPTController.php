<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatGPTController extends Controller
{
    public function chat(Request $request)
    {
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $request->input('message')]
            ]
        ]);

        $responseMessage = $result->choices[0]->message->content;

        return view('info', ['responseMessage' => $responseMessage]);
        
    }
}

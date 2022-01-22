<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageEventController extends Controller
{
    public function index()
    {
        info('Connected.');
        $callback = function () {
            ob_flush();
            flush();

            for ($i = 0; $i < 100; $i++) {
                $text = Str::random(3);
                echo "data: {$text}\n\n";

                ob_flush();
                flush();
                usleep(100000);
            }
        };
        $headers = [
            'Content-Type' => 'text/event-stream',
            'Cache-Control' => 'no-cache',
        ];
        return response()->stream($callback, 200, $headers);
    }
}

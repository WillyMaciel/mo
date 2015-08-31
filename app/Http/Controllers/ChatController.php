<?php

namespace App\Http\Controllers;

use App\User;
use App\Chat;
use App\Http\Controllers\Controller;
use App\Alerts\MessageBox;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{

    public function getIndex()
    {
        $msgs = Chat::orderBy('id', 'ASC')->get();

        session(['lmsg' => $msgs->last()]);

        return view('chat.index', compact('msgs'));
    }

    public function getStream()
    {

            $lmsg = session('lmsg');

            $msgs = Chat::where('id', '>', $lmsg->id)->get();

            header('Content-Type: text/event-stream');
            header('Cache-Control: no-cache');

            if(!$msgs->isEmpty())
            {
                session(['lmsg' => $msgs->last()]);
                echo  "data: {\n";
                foreach($msgs as $key => $msg)
                {                    
                    echo  "data: \"$key\": {\"name\": \"$msg->name\", \"msg\": \"$msg->message\", \"created_at\": \"$msg->created_at\"}\n";              
                }
                echo "data: }\n\n";

            }
            flush();
        
    }

    public function postMsg(Request $request)
    {
        Chat::create($request->input());
    }
   
}

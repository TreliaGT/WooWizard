<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $txt) {
            $message = strtolower($txt);
            if ($message == 'hi' || $message == 'hello' || $message == 'good morning' || $message == 'good afternoon') {
                $this->askName($botman);
            }elseif($message == 'help'){
                $this->help($botman);
            }
            else{
                $botman->reply("write 'hi' for testing...");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Nice to meet you '.$name . " , I'm Webby Webwizard. Here to help! : Type Help to Find Options ");
        });
    }
    public function help($botman){
        $botman->ask('Here are our Topics: How to Login, Soo Lonely ', function(Answer $answer) {
  
            $message = strtolower($answer->getText());
            if($message ==  'how to login' ){
                $this->say('My Friends, Will give you the keys and url of the development site to be able to manage your products');
            }else{
                $this->say("Oh no, Let's be Friends!");
            }
           
        });
    }

}

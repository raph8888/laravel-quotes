<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomepageController extends Controller {

    public static $quotes = [
        "\"Do what you love, and period.\" -raph",
        "\"Listen as much as one is able to <br> 
        to other people whose opinions you respect and look up to <br>
        but in the end it has to come from you.\" <br>-anna wintour",
        "\"It's not what they call you. It's what you answer to.\" <br>-kylie sonique love",
        "\"Go vegan.\" <br>-raph",
        "Plenitude can be found in the smallest of things.",
        "Wear sunscreen.",
        "The hour is darkest before the dawn.",
        "Per aspera ad astra.",
        "\"Take the red pill.\" <br>-morpheus",
        "\"What you are shouts so loudly in my ears <br> I cannot hear what you say.\" <br>-ralph waldo emerson",
        "\"Private victories precede public victories.\" <br>-stephen covey",
        "\"Remember the past, but don't live in it\" <br>-raph"
    ];

    public static function homepageData(){
        $quotes = self::$quotes;

        $date = Carbon::now();
        $date = $date->format('H:i');

        $data = [
            "date" => $date,
            "quote" => $quotes[array_rand($quotes)]
        ];
        return $data;
    }
}
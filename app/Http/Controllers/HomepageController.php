<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomepageController extends Controller {

    public static $quotes = [
        "\"Do what you love, and period.\" <br> -raph",
        "\"It's not an alcohol problem, <br> it's an alcohol preference.\" <br> -raph, about red wine",
        "\"Adoption over speculation.\" <br> -raph, about crypto",
        "\"#govegan\" <br> -raph, about food",
        "\"Listen as much as one is able to, to other people whose opinions you respect and look up to. But in the end it has to come from you.\" <br>-anna wintour",
        "\"It's not what they call you. <br> It's what you answer to.\" <br>-w.c. fields",
        "\"Plenitude can be found in the smallest of things.\"",
        "\"Wear sunscreen.\"",
        "\"The hour is darkest before the dawn.\"",
        "\"Per aspera ad astra.\"",
        "\"Take the red pill.\" <br>-morpheus",
        "\"What you are shouts so loudly in my ears <br> I cannot hear what you say.\" <br>-ralph waldo emerson",
        "\"Private victories precede public victories.\" <br>-stephen covey",
        "Remember the past, but don't live in it.",
        "\"Change is the only constant in life.\" <br> -heraclitus",
        "\"If you don't believe in yourself, <br> nobody else will.\" <br>-kobe bryant",
        "\"When a person can't find a deep sense of meaning, <br> they distract themselves with pleasure.\" <br>-viktor e. frankl"
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
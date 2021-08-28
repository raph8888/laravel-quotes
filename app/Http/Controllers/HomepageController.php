<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomepageController extends Controller {

    public static $quotes = [
        "Do what you love, and period.",
        "Listen to everyone - Trust the ones you admire - Follow your heart",
        "It's not what they call you. It's what you answer to.",
        "#govegan",
        "Plenitude can be found in the smallest of things.",
        "Wear sunscreen.",
        "The hour is darkest before the dawn.",
        "Per aspera ad astra.",
        "Am I a microservice?",
        "Take the red pill."
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
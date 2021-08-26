<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CryptoController extends Controller {

    public static function cryptoData(){

        $brokers = [];
        $fees = [];

        // Test database connection
        try {
            DB::connection()->getPdo();

            $brokers = DB::table('cryptofx')
                ->join('fees', 'cryptofx.id', '=', 'fees.broker_id')
                ->select('cryptofx.*', 'fees.*')
                ->orderBy('fees.fee_m', 'asc')
                ->get();

        } catch (\Exception $e) {
            error_log("Database error: " . $e->getMessage());
        }

        $data = [
            "brokers" => $brokers
        ];

        return $data;
    }
}
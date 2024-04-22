<?php namespace App\Utils;

use Illuminate\Support\Facades\DB;

class GeneralUtils {
    
    //Add functions here
    public static function getLastCreatedPolicyName() {
        $policy = DB::table('lt_policy')->latest()->first();
        return $policy ? $policy->name : '';
    }

    public static function countIncreaseCoverCases() {
        return DB::table('lt_case')->where('type', 'increase_cover')->count();
    }

    public static function countDecreaseCoverCases() {
        return DB::table('lt_case')->where('type', 'decrease_cover')->count();
    }

    public static function countCancelCoverCases() {
        return DB::table('lt_case')->where('type', 'cancel_cover')->count();
    }

}

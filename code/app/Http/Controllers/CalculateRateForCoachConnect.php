<?php
/**
 * @author Harlan :D
 */

namespace App\Http\Controllers;


class CalculateRateForCoachConnect extends \Illuminate\Routing\Controller {

    /**
     * calculate the rate for coach connect
     */
    public function calc () {
        // h is hours
        $h = request()->get('hours_worked_per_week');
        // r is rate
        $r = request()->get('hourly_rate_cents_aud');

        // tr is total rate
        $tr = $h * $r;

        if ($tr > 1000) { $tr -= (($tr - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        // f is fortnightly
        $f = $tr * 2;

        if ($f > 1000) { $f -= (($f - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }


        // m is monthly
        $m = $tr * 4;

        if ($m > 1000) { $m -= (($m - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        // y is monthly
        $y = $tr * 52;

        if ($y > 1000) { $y -= (($y - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        // okay time to do math :P
        return [
            'Weekly' => $tr,
            'Fortnightly' => $f,
            'Monthly' => $m,
            'Yearly' => $y,
        ];
    }
}

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

        // okay time to do math :P
        return [
            'Weekly' => $h * $r,
            'Fortnightly' => $h * $r * 2,
            'Monthly' => $h * $r * 4,
            'Yearly' => $h * $r * 52,
        ];
    }
}

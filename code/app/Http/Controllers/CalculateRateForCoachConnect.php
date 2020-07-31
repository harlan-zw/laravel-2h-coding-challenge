<?php
/**
 * @author Harlan :D
 */

namespace App\Http\Controllers;


use App\Facade\CalculationFacade;

class CalculateRateForCoachConnect extends \Illuminate\Routing\Controller {

    /**
     * calculate the rate for coach connect
     */
    public function calc () {
        // h is hours
        $h = request()->get('hours_worked_per_week');
        // r is rate
        $r = request()->get('hourly_rate_cents_aud');

        return CalculationFacade::calc($h, $r);
    }
}

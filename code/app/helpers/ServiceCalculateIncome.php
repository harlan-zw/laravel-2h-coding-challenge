<?php
namespace App\helpers;

final class ServiceCalculateIncome {

    public function calc($h, $r) {
        // tr is total rate
        $tr = $h * $r;

        $weekly = $tr;

        if ($weekly > 1000) { $weekly -= (($weekly - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        // f is fortnightly
        $f = $tr * 2;

        if ($f > 1000) { $f -= (($f - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }


        // m is monthly
        $m = $tr * 4;

        if ($m > 1000) { $m -= (($m - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        // y is monthly
        $y = $tr * 52;

        if ($y > 1000) { $y -= (($y - 1000) / 100 *config('Myconfig.Coach_Conenct.FeeSetting')); }

        return [
            'Week' => $weekly,
            'Fortnight' => $f,
            'Month' => $m,
            'Year' => $y,
        ];
    }
}

<?php
namespace App\Facade;

use App\helpers\ServiceCalculateIncome;
use Illuminate\Support\Facades\Facade;

class CalculationFacade extends Facade {

    public static function getFacadeAccessor() {
        return ServiceCalculateIncome::class;
    }
}

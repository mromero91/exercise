<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

// app()->call('App\Http\Controllers\HomeController@profit');
class HomeController extends Controller
{
  public function profit($date_init = '2021-09-15',
    $date_end = '2022-09-15',
    $cash = 1000,
    $rate_annual_percentage = 2
  )
  {
    $date_init = Carbon::create($date_init);
    $date_end = Carbon::create($date_end);
    $diff_days = $date_init->diffInDays($date_end);
    $diff_months = $diff_days/30;

    $profit_annual = $cash * ($rate_annual_percentage/100);
    $profit_per_monthly = $profit_annual/12;
    $profit_monthly = $profit_per_monthly * $diff_months;

    return response()->json([
      'profit_annual' => $profit_annual,
      'profit_per_monthly' => $profit_per_monthly,
    ]);
  }
}

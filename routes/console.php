<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use App\Services\DatesService;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('dates:today', function () {
   $this->info((new DatesService())->today());
});
Artisan::command('dates:tomorrow', function () {
    $this->info((new DatesService())->tomorrow());
});
Artisan::command('dates:yesterday', function () {
    $this->info((new DatesService())->yesterday());
});
Artisan::command('dates:this-year', function () {
    $this->info((new DatesService())->thisYear());
});
Artisan::command('dates:next-year', function () {
    $this->info((new DatesService())->nextYear());
});
Artisan::command('dates:last-year', function () {
    $this->info((new DatesService())->lastYear());
});
Artisan::command('dates:this-month', function () {
    $this->info((new DatesService())->thisMonth());
});
Artisan::command('dates:next-month', function () {
    $this->info((new DatesService())->nextMonth());
});
Artisan::command('dates:last-month', function () {
    $this->info((new DatesService())->lastMonth());
});


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

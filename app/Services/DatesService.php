<?php

namespace App\Services;

use Carbon\Carbon;

class DatesService {

    private $date;

    public function __construct()
    {
        $this->date = Carbon::now('UTC');
    }

    public function today()
    {
        return $this->date->toDateString();
    }

    public function tomorrow()
    {
        return $this->date->addDay()->toDateString();
    }

    public function yesterday()
    {
        return $this->date->subDay()->toDateString();
    }

    public function thisYear()
    {
        return $this->date->year;
    }

    public function nextYear()
    {
        return $this->date->addYear()->year;
    }

    public function lastYear()
    {
        return $this->date->subYear()->year;
    }

    public function thisMonth(?string $locale = 'en')
    {
        return $this->date->locale($locale)->monthName . " " . $this->date->year;
    }

    public function nextMonth(?string $locale = 'en')
    {
        return $this->date->addMonth()->locale($locale)->monthName . " " . $this->date->year;
    }

    public function lastMonth(?string $locale = 'en')
    {
        return $this->date->subMonth()->locale($locale)->monthName . " " . $this->date->year;
    }

    public function timestamp()
    {
        return $this->date->timestamp;
    }

}

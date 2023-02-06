<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\DatesService;

class DatesController extends Controller
{

    protected $datesService;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(DatesService $datesService)
    {
        $this->datesService = $datesService;
    }

    /**
     * Return today.
     *
     * @return \Illuminate\Http\Response
     */
    public function today()
    {
        $this->logRequest('today');
        $dt = $this->datesService->today();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return tomorrow.
     *
     * @return \Illuminate\Http\Response
     */
    public function tomorrow()
    {
        $this->logRequest('tomorrow');
        $dt = $this->datesService->tomorrow();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return yesterday.
     *
     * @return \Illuminate\Http\Response
     */
    public function yesterday()
    {
        $this->logRequest('yesterday');
        $dt = $this->datesService->yesterday();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return this year.
     *
     * @return \Illuminate\Http\Response
     */
    public function thisYear()
    {
        $this->logRequest('thisYear');
        $dt = $this->datesService->thisYear();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return next year.
     *
     * @return \Illuminate\Http\Response
     */
    public function nextYear()
    {
        $this->logRequest('nextYear');
        $dt = $this->datesService->nextYear();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return last year.
     *
     * @return \Illuminate\Http\Response
     */
    public function lastYear()
    {
        $this->logRequest('lastYear');
        $dt = $this->datesService->lastYear();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return this month.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function thisMonth(Request $request)
    {
        $this->logRequest('thisMonth');
        $dt = $this->datesService->thisMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return next month.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nextMonth(Request $request)
    {
        $this->logRequest('nextMonth');
        $dt = $this->datesService->nextMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return last month.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lastMonth(Request $request)
    {
        $this->logRequest('lastMonth');
        $dt = $this->datesService->lastMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Return timestamp.
     *
     * @return \Illuminate\Http\Response
     */
    public function timestamp()
    {
        $this->logRequest('timestamp');
        $dt = $this->datesService->timestamp();
        return response()->json(['result' => $dt], 200);
    }

    private function logRequest(string $requestType)
    {
        Log::build([
            'driver' => 'single',
            'path' => storage_path(sprintf('logs/_%s.log', $requestType)),
        ])->info('1');
    }
}

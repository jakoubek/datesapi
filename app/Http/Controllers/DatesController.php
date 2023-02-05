<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function today()
    {
        $dt = $this->datesService->today();
        return response()->json(['result' => $dt], 200);
    }

    public function tomorrow()
    {
        $dt = $this->datesService->tomorrow();
        return response()->json(['result' => $dt], 200);
    }

    public function yesterday()
    {
        $dt = $this->datesService->yesterday();
        return response()->json(['result' => $dt], 200);
    }

    public function thisYear()
    {
        $dt = $this->datesService->thisYear();
        return response()->json(['result' => $dt], 200);
    }

    public function nextYear()
    {
        $dt = $this->datesService->nextYear();
        return response()->json(['result' => $dt], 200);
    }

    public function lastYear()
    {
        $dt = $this->datesService->lastYear();
        return response()->json(['result' => $dt], 200);
    }

    public function thisMonth(Request $request)
    {
        $dt = $this->datesService->thisMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    public function nextMonth(Request $request)
    {
        $dt = $this->datesService->nextMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    public function lastMonth(Request $request)
    {
        $dt = $this->datesService->lastMonth($request->get("lang", "en"));
        return response()->json(['result' => $dt], 200);
    }

    public function timestamp()
    {
        $dt = $this->datesService->timestamp();
        return response()->json(['result' => $dt], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

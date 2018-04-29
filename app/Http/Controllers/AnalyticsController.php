<?php

namespace App\Http\Controllers;

use App\Services\AnalyticsService;

class AnalyticsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AnalyticsService $analyticsService)
    {
        $analytics = $analyticsService->getAnalytics();
        return view('analytics', ['analytics' => $analytics]);
    }
}

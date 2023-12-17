<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $todaySales = $this->getSalesForDate(now());
        $yesterdaySales = $this->getSalesForDate(now()->subDay());
        $thisMonthSales = $this->getSalesForMonth(now());
        $lastMonthSales = $this->getSalesForMonth(now()->subMonth());

        return view('dashboard.index', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }

    private function getSalesForDate($date)
    {
        return DB::table('products')->whereDate('created_at', $date)->sum('price');
    }

    private function getSalesForMonth($date)
    {
        return DB::table('products')->whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->sum('price');
    }
}


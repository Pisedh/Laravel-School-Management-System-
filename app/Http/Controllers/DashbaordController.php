<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashbaordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

  
    {
     $totalStudents = Student::count();
    $totalTeachers = Teacher::count();
    $totalCourses = Course::count();

    // Get payments grouped by month for current year
    $salaryData = DB::table('payments')
        ->select(
            DB::raw('MONTH(payment_date) as month'),
            DB::raw('SUM(amount) as total_salary')
        )
        ->whereYear('payment_date', date('Y'))
        ->groupBy(DB::raw('MONTH(payment_date)'))
        ->pluck('total_salary', 'month'); // key = month, value = total_salary

    // Prepare all 12 months
    $months = [];
    $totals = [];
    for ($i = 1; $i <= 12; $i++) {
        $months[] = date('F', mktime(0, 0, 0, $i, 1)); // Month name
        $totals[] = isset($salaryData[$i]) ? $salaryData[$i] : 0; // 0 if no data
    }

    return view('dashboard', compact(
        'totalStudents',
        'totalTeachers',
        'totalCourses',
        'months',
        'totals'
    ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class HappyNewYear extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dept = DB::table('departments')
        // ->get();
        // $emp = DB::table('employees')

        // ->take(10)

        // ->get(['emp_no', 'first_name']);
    //     $emp = DB::table('employees')

    //    ->select('emp_no', 'first_name')
    //    ->offset(10)
    //    ->limit(5)
    //    ->get();
    // $emp = DB::table('employees')

    //     ->where('emp_no','10009')

    //     ->get();
    // $emp = DB::table('employees')

    //     ->where('first_name', 'like', 'T%')

    //     ->whereRaw('YEAR(CURDATE()) - YEAR(birth_date) > 70')

    //     ->get();
    // $emp = DB::table('dept_emp')

    //     ->select('dept_no',

    // DB::raw('COUNT(*) as cnt'))

    //     ->whereYear('to_date','<>','9999')

    //     ->groupBy('dept_no')

    //     ->get();
    // $emp = DB::table('dept_emp')

    //     ->select('*',

    // DB::raw('YEAR(NOW()) - YEAR(to_date) as w'))

    //     ->whereYear('to_date','2000')

    //     ->limit(10)

    //     ->get()


    $result =DB::table('salaries')
    ->where('emp_no','10001')
    ->where('to_date','<>','9999-01-01')
    ->delete();


        return Inertia::render('Employee/happy',[
            'result' => $result

        ]);
        // Log::info($dept);
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

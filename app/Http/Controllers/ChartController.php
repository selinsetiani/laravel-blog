<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Post;


class ChartController extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // 
    public function chart(Request $request)
    {
        Log::debug("Chart is called");
        $days = $request->input('days', 7);

        Log::debug("Received days from url");

        $range = \Carbon\Carbon::now()->subDays($days);
        Log::debug("Getting range from now and days later");
        
        DB::enableQueryLog();
        $stats = Post::where('created_at', '>=', $range)
        ->groupBy('date')    
        ->orderBy('date', 'DESC')        
        ->get([
            DB::raw('Date(created_at) as date'),            
            DB::raw('COUNT(*) as Total'),
            DB::raw("SUM(CASE WHEN status = 'Draft' THEN 1 ELSE 0 END) as Draft"),
            DB::raw("SUM(CASE WHEN status = 'Publish' THEN 1 ELSE 0 END) as Publish"),
            // DB::raw("(SELECT COUNT(*) WHERE status = 'Draft') as Draft"),
            // DB::raw("(SELECT COUNT(*) WHERE status = 'Publish') as Publish")          
        ])
        ->toJSON();

        Log::debug(DB::getQueryLog());
        Log::debug("Doing database stuff");
        
        return $stats;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

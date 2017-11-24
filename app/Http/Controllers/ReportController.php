<?php

namespace App\Http\Controllers;
use Log;
use App\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Libraries\AfricasTalkingGateway;
use DataTables;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Report::create(request()->all());
                return redirect('/')->with('message', 'Thanks for your fight against human trafficking!');
        
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

    public function receive_trafficking_report(Request $request){

        $content = explode(',', $request->text);

        $param_count = count($content);
        Log::info($content);
        $report = new Report();
        $report->raw = $request;  
        $report->type = $content[0];
        Log::info($content[0]);
        if(strtolower($content[0]) == 'victim'){
            $report->victim_name = $content[1];
        }

        if(strtolower($content[0]) == 'witness'){
            $report->reporter_name = $content[1];
        }
        $report->location = $content[2];
        $report->country = $content[3];
        $report->hotel = $content[4];
        $report->contact = $request->from;
        $report->incident_date = $request->date;

        try {
            if($report->save()){
                return "ok";
            }
        } catch (\Exception $e) {
            Log::info($e);
        }        
        
        return "Ok";             
    }

    public function reports()
    {
        //
        return view('reports.reports');
    }

    public function getReports()
    {
        return \DataTables::of(Report::query())->make(true);
    }

    public function getVictimReports()
    {
        return \DataTables::of(Report::query()->where('type','Victim'))->make(true);
    }

    public function getWhistleReports()
    {
        return \DataTables::of(Report::query()->where('type','witness'))->make(true);
    }
}

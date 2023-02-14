<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\RequestTime;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function index() : View
    {

        //RequestTime::factory()->count(365)->create();

        $data = [
            'dataQ1' => $this->QuarterData(1),
            'dataQ2' => $this->QuarterData(2),
            'dataQ3' => $this->QuarterData(3),
            'dataQ4' => $this->QuarterData(4),
        ];

        return view('stats',$data);
    }

    private function QuarterData($quarter) : array{

        $quarterQuery = '';
        $oneYearQuery = "created_at BETWEEN DATE(DATETIME('now', '-1 year')) AND DATE('now', '-1 day')";

        switch ($quarter) {
            case 1:
                $quarterQuery = "0 + strftime('%m', created_at) between 1 and 3";
                break;
            
            case 2:
                $quarterQuery = "0 + strftime('%m', created_at) between 4 and 6";
                break;
            
            case 3:
                $quarterQuery = "0 + strftime('%m', created_at) between 7 and 9";
                break;
            
            case 4:
                $quarterQuery = "0 + strftime('%m', created_at) between 10 and 12";
                break;
            
            default:
                # code...
                break;
        }

        $dataEven = RequestTime::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw("AVG(time) AS time"),
        )
        ->where('route','/api/v1/even')
        ->whereRaw($quarterQuery)
        ->whereRaw($oneYearQuery)
        ->groupBy('date')->get();

        $dataPrime = RequestTime::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw("AVG(time) AS time"),
        )
        ->where('route','/api/v1/prime')
        ->whereRaw($quarterQuery)
        ->whereRaw($oneYearQuery)
        ->groupBy('date')->get();
        
        $de = $dataEven->pluck('date')->toArray();
        $dp = $dataPrime->pluck('date')->toArray();

        $dates = array_unique(array_merge($de,$dp), SORT_REGULAR);
        $data = array();
        foreach ($dates as $d) {
            $even = $dataEven->where('date',$d)->first();
            $prime = $dataPrime->where('date',$d)->first();

            $temp = array();        
            $temp['even'] = isset($even)? $even->time . ' ms' : 'N/A';
            $temp['prime'] = isset($prime)? $prime->time .  ' ms' : 'N/A';
            $temp['date'] = $d;

            $data[] = $temp;
        }

        return $data;
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class NumberController extends Controller
{
    public function prime(Request $request) : JsonResponse
    {
        $primeNumbers = array();
        $count = 0;
        $num = 2;
        while ( $count <= 1000 ) {
            $div_count = 0;
            for ( $i = 1; $i <= $num; $i++ ) {
                if ( ( $num % $i ) == 0 ) {
                    $div_count++;
                    }
                }
            if ( $div_count < 3 ) {
                $primeNumbers[] = $num;
                $count = $count + 1;
                }
            $num = $num + 1;
        }
        return response()->json($primeNumbers);
    }
    public function even(Request $request) : JsonResponse
    {
        $sumOfEven = array_sum(range(0,10000,2));
        return response()->json($sumOfEven);
    }
}
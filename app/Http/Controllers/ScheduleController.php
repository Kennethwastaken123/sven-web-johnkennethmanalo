<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScheduleAppointments;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $rules = $request->validate([
            'date'          => 'required|date',
            'frequency'     => 'required|in:recurring,one-time',
            'times'         => 'required|array|min:1',
            'days'          => 'required|array|min:1',
        ], [
            'times.required' => 'You must select at least one time.',
            'days.required' => 'You must select at least one day.',
        ]);
        try{

            $days = json_encode($request->input('times'));
            $times = json_encode($request->input('days'));

            ScheduleAppointments::create([
                'date_start'          => $request->date,
                'frequency'          => $request->frequency,
                'times'          => $times,
                'days'          => $days,
                'notes'          => $request->notes
            ]);

            return response()->json([
                'message' => 'Form submitted successfully!',
                'status' => 'success',
            ], 200);

        } catch ( \Exception $e ) {
            return response()->json([
                'error' => 'Something went wrong.',
                'message' => $e->getMessage(),
            ]);
        }


    }
}

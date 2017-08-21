<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;

class WeeksController extends Controller
{
    public function index()
    {
        return view('weeks.index', ['weeks' => Week::all()]);
    }

    public function show($id)
    {
        return view('weeks.show', ['week' => Week::find($id)]);
    }

    public function postForm(Request $request)
    {
        $week_id = $request->input('id');
        $week = Week::firstOrNew(['id' => $week_id]); 
        $week_data = $request->only('school', 'work', 'training', 'start_date', 'end_date');
        $week->fill($week_data);
        $week->save();
    }
    
    public function showForm()
    {
        return view(
             'weeks.form', [
                  'week' => Week::firstOrNew([
                        'id' => $request->input('id')
                   ])
             ]
        );
    }       
}

<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableData = [
            'heading' => [
                'date',
                'category',
                'amount'
            ],
            'data' => []
        ];
        Outcome::all()->each(function ($item) use (&$tableData) {
            $tableData['data'][$item->id] = [$item->date, $item->category, $item->amount];
        });
        return view('outcome.index', ['title' => 'My Outcomes', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outcome.create', ['title' => 'Create an Outcome', 'route' => route('outcomes.create')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Outcome;
        $income->category = $request->category;
        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->save();
        return redirect(route('outcomes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Outcome $outcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outcome $outcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outcome $outcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outcome $outcome)
    {
        //
    }
}

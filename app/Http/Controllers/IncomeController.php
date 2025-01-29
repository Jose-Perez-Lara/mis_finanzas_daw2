<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
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
        Income::all()->each(function ($item) use (&$tableData) {
            $tableData['data'][$item->id] = [$item->date, $item->category, $item->amount];
        });
        return view('income.index', ['title' => 'My incomes', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('income.create', ['title' => 'Create an Income', 'route' => route('incomes.create')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income;
        $income->category = $request->category;
        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->save();
        return redirect(route('incomes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
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

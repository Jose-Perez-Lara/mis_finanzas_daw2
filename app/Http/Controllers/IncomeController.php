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
            $tableData['data'][$item->id] = ['date' => $item->date, 'category' => $item->category, 'amount' => $item->amount, 'id' => $item->id];
        });
        return view('income.index', ['title' => 'My incomes', 'tableData' => $tableData, 'name' => 'incomes']);
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
        $request->validate([
            'category' => 'required',
            'date' => 'required|date',
            'amount' => 'required'
        ]);
        Income::create(['category' => $request->category, 'date' => $request->date, 'amount' => $request->amount]);
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
        return view('income.edit', ['title' => 'Update an Income', 'route' => route('incomes.update', ['id' => $id]), 'resource' => Income::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income = Income::find($id);
        $income->update(['category' => $request->category, 'date' => $request->date, 'amount' => $request->amount]);
        return redirect(route('incomes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Income::destroy($id);
        return redirect(route('incomes.index'));
    }
}

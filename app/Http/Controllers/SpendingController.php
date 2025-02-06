<?php

namespace App\Http\Controllers;

use App\Models\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
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
        Spending::all()->each(function ($item) use (&$tableData) {
            $tableData['data'][$item->id] = [$item->date, $item->category, $item->amount];
        });
        return view('spending.index', ['title' => 'My Spendings', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Spending.create', ['title' => 'Create an Spending', 'route' => route('spendings.create')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Spending;
        $income->category = $request->category;
        $income->date = $request->date;
        $income->amount = $request->amount;
        $income->save();
        return redirect(route('spendings.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Spending $Spending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spending $Spending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spending $Spending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spending $Spending)
    {
        //
    }
}

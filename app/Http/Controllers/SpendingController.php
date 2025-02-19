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
            $tableData['data'][$item->id] = ['date' => $item->date, 'category' => $item->category, 'amount' => $item->amount, 'id' => $item->id];
        });
        return view('spending.index', ['title' => 'My Spendings', 'tableData' => $tableData, 'name' => 'spendings']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spending.create', ['title' => 'Create an Spending', 'route' => route('spendings.store')]);
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
        Spending::create(['category' => $request->category, 'date' => $request->date, 'amount' => $request->amount]);
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
    public function edit(string $id)
    {
        return view('spending.edit', ['title' => 'Update an Spending', 'route' => route('spendings.update', ['id' => $id]), 'resource' => Spending::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spending = Spending::find($id);
        $spending->update(['category' => $request->category, 'date' => $request->date, 'amount' => $request->amount]);
        return redirect(route('spendings.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Spending::destroy($id);
        return redirect(route('spendings.index'));
    }
}

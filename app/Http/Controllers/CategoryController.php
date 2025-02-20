<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Income;

class CategoryController extends Controller
{
    public function index()
    {
        $tableData = [
            'heading' => [
                'name'
            ],
            'data' => []
        ];
        Category::all()->each(function ($item) use (&$tableData) {
            $tableData['data'][$item->id] = ['name' => $item->name, 'id' => $item->id];
        });
        return view('category.index', ['title' => 'Categories', 'tableData' => $tableData, 'name' => 'categories']);
    }

    public function show(string $id)
    {
        $tableData = [
            'heading' => [
                'date',
                'category',
                'amount'
            ],
            'data' => []
        ];
        $incomes = Category::find($id)->incomes;
        foreach ($incomes as $key => $item) {
            $tableData['data'][$key] = ['date' => $item->date, 'category' => $item->category->name, 'amount' => $item->amount];
        }
        return view('category.show', ['title' => 'Categoria: ' . Category::find($id)->name, 'tableData' => $tableData]);
    }
}

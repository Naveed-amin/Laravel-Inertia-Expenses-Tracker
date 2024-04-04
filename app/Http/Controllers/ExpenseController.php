<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $income = Expense::where('is_expense',0)->sum('balance');
        $expense = Expense::where('is_expense',1)->sum('balance');

        $expenses = Expense::orderBy('created_at', 'desc')->get();
        return Inertia::render('Index',[
            'expenses' => $expenses,
            'total_expense' => $income-$expense,
            'income' => $income,
            'expense' => $expense,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'balance' => 'required',
        ]);
        Expense::create($request->all());
        return to_route('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }

    public function getTotalExpense(){

    }
}

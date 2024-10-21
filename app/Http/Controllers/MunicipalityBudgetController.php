<?php
namespace App\Http\Controllers;

use App\Models\MunicipalityBudget;
use Illuminate\Http\Request;

class MunicipalityBudgetController extends Controller
{

    public static function index(){
        $budgets = MunicipalityBudget::orderBy('mb_year', 'DESC')->get();
        return view('budget-allocation.list', compact('budgets'));
    }

    public static function dashboard(){
        $budgets = MunicipalityBudget::orderBy('mb_year', 'DESC')->get();
        $budgets_chart = MunicipalityBudget::orderBy('mb_year', 'ASC')->get();
        return view('budget-allocation.index', compact('budgets', 'budgets_chart'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mb_year' => 'required|string|max:10',
            'mb_amount' => 'required|numeric',
            'mb_supporting_documents.*' => 'nullable|file|mimes:pdf,docx,jpeg,png|max:20480', // Adjust file size and types as needed
        ]);

        // Handle file uploads
        $filePaths = [];
        if ($request->hasFile('mb_supporting_documents')) {
            foreach ($request->file('mb_supporting_documents') as $file) {
                $path = $file->store('supporting_documents', 'public'); // Save files in storage/app/public/supporting_documents
                $filePaths[] = $path; // Collect file paths for storage
            }
        }

        // Create the Municipality Budget
        MunicipalityBudget::create([
            'mb_year' => $request->input('mb_year'),
            'mb_amount' => $request->input('mb_amount'),
            'mb_supporting_documents' => $filePaths,
        ]);

        return redirect()->back()->with('success', 'Municipality Budget added successfully.');
    }
}

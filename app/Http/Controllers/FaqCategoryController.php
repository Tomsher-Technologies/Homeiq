<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::all();
        return view('faq_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('faq_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:faq_categories,name']);
        FaqCategory::create(['name' => $request->name]);

        return redirect()->route('faq_categories.index')->with('success', 'Category added successfully.');
    }

    public function edit(FaqCategory $faqCategory)
    {
        return view('faq_categories.edit', compact('faqCategory'));
    }

    public function update(Request $request, FaqCategory $faqCategory)
    {
        $request->validate(['name' => 'required|unique:faq_categories,name,' . $faqCategory->id]);
        $faqCategory->update(['name' => $request->name]);

        return redirect()->route('faq_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(FaqCategory $faqCategory)
    {
        $faqCategory->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}

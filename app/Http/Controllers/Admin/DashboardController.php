<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    //Messages
    public function ContactMessages()
    {
        return view('admin.messages');
    }

    public function CreateCategory()
    {
        return view('admin.createcategory');
    }
    //Store Category
    public function StoreCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-',$request->category_name))
        ]);

        return redirect()->route('admin.allcategory')
        ->with('message', 'Category Added Succesfully');
    }

    //All categories
    public function AllCategory()
    {
        $categories = Category::latest()->get();
        return view('admin.allcategory', compact('categories'));
    }
    //Edit category
    public function EditCategory($id)
    {
        $category_info = Category::findOrFail($id);
        return view('admin.editcategory', compact('category_info'));
    }

    public function UpdateCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        $id = $request->category_id;

        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-',$request->category_name))
        ]);

        return redirect()->route('admin.allcategory')
        ->with('message', 'Category Updated Succesfully');
    }

    //Delete Category
    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.allcategory')
        ->with('message', 'Category Deleted Succesfully');
    }
    //Create Sub Category
    public function CreateSubCategory()
    {
        return view('admin.createsubcategory');
    }

    //all Sub Category
    public function AllSubCategory()
    {
        return view('admin.allsubcategory');
    }
    //All Brands
    public function AllBrands()
    {
        return view('admin.allbrands');
    }
    //Create Brands
    public function CreateBrands()
    {
        return view('admin.createbrands');
    }
}

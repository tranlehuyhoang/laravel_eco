<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $path = 'uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status ? '1' : '0';
        $category->save();


        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }
    public function getAllCategories()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }
    public function edit(Category $category)
    {

        return view('admin.category.edit', compact('category'));
    }
    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validate($request->rules());
        $category = Category::findOrFail($category);

        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status ? '1' : '0';
        $category->save();


        return redirect('admin/category')->with('message', 'Update Category Successfully');
    }
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Thực hiện các xử lý khác liên quan đến xóa category (nếu cần)

        $category->delete();

        return redirect('admin/category')->with('message', 'Category Deleted Successfully');
    }
}

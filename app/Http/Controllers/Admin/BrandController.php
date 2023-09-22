<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('admin.brand.index', compact('brands'));
    }
    public function store(BrandFormRequest  $request)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());

        $brand = new Brand();
        $brand->name = $validatedData['name'];
        $brand->slug = $validatedData['slug'];

        $brand->status = $request->status ? '1' : '0';
        $brand->save();


        return redirect('admin/brand')->with('message', 'brand Added Successfully');
    }
    public function destroy(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        // Thực hiện các xử lý khác liên quan đến xóa category (nếu cần)

        $brand->delete();

        return redirect('admin/brand')->with('message', 'brand Deleted Successfully');
    }
    public function update(BrandFormRequest $request, $brand)
    {
        $brand = Brand::findOrFail($brand);
        $validatedData = $request->validate($request->rules());

        $validatedData = $request->validate($request->rules());


        $brand->name = $validatedData['name'];
        $brand->slug = $validatedData['slug'];

        $brand->status = $request->status ? '1' : '0';
        $brand->save();


        return redirect('admin/brand')->with('message', 'brand Added Successfully');
    }
}

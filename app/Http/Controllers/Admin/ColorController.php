<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', compact('colors'));
    }
    public function create()
    {
        return view('admin.color.create');
    }
    public function store(ColorFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());
        $color = new Color();
        $color->name = $validatedData['name'];
        $color->code = $validatedData['code'];

        $color->status = $request->status ? '1' : '0';
        $color->save();
        return redirect('admin/color')->with('message', 'Color Added Successfully');
    }
    public function edit(Color $color)
    {

        return view('admin.color.edit', compact('color'));
    }
    public function update(ColorFormRequest $request, $color)
    {
        $validatedData = $request->validate($request->rules());
        $color = Color::findOrFail($color);

        $color->name = $validatedData['name'];
        $color->code = $validatedData['code'];
        $color->status = $request->status ? '1' : '0';
        $color->save();


        return redirect('admin/color')->with('message', 'Update Color Successfully');
    }
    public function destroy(Request $request, $id)
    {
        $color = Color::findOrFail($id);

        // Thực hiện các xử lý khác liên quan đến xóa category (nếu cần)

        $color->delete();

        return redirect('admin/color')->with('message', 'Color Deleted Successfully');
    }
}

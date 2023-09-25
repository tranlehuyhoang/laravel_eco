<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {

        return view('admin.slider.create');
    }
    public function edit(Slider $slider)
    {

        return view('admin.slider.edit', compact('slider'));
    }
    public function store(SliderFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] = 'uploads/slider/' . $filename;
        }
        $validatedData['status'] = $request->status == true ? '1' : '0';
        Slider::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],
        ]);

        return redirect('admin/slider')->with('message', 'Slider Added Successfully');
    }
    public function update(SliderFormRequest $request, Slider $slider)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());
        $validatedData['status'] = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = $slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] = 'uploads/slider/' . $filename;
            Slider::where('id', $slider->id)->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => $validatedData['image'],
                'status' => $validatedData['status'],
            ]);
        } else {
            Slider::where('id', $slider->id)->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'status' => $validatedData['status'],
            ]);
        }


        return redirect('admin/slider')->with('message', 'Slider Updated Successfully');
    }
    public function destroy(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        // Thực hiện các xử lý khác liên quan đến xóa category (nếu cần)

        $slider->delete();

        return redirect('admin/slider')->with('message', 'Slider Deleted Successfully');
    }
}

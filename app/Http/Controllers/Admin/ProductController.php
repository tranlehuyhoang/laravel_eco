<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Color;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function edit(Product $product)
    {


        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'brands', 'categories'));
    }
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status', '0')->get();
        return view('admin.product.create', compact('categories', 'brands', 'colors'));
    }
    public function store(ProductFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate($request->rules());
        $category = Category::findOrFail($validatedData['category_id']);
        $product =  $category->product()->create([
            'category_id' => $validatedData['category_id'],
            'slug' => Str::slug($validatedData['slug']),
            'name' => $validatedData['name'],
            'brand' => $validatedData['brand'],
            'small_description' => $validatedData['small_description'],
            'description' => $validatedData['description'],
            'original_price' => $validatedData['original_price'],
            'selling_price' => $validatedData['selling_price'],
            'quantity' => $validatedData['quantity'],
            'trending' => $request->trending ? '1' : '0',
            'status' => $request->status ? '1' : '0',

            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/product/';
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . $filename;
                $product->productImage()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
            if ($request->colors) {
                foreach ($request->colors as $key => $color) {
                    $product->productColor()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $request->colorquantity[$key] ?? '0',
                    ]);
                }
            }
        }
        return redirect('admin/product')->with('message', 'Product Added Successfully');
    }
    public function update(ProductFormRequest $request, int $product_id)
    {
        $validatedData = $request->validate($request->rules());
        $product = Category::findOrFail($validatedData['category_id'])->product()->where('id', $product_id)->first();


        if ($product) {
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'slug' => $validatedData['slug'],
                'brand' => $validatedData['brand'],
                'small_description' => $validatedData['small_description'],
                'description' => $validatedData['description'],
                'original_price' => $validatedData['original_price'],
                'selling_price' => $validatedData['selling_price'],
                'quantity' => $validatedData['quantity'],

                'trending' => $request->trending ? '1' : '0',
                'status' => $request->status ? '1' : '0',

                'meta_title' => $validatedData['meta_title'],
                'meta_keyword' => $validatedData['meta_keyword'],
                'meta_description' => $validatedData['meta_description'],
            ]);
            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/product/';
                $i = 1;
                foreach ($request->file('image') as $imageFile) {
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time() . $i++ . '.' . $extension;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath . $filename;
                    $product->productImage()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,
                    ]);
                }
            }
        }

        return redirect('admin/product')->with('message', 'Update Product Successfully');
    }
    public function destroyImg(int $product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);
        if (File::exists($productImage->image)) {
            File::delete($productImage->image);
            $productImage->delete();
            return redirect()->back()->with('message', 'Update Product Successfully');
        }
        return redirect()->back()->with('message', 'Update Product Successfully');
    }
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->productImage) {
            foreach ($product->productImage as $image) {
                $image = ProductImage::findOrFail($image->id);
                if (File::exists($image->image)) {
                    File::delete($image->image);
                }
                $image->delete();
            }
        }
        $product->delete();

        return redirect('admin/product')->with('message', 'Product Deleted Successfully');
    }
}

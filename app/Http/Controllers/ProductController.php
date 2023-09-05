<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        //產品列表
        return view('product.cartlist', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //新增資料頁
        return view('product.addcartlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //驗證的資料是否符合規範

        //儲存新增的資料頁
        //查看請求的資料(form表單裡的input)

        $path = Storage::putFile('public/upload', $request->file('image'));



        Product::create([
            'name' => $request->name,
            'img_path' => str_replace('public', 'storage', $path),
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,
        ]);

        return redirect(route('product.index'));
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //顯示頁面
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //去找目標產品進行顯示
        $product = Product::find($id);
        //產品編輯頁面
        return view('product.editcartlist', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //產品資料更新功能
        dd($request->all());
        // $request->
    }

    /**
     * Remove the specified resource from storage.  
     */
    public function destroy(string $id)
    {
        //刪除資料功能
        // $type = Product::find($id);
        // foreach($type->product ?? [id])
    }
}

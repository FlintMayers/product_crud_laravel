<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Product;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriberRequest $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->surname = $request->surname;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->subscription = $request->subscription;

        if($file = $request->file('avatar')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('avatar', $name);
            $product->avatar = $name;
        }

        $product->save();
        return redirect()->route('product.index')->with('success', 'Subscriber registered successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriberRequest $request, $id)
    {
        //
        $product = Product::find($id);
        $product->name = $request->name;
        $product->surname = $request->surname;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->subscription = $request->subscription;

        if($file = $request->file('avatar')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('avatar', $name);
            $product->avatar = $name;
        }

        $product->save();
        return redirect()->route('product.index')->with('success', 'Subscriber data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        $product->delete();
        echo 'success';
        die();
        return redirect()->route('product.index')->with('success', 'Subscriber deleted successfully!');
    }
}

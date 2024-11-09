<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function product(Request $request){
        /*$query = Product::get();*/
        $query = Product::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')->paginate(2);
        }

        $products = $query->paginate(3);
        $search = $request->search ?? '';

        return view('pages.index', ['product' => $products, 'search' => $search]);
        
    }
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $request->validate([
            'product_id' => 'required|unique:products',
            'name' => "required|min:3|max:100",
            'description' => 'required|min:3|max:300',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
        Product::create($request->all());
        return redirect()->route('index')->with('success', 'Product created successfully.');
    }

    public function edit($id){
        $data = Product::where('id',$id)->first();
        return view('pages.edit',compact('data'));
    }
    public function update(Request $request, $id) {
        // Validation
        $request->validate([
            'product_id' => 'required|unique:products,product_id,' . $id,
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
    
        // Update product
        Product::where('id', $id)->update([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock')
        ]);
    
        return redirect()->route('index')->with('success', 'Product updated successfully.');
    }

    public function delete(Request $request){
        $id = $request->id;
        Product::where('id',$id)->delete();
        return redirect()->route('index');
    }
    
}

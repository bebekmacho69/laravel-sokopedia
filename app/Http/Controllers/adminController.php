<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\categories;
use App\products;
use Redirect,Response;

class adminController extends Controller
{
    public function admin() {
        return view ('home');
    }

    public function listCategory() {
        $thisCategory = categories::paginate(5);
        return view ('admin.listCategory', [
            'categories' => $thisCategory
        ]);
    }

    public function insertCategory(Request $request) {
        $categories = new categories;
        $categories->categoryName = $request->categoryName;
        $categories->save();

        return redirect('listCategory');
    }

    public function editCategory($id)
	{
        $category = categories::where('categoryID', $id)->get();
        return view ('admin.editCategory', ['categories' => $category]);
    }
    
    public function updateCategory(Request $request) {
        $category = categories::where('categoryID', $request->categoryID)->update([
            'categoryName' => $request->categoryName
        ]);
        return redirect('listCategory');
    }

    public function deleteCategory($id) {
        $category = categories::where('categoryID', $id)->delete();
        return redirect('listCategory');
    }

    public function listProducts() {
        $thisProducts = products::join('categories','products.categoryID','=','categories.categoryID')
            ->select(
                'products.productID',
                'products.productName',
                'products.productDescription',
                'products.productPrice',
                'categories.categoryName',
                'products.productStock',
                'products.productImage' )
            ->paginate(5);
        $categories = categories::all();
        return view ('admin.listProducts', [
            'products' => $thisProducts,
            'categories' => $categories
        ]);
    }

    public function insertProduct(Request $request) {
        $product = new products;
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->productDescription = $request->productDescription;
        $product->productImage = $request->productImage;
        $product->productStock = $request->productStock;
        $product->categoryID = $request->productCategoryID;
        $product->save();
        return redirect('listProducts');
    }

    public function editProduct($id) {
        $product = products::where('productID', $id)->get();
        return view('admin.editProduct', [
            'products' => $product
        ]);
    }
    
    public function deleteProduct($id) {
        $product = products::where('productID', $id)->delete();
        return redirect('listProducts');
    }

    public function updateProduct(Request $request) {
        $product = products::where('productID', $request->productID)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productStock' => $request->productStock
        ]);
        return redirect('listProducts');
    }
}

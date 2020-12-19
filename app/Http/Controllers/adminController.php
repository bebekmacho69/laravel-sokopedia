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
        $searchType = 'categories';
        return view ('admin.listCategory', [
            'categories' => $thisCategory,
            'searchType' => $searchType
        ]);
    }

    public function searchCategory(Request $request) {
        $searchCategory = categories::where([
            ['categoryName', '!=', 'null'],
            [function ($table) use ($request) {
                if (($term = $request->inputSearch)) {
                    $table->orwhere('categoryName','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->paginate(6);
        $searchType = 'categories';
        return view ('admin.search_listCategory', [
            'categories' => $searchCategory,
            'searchType' => $searchType
        ]);
    }

    public function insertCategory(Request $request) {
        $validated = $request->validate([
            'categoryName' => 'required|string|unique:categories'
        ]);
        $categories = new categories;
        $categories->categoryName = $request->categoryName;
        $categories->save();

        return redirect('listCategory');
    }

    public function editCategory($id)
	{
        $searchType = 'none';
        $category = categories::where('categoryID', $id)->get();
        return view ('admin.editCategory', [
            'categories' => $category,
            'searchType' => $searchType
            ]);
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
        $searchType = 'products';
        $categories = categories::all();
        return view ('admin.listProducts', [
            'products' => $thisProducts,
            'categories' => $categories,
            'searchType' => $searchType
        ]);
    }

    public function listProducts_byCategory(Request $request) {
        $thisProducts = products::join('categories','products.categoryID','=','categories.categoryID')
        ->select(
            'products.productID',
            'products.productName',
            'products.productDescription',
            'products.productPrice',
            'categories.categoryName',
            'products.productStock',
            'products.productImage' )
        ->where('categories.categoryName',$request->viewby_categories)
        ->paginate(5);
        $searchType = 'products';
        $categories = categories::all();
        return view ('admin.listProducts', [
            'products' => $thisProducts,
            'categories' => $categories,
            'searchType' => $searchType
        ]);
    }

    public function searchProduct(Request $request) {
        $searchProducts = products::where([
            ['productName', '!=', 'null'],
            [function ($table) use ($request) {
                if (($term = $request->inputSearch)) {
                    $table->orwhere('productName','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->paginate(6);
        $searchType = 'products';
        $categories = categories::all();
        return view ('admin.search_listProducts', [
            'products' => $searchProducts,
            'searchType' => $searchType
        ]);
    }

    public function insertProduct(Request $request) {
        $validated = $request->validate([
            'productName' => 'required|string|unique:products',
            'productPrice' => 'integer|required|digits_between:0,500000000',
            'productImage' => 'file|required|image|mimes:jpeg,png,jpg|max:5120',
            'productStock' => 'integer|required|digits_between:1,1000',
            'productCategoryID' => 'required|not_in:0'
        ]);

        $img = $request->file('productImage');
        $img->move('assets/img',$img->getClientOriginalName());

        $product = new products;
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->productDescription = $request->productDescription;
        $product->productImage = $img->getClientOriginalName();
        $product->productStock = $request->productStock;
        $product->categoryID = $request->productCategoryID;
        $product->save();
        return redirect('listProducts');
    }

    public function editProduct($id) {
        $categories = categories::all();
        $searchType = 'none';
        $product = products::where('productID', $id)->get();

        $selectedProduct = products::where('productID', $id)->first();
        $selectedCategory = categories::where('categoryID',$selectedProduct->categoryID)->first();

        return view('admin.editProduct', [
            'products' => $product,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
            'searchType' => $searchType
        ]);
    }
    
    public function deleteProduct($id) {
        $product = products::where('productID', $id)->delete();
        return redirect('listProducts');
    }

    public function updateProduct(Request $request) {
        $validated = $request->validate([
            'productName' => 'required|string',
            'productPrice' => 'integer|required|digits_between:0,500000000',
            // 'productDescription' => '',
            'productImage' => 'required',
            'productStock' => 'integer|required|digits_between:1,1000',
            'productCategoryID' => 'required|not_in:0'
        ]);
        $product = products::where('productID', $request->productID)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productStock' => $request->productStock,
            'categoryID' => $request->productCategoryID
        ]);
        return redirect('listProducts');
    }

    public function messages()
    {
        return [
            // admin:insertProduct
            'productName.required' => 'A product name is required!',
            'productName.string' => 'Product name must be a string!',
            'productPrice.required' => 'Price cannot be empty!',
            'productPrice.digits_between:0,500000000' => 'Price must between 0 and 500.000.000',
            'productImage.required' => 'Image link must be filled!',
            'productStock.required' => 'Stock must be filled!',
            'productStock.digits_between:1,1000' => 'Stock must between 1 and 1000',
            'productCategoryID.required' => 'Category must be selected!',

            // admin:updateProduct
            'productName.required' => 'A product name is required!',
            'productName.unique' => 'A product name must be unique!',
            'productName.string' => 'Product name must be a string!',
            'productPrice.required' => 'Price cannot be empty!',
            'productPrice.digits_between:0,500000000' => 'Price must between 0 and 500.000.000',
            'productImage.required' => 'Image link must be filled!',
            'productStock.required' => 'Stock must be filled!',
            'productStock.digits_between:1,1000' => 'Stock must between 1 and 1000',
            'productCategoryID.required' => 'Category must be selected!', // needs workaround 

            // admin:insertCategory
            'categoryName.unique' => 'Category name must be unique',
            'categoryName.required' => 'Category name is required',
            'categoryName.string' => 'Category name must be a string'
        ];
    }
}

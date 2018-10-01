<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id)
    {
    	$product = Product::find($id);
    	$images = $product->images;
    	return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store(Request $request, $id )
    {
    	//guardar la imagen en nuestro proyecto
    	$file = $request->file('photo');
    	$path = public_path() . '/images/products/';
    	$fileName = uniqid() . $file->getClientOriginalName();
    	$moved = $file->move($path, $fileName);
    	
        //crear un registro en la base de datos, en la table produc_image
        if($moved){
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            //$productImage->featured = ;
            $productImage->product_id = $id;
            $productImage->save();  //INSERT
        }
        
    	return back();
    }

    public function destroy(Request $request, $id)
    {
    	//Eliminar el archivo
        $productImage = ProductImage::find($request->image_id);
        if(substr($productImage->image, 0, 4) === "http"){
            $delete = true;
        }else{
            $fullPath = public_path() . '/images/products/' . $image; 
            $delete = File::delete($fullPath);
        }

        //Eliminar el registro de la bd
        if($delete){
            $productImage->delete();
        }
    }
}
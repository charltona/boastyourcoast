<?php

namespace App\Http\Controllers;

use App\Category;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class StoreController extends Controller 
{

  /**
   * Display a listing of the resource.
   * URL: /stores
   *
   * @return Response
   */
  public function index()
  {
    $stores = Store::orderBy('id')->get();

    return view('stores.listing', [
        'stores' => $stores
    ]);

  }

  /**
   * Show the form for creating a new resource.
   *
   * URL: /store/create
   *
   * @return Response
   */
  public function create()
  {
      $categories = Category::all();

      return view('stores.add',[
          'categories' => $categories
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $validator = Validator::make($request->all(), [

          'name' => 'required|max:225',
          'description' => 'required',
          'category' => 'required|max:225',
          'address' => 'required|max:225'
      ]);

      if ($validator->fails()) {
          return redirect('/store/create')
              ->withInput()
              ->withErrors($validator);
      }

      $store = new Store;

      $store->name = $request->name;
      $store->description = $request->description;
      $store->address = $request->address;
      $store->website = $request->website;
      $store->category = $request->category;
      $store->status = $request->status;
      $store->owner_id = $request->owner_id;
      $store->featured = isset($request->featured) ? $request->featured : '0';

      if ($request->file('image')) {
          $file = $request->file('image');
          $store_image_name = $file->store('public');
          $store->image = trim($store_image_name, "public/");
      }
      else {
          $store->image = '';
      }

      $store->save();

      return redirect('/store');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}


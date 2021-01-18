<?php

namespace App\Http\Controllers;

use App\adminController;
use Illuminate\Http\Request;

class AdminControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'product_name' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "name" => $request->get('name'),
                "file_path" => $request->file->hashName()
            ]);
            $product->save(); // Finally, save the record.
        }

        return view('products.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function show(adminController $adminController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function edit(adminController $adminController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminController $adminController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminController $adminController)
    {
        //
    }
}

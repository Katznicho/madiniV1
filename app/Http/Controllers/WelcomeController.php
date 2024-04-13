<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $products = [
        //     (object)[
        //         'name' => 'Product 1',
        //         'price' => 10000,
        //         'image' => 'https://via.placeholder.com/150',
        //         'description' => 'This is a product description',
        //     ],
        //     (object)[
        //         'name' => 'Product 2',
        //         'price' => 12000,
        //         'image' => 'https://via.placeholder.com/150',
        //         'description' => 'This is a product description',
        //     ],
        //     (object)[
        //         'name' => 'Product 3',
        //         'price' => 14000,
        //         'image' => 'https://via.placeholder.com/150',
        //         'description' => 'This is a product description',
        //     ],
        //     (object)[
        //         'name' => 'Product 4',
        //         'price' => 13000,
        //         'image' => 'https://via.placeholder.com/150',
        //         'description' => 'This is a product description',
        //     ],
        //     (object)[
        //         'name' => 'Product 5',
        //         'price' => 13000,
        //         'image' => 'https://via.placeholder.com/150',
        //         'description' => 'This is a product description',
            
        //     ]
        // ];


        $valueProducts = [
            [
                'name' => 'Value Added 1',
                'price' => 10000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'This is a product description',
            ],
            [
                'name' => 'Value Added 2',
                'price' => 12000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'This is a product description',
            ],
            [
                'name' => 'Value Added 3',
                'price' => 14000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'This is a product description',
            ],
            [
                'name' => 'Value Added 4',
                'price' => 13000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'This is a product description',
            ],
        ];
        


        $products = Product::all();

        // dd($products);

        return view('welcome', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

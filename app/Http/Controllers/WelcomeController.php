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

        $products = [
            (object)[
                'name' => 'Lake Sand',
                'price' => 'UGX 120,000',
                'image' => 'img/lake sand.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Nyanja Sand',
                'price' => 'UGX 150,000',
                'image' => 'img/Plaster Sand.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Lwera Sand',
                'price' => 'UGX 150,000',
                'image' => 'img/Lwera Sand.png',
                'description' => 'This is a product description',
            ],
            // (object)[
            //     'name' => 'Sand',
            //     'price' => 'UGX 120,000',
            //     'image' => 'img/download.jpeg',
            //     'description' => 'This is a product description',
            // ],
            // (object)[
            //     'name' => 'Sand',
            //     'price' => 'UGX 120,000',
            //     'image' => 'img/download.jpeg',
            //     'description' => 'This is a product description',
            
            // ]
        ];


        $valueAddedProducts = [
            (object)[
                'name' => 'Pavers',
                'price' => 'UGX 1,200',
                'image' => 'img/single paver.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Hexa Pavers',
                'price' => 'UGX 1,500',
                'image' => 'img/3way paver.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Square Pavers',
                'price' => 'UGX 1,500',
                'image' => 'img/Pavers.png',
                'description' => 'This is a product description',
            ],
            // (object)[
            //     'name' => 'Pavers',
            //     'price' => 'UGX 1,200',
            //     'image' => 'img/3way paver.png',
            //     'description' => 'This is a product description',
            // ],
            // (object)[
            //     'name' => '99 Bricks',
            //     'price' => 'UGX 1,000',
            //     'image' => 'img/single paver.png',
            //     'description' => 'This is a product description',
            
            // ]
        ];


        $safetyProducts = [
            (object)[
                'name' => 'Safety Helmet',
                'price' => 'UGX 5,000/kg',
                'image' => 'img/helmet.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Safety Boots',
                'price' => 'UGX 50,000',
                'image' => 'img/Safety hat.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Gloves',
                'price' => 'UGX 25,000',
                'image' => 'img/Gloves.png',
                'description' => 'This is a product description',
            ],
            // (object)[
            //     'name' => 'Product 4',
            //     'price' => 13000,
            //     'image' => 'https://via.placeholder.com/150',
            //     'description' => 'This is a product description',
            // ],
            // (object)[
            //     'name' => 'Product 5',
            //     'price' => 13000,
            //     'image' => 'https://via.placeholder.com/150',
            //     'description' => 'This is a product description',
            
            // ]
        ];


        $tools = [
            (object)[
                'name' => 'Spade',
                'price' => 'UGX 15,000',
                'image' => 'img/spade.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Wheelbarrow',
                'price' => 'UGX 120,000',
                'image' => 'img/Wheelbarrow.png',
                'description' => 'This is a product description',
            ],
            (object)[
                'name' => 'Axe',
                'price' => 'UGX 25,000',
                'image' => 'img/axe.png',
                'description' => 'This is a product description',
            ],
            // (object)[
            //     'name' => 'Product 4',
            //     'price' => 13000,
            //     'image' => 'https://via.placeholder.com/150',
            //     'description' => 'This is a product description',
            // ],
            // (object)[
            //     'name' => 'Product 5',
            //     'price' => 13000,
            //     'image' => 'https://via.placeholder.com/150',
            //     'description' => 'This is a product description',
            
            // ]
        ];
        


        // $products = Product::all();

        // dd($products);

        return view('welcome', compact('products', 'valueAddedProducts', 'safetyProducts', 'tools'));
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

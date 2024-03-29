<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\ProductInventory;

class ProductSellerController extends Controller
{

    public function my_product()
    {
        return view('seller.produk-saya');
    }

    public function add_product()
    {
        return view('seller.tambah-produk');
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
        // $request->validate([
        //     'qty' => 'nullable|integer',
        //     'nama'  => 'required|string|max:255',
        //     'spec'  => 'nullable|string|max:255',
        //     'harga' => 'required|integer',
        //     'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        //     'category' => 'required|integer',
        //     'deskripsi'   => 'nullable|string|max:255',
        // ]);

        // dd($request->all());

        $imageName = Auth::user()->np.time().'.'.$request->image->extension();

        $request->image->move(public_path('images/product'), $imageName);

        $product = Product::create([
                        'nama'  => $request->nama,
                        'harga' => $request->harga,
                        'deskripsi' => $request->deskripsi,
                        'spesifikasi' => $request->spec,
                        'category_id' => $request->category,
                        'seller_id' => Auth::user()->id,
                    ]);

        ProductInventory::create([
            'quantity'  => $request->qty,
            'product_id' => $product->id,
        ]);

        ProductPicture::create([
            'product_id' => $product->id,
            'foto' => $imageName,
        ]);

        return $this->my_product();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}

<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductDetailsLivewire extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.product.product-details');
    }
}

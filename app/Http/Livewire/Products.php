<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::query()
            ->orderBy('position')
            ->get();

        return view('livewire.products', compact('products'));
    }

    public function updateOrder($list)
    {
        foreach ($list as $item) {
            Product::find($item['value'])->update(['position' => $item['order']]);
        }
    }
}

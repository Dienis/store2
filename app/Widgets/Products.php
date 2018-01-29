<?php

namespace App\Widgets;

use App\Product;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Products extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Product::count();
        $string = 'Products';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => 'Products',
            'button' => [
                'text' => 'View all products',
                'link' => route('voyager.products.index'),
            ],
            'image' => 'widgets/products.jpg',
        ]));
    }
}

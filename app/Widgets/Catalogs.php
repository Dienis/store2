<?php

namespace App\Widgets;

use App\Catalog;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Catalogs extends AbstractWidget
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
        $count = Catalog::count();
        $string = 'Catalogs';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => 'Catalogs',
            'button' => [
                'text' => 'View all catalogs',
                'link' => route('voyager.catalogs.index'),
            ],
            'image' => 'widgets/catalogs.jpg',
        ]));
    }
}

<?php

namespace App\View\Components\backend;

use Illuminate\View\Component;
use App\models\{category};

class categoryCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categorys=NULL;
    public function __construct()
    {
      $this->categorys=category::where('parent',0)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('backend.components.categoryCard',['categorys'=>$this->categorys]);
    }
}

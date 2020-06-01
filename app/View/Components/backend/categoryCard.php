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
    public $arrayIdChecked=[];
    public function __construct($arrayIdChecked)
    {
      $this->categorys=category::where('id_parent',0)->get();
      $this->arrayIdChecked=$arrayIdChecked;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
    
        return view('backend.components.category-card',['categorys'=>$this->categorys,'arrayIdChecked'=>$this->arrayIdChecked]);
    }
}

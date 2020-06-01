<?php

namespace App\View\Components\backend;

use Illuminate\View\Component;
use App\models\category;
class categorySelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categorys=NULL;
    public $idChecked=[];
    public function __construct($idChecked)
    {
       $this->categorys=category::where('id_parent',0)->get();
       $this->idChecked=$idChecked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('backend.components.category-select',['categorys'=>$this->categorys,'idChecked'=>$this->idChecked,'tab'=>'']);
    }
}

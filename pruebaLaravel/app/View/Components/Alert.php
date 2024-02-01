<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $colortext;
    public $backgroundcolor;

    /**
     * Create a new component instance.
     */
    public function __construct($colortext = "red",$backgroundcolor="red")
    {
        $this->colortext = $colortext;
        $this->backgroundcolor = $backgroundcolor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    /**
     *
     */
    public function peligro(){
        if($this->backgroundcolor == "red"){
            return "CUIDADO CRACK";
        }else{
            return "¿¿¿¿Cuidado???";
        }
    }
}

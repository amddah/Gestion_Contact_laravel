<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use PhpParser\Node\Expr\Cast\String_;

class AlertDelete extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public String $type="success")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div class="alert alert-{{$type}}">
    - It is quality rather than quantity that matters. - Lucius Annaeus Seneca 
    {{$type}}
</div>
blade;
    }
}

<?php

namespace App\View\Components;

use App\Models\Income;
use App\Models\Spending;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UpdateForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public String $route, public Income|Spending $resource)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.update-form');
    }
}

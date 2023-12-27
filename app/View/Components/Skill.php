<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Skill extends Component
{
    public $skill;

    /**
     * Create a new component instance.
     */
    public function __construct($skill)
    {
        $this->skill = $skill;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skill');
    }
}

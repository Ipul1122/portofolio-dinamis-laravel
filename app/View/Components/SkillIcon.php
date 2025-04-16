<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SkillIcon extends Component
{
    public $icon;
    public $label;

    public function __construct($icon, $label)
    {
        $this->icon = $icon;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.skill-icon');
    }
}

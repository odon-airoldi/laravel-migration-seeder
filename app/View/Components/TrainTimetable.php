<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrainTimetable extends Component
{
    /**
     * Create a new component instance.
     */
    public $departingTrains;

    public function __construct($departingTrains)
    {
        $this->departingTrains = $departingTrains;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.train-timetable');
    }
}

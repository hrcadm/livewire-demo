<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PieChartTest extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.pie-chart-test');
    }

    public function mount()
    {
        $this->message = "test message";
    }
}

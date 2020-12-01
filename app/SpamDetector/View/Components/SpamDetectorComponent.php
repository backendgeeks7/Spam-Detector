<?php

namespace App\SpamDetector\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SpamDetectorComponent extends Component
{
    var $filed_name, $time_filed_name;

    /**
     * SpamDetector constructor.
     */
    public function __construct()
    {
        $this->filed_name      = config('spam.filed_name');
        $this->time_filed_name = config('spam.time_filed_name');
    }

    /**
     * Get the view / contents that represent the component.
     * @return View|string
     */
    public function render()
    {
        return <<<'blade'
                    <div style="display: none">
                        <input 
                            type="text" 
                            name="{{ $filed_name }}" 
                        >
                        
                        <input type="text"
                               name="{{ $time_filed_name }}" 
                               value="{{ microtime('true') }}"
                       >
                    </div>
                blade;
    }
}

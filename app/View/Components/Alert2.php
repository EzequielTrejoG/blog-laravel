<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $color = 'text-blue-800 bg-blue-100';
                break;

            case 'danger':
                $color = 'text-red-800 bg-red-100';
                break;

            case 'success':
                $color = 'text-green-800 bg-green-100';
                break;

            case 'warning':
                $color = 'text-yellow-800 bg-yellow-100';
                break;

            case 'dark':
                $color = 'text-gray-800 bg-gray-100';
                break;
            
            default:
                $color = 'text-blue-800 bg-blue-100';
                break;
        }

        $this->color = $color;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}

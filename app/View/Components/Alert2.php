<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $color;
    
    public function __construct($type = 'info')
    {
        $color = [
            'info' => 'text-blue-800 bg-blue-100',
            'danger' => 'text-red-800 bg-red-100',
            'success' => 'text-green-800 bg-green-100',
            'warning' => 'text-yellow-800 bg-yellow-100',
            'dark' => 'text-gray-800 bg-gray-100',
        ];
        /*switch ($type) {
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
        }*/

        //$this->color = $color;
        $this->color = $color[$type] ?? $color['info'];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}

<?php

namespace App\View\Components;

use App\Models\Footer as ModelsFooter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //return view('components.footer');
        return view('components.footer', [
            /* 'settings' => Setting::select('site_name', 'address', 'phone')->first(),
            'socialMedia' => SocialMedia::select('name', 'url', 'icon')->get(), */
            'footer' => ModelsFooter::where('id', 1)->first(),
            'currentYear' => now()->year
        ]);
    }
}

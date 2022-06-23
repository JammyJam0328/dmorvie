<?php

namespace App\View\Components\SuperAdmin;

use Illuminate\View\Component;

class StaticNav extends Component
{
    public $nav_class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-gray-600 group";
    public $active_nav_class="bg-indigo-800 text-white flex items-center px-2 py-2 text-sm font-medium  rounded-md  group";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.super-admin.static-nav');
    }
}

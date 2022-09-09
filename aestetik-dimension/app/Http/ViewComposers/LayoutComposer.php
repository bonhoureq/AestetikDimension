<?php

namespace App\Http\ViewComposers;

use App\Models\Register;
use Illuminate\View\View;

class LayoutFormComposer
{
    public function compose(View $view)
    {
        $view->with('user', Register::all());
    }
}

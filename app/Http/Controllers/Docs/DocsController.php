<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Contracts\View\View;

class DocsController
{
    public function docs(): View
    {
        return view('scribe.index');
    }
}

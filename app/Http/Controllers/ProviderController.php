<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function  index()
    {
        $providers = Provider::paginate(10);

        return view('providers.index', compact('providers'));
    }
    public function create()
    {
        return view('providers.create');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Http\Requests\ProdiverRequest;
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
    public function store(ProdiverRequest $request)
    {
        try {
            $data = $request->all();
            $product = new Provider();
            $product->create($data);

            $request->session()->flash('success', 'Registro gravado com sucesso!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
        }

        return redirect()->back();
    }
}

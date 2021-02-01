<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function searchUser(Request $request)
    {
        $users = User::where('name', 'like', '%'. $request->get('keyword') . '%');

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        try{
            if (empty($request->get('password'))) {
                unset($data['password']);
            } else {
                $data['password'] = Hash::make($data['password']);
            }

            $admin = $this->administratorRepository->find($id);
            $admin->fill($data);
            $admin->save();

            $request->session()->flash('success', 'Registro atualizado com sucesso!');
        }catch (\Exception $e){
            $request->session()->flash('error', 'Ocorreu um erro ao tentar atualizar o registro');
        }

        return redirect()->back();
    }
}

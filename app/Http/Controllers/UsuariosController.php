<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function lista()
    {
        $user = User::all();
        return view('usuarios.liste', [

            'user' => $user,


        ]);
    }





    public function criar()
    {

        return view('usuarios.criar');
    }

    public function criaruser(Request $request)
    {

        $senha = Hash::make($request->senha);
        // dd($senha);

        //colocar a extends lá em cima com o use
        $criar = new User();
        $criar->name = $request->name;
        $criar->email = $request->email;
        // parte do banco   > request vem do form
        $criar->password = $senha;

        $criar->save();

        // dd($criar);
        return view('usuarios.criar');
    }



    public function usuariosinfo($id)
    {

        //onde vou buscar o usuarios > está pela ID


        //first puxar só 1 pessoa 
        //se precisa puxar varias pessoas ou varios materias user o GET
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('usuarios.user-info', [

            'user' => $user,


        ]);
    }



    public function usuariosupdate(User $id, Request $request)
    {
        $senha = Hash::make($request->senha);
        $id->name = $request->name;
        $id->email = $request->email;
        $id->password = $senha;
        $id->save();

        $user = User::all();

        // dd($id);
        return view('usuarios.liste', [

            'user' => $user,
        ]);
    }




    public function usuariosdelete(User $id)
    {
        $id->delete();

        $user = User::all();

        return view('usuarios.liste', [

            'user' => $user,
        ]);
    }












































    // public function indexNova()
    // {
    //     return view('teste');
    // }


    // public function indexNovaCals()
    // {

    //     $user = User::all();
    //     // dd($user);

    //     return view('CalsTeste');
    // }


    public function envioForm(Request $request)
    {


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->senha;
        $user->save();

        $novo = User::all();
        dd($novo);

        return view('CalsTeste');
    }
}

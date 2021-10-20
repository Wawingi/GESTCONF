<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Gate;

class UtilizadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registarUtilizador(Request $request){
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required','min:9', 'max:9', 'unique:users'],
        ],[
            //Mensagens de validação de erros
            
        ]);

        $user = new User;
        $user->nome = $request->nome;
        $user->username = $request->username;
        $user->telefone = $request->telefone;
        $user->municipio = $request->municipio;
        $user->tipo = $request->tipo;
        $user->estado = 1;
        $user->password = Hash::make(123456);

       if($user->save()){
            return back()->with('info','Conta criada com sucesso.');
       }else{
            return back()->with('error','Houve um erro ao criar a conta.');
       }
    }

    public function getUsers(){
        $users = User::select('id','nome','username','telefone','municipio','estado')->get();
        foreach($users as $user){
            $user->municipio=Helper::getMunicipio($user->municipio);
        }
        return view('pages.listarUsers',compact('users'));
    }

    public function modificarEstado($id_user,$estado){
        $user = User::find(base64_decode($id_user));
        $user->estado = $estado;

        if($user->save()){
            return back()->with('info','Estado da conta alterado com sucesso.');
        }else{
            return back()->with('error','Houve um erro ao alterar o estado da conta.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pessoa;
use App\Model\Imprensa;
use App\Model\Servico;
use App\Model\Delegado;
use App\Model\Helper;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    public function registarPessoa(Request $request){
        $validatedData = $request->validate([
            'nome' => ['required', 'string', 'max:200'],
        ],[
            //Mensagens de validação de erros
            'nome.required'=>'Por favor, informe o nome.',
        ]);

        $pessoa=new Pessoa;
        $pessoa->nome=$request->nome;
        $pessoa->telefone=$request->telefone;
        $pessoa->tipo=$request->tipo;

        DB::beginTransaction();

        if($pessoa->save()){
            if($request->tipo==2){
                $imprensa=new Imprensa;
                $imprensa->id_pessoa=$pessoa->id;
                $imprensa->proveniencia=$request->proveniencia;
                if($imprensa->save()){
                    Helper::generateQRCode('imprensa',$request->nome,$pessoa->id);
                    DB::commit();
                    echo 1;
                }else{
                    DB::rollback();
                    echo 0;
                }
            }
            if($request->tipo==3){
                $servico=new Servico;
                $servico->id_pessoa=$pessoa->id;
                $servico->proveniencia=$request->proveniencia;
                if($servico->save()){
                    Helper::generateQRCode('servico',$request->nome,$pessoa->id);
                    DB::commit();
                    echo 1;
                }else{
                    DB::rollback();
                    echo 0;
                }
            }
            if($request->tipo==1){
                $delegado=new Delegado;
                $delegado->id_pessoa=$pessoa->id;
                $delegado->nome = $request->nome;
                $delegado->data_nascimento = $request->data_nascimento;
                $delegado->sexo = $request->sexo;
                $delegado->estado_civil = $request->estado_civil;
                $delegado->bilhete = $request->bilhete;
                $delegado->local_emissao = $request->local_emissao;
                $delegado->data_emissao = $request->data_emissao;
                $delegado->data_validade = $request->data_validade;
                $delegado->provincia = $request->provincia;
                $delegado->municipio = $request->municipio;
                $delegado->bairro = $request->bairro;
                $delegado->cartao_eleitoral = $request->cartao_eleitoral;
                $delegado->grupo = $request->grupo;
                $delegado->municipio_actual = $request->municipio_actual;
                $delegado->distrito = $request->distrito;
                $delegado->bairro_actual = $request->bairro_actual;
                $delegado->rua = $request->rua;
                $delegado->casa = $request->casa;
                $delegado->whatsapp = $request->whatsapp;
                $delegado->email = $request->email;
                $delegado->habilitacoes = $request->habilitacoes;
                $delegado->especializacao = $request->especializacao;
                $delegado->profissao = $request->profissao;
                $delegado->local_trabalho = $request->local_trabalho;
                $delegado->cargo = $request->cargo;
                $delegado->municipio_militancia = $request->municipio_militancia;
                $delegado->data_ingresso = $request->data_ingresso;
                $delegado->cartao_militante = $request->cartao_militante;
                $delegado->cap = $request->cap;
                $delegado->tempo_militancia = $request->tempo_militancia;

                if($delegado->save()){
                    Helper::generateQRCode('delegados',$request->nome,$pessoa->id);
                    DB::commit();
                    echo 1;
                }else{
                    DB::rollback();
                    echo 0;
                }
            }
        }
    }

    public function listarPessoas($tipo){
        if($tipo==1){
            $delegados=DB::table('pessoa')
                ->join('delegado','delegado.id_pessoa','=','pessoa.id')
                ->select('pessoa.id','pessoa.nome','delegado.sexo','delegado.cartao_militante','delegado.cap','delegado.tempo_militancia')
                ->where('pessoa.tipo','=',$tipo)
                ->get();
            return view('pessoal.delegadoTable',compact('delegados'));
        }
        if($tipo==2){
            $imprensas=DB::table('pessoa')
                        ->join('imprensa','imprensa.id_pessoa','=','pessoa.id')
                        ->select('pessoa.id','pessoa.nome','pessoa.telefone','imprensa.proveniencia')
                        ->where('pessoa.tipo','=',$tipo)
                        ->get();
            return view('pessoal.imprensaTable',compact('imprensas'));
        }
        if($tipo==3){
            $servicos=DB::table('pessoa')
                        ->join('servico','servico.id_pessoa','=','pessoa.id')
                        ->select('pessoa.id','pessoa.nome','pessoa.telefone','servico.proveniencia')
                        ->where('pessoa.tipo','=',$tipo)
                        ->get();
            return view('pessoal.servicoTable',compact('servicos'));
        }
    }

    public function gerarPasse($id_pessoa){
        //dd(base64_decode($id_pessoa));
        $pessoa=Pessoa::where('id','=',base64_decode($id_pessoa))->select('id','nome','tipo')->first();
        $file=$pessoa->nome.'_'.$pessoa->id.'.png';

        $qrCode=base64_encode(file_get_contents(public_path('/images/delegados/'.$file)));
        
        $pdf = \PDF::loadView('pdf.passe',compact('pessoa','qrCode'));
        return $pdf->setPaper('a6')->stream('Imprimir Passe');  
    }

    public function contadorEstatistica(){
        $contDelegado=Pessoa::getContabilidade(1);
        $contImprensa=Pessoa::getContabilidade(2);
        $contServico=Pessoa::getContabilidade(3);
        return view('layouts.contabilidade',compact('contDelegado','contImprensa','contServico'));
    }

    public function pesquisarPessoa(Request $request){
        $pessoa=Pessoa::where('id',$request->numero_ordem)->select('id','nome')->first();
        return $pessoa;
    }

    public function marcarPresenca(Request $request){
        dd($request);
    }
}

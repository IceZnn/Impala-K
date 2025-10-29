<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos;

class produtosController extends Controller
{
    public function produto(Request $request){
        return view('base');
    }

    public function salva_produto(Request $request){
        $produto = new produtos();
        $produto->Nome = $request->input('Nome');
        $produto->estado = $request->input('estado');
        $produto->Vendedor = $request->input('Vendedor');
        $produto->Ano = $request->input('Ano');
        $produto->imagem = $request->input('imagem');
        $produto->save();

        return redirect('/dashboard')->with('success', 'Produto cadastrado com sucesso!');
    }

    
    public function visualiza_produto($id)
    {
        $produto = produtos::find($id);

        return view('produto_visualizar')->with('produto', $produto);

        

    }

       public function produto_alterar($id)
    {
        $produto = produtos::find($id);

        return view('altera_produto')->with('produto', $produto);

    }


     public function muda_produto(Request $request)
    {
        $produto = produtos::find($request->id);
        $produto->Nome = $request->input('Nome');
        $produto->estado = $request->input('estado');
        $produto->Vendedor = $request->input('Vendedor');
        $produto->Ano = $request->input('Ano');
        $produto->imagem = $request->input('imagem');
        $produto->save();

        return redirect('/dashboard');
    }

    public function produto_deletar($id)
    {
        $produto = produtos::find($id);

        return view('deleta_produto')->with('produto', $produto);

    }

    public function deleta(Request $request)
    {
        produtos::where('id', $request->id)->delete();

        return redirect('/Produto');
    }

    public function ver_produtos(Request $request) {
        
     $produto = produtos::get()->all();

     return view('ver_produtos')->with('produto', $produto);

    }

    public function formulario()
    {
    return view('formulario'); 
    }






}




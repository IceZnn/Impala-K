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
    return view('formulario'); // Certifique-se de que a view 'formulario.blade.php' existe em resources/views
    }


    public function index(Request $request)
    {
        $query = Produto::query();
        
        // Filtro por busca
        if ($request->has('search') && $request->search != '') {
            $query->where('Nome', 'like', '%' . $request->search . '%');
        }
        
        // Filtro por ano
        if ($request->has('ano') && $request->ano != '') {
            $query->where('Ano', $request->ano);
        }
        
        // Filtro por vendedor
        if ($request->has('vendedor') && $request->vendedor != '') {
            $query->where('Vendedor', 'like', '%' . $request->vendedor . '%');
        }
        
        // Ordenação
        switch ($request->sort) {
            case 'antigos':
                $query->orderBy('created_at', 'asc');
                break;
            case 'nome_asc':
                $query->orderBy('Nome', 'asc');
                break;
            case 'nome_desc':
                $query->orderBy('Nome', 'desc');
                break;
            default: // novos
                $query->orderBy('created_at', 'desc');
                break;
        }
        
        $produto = $query->paginate(10);
        
        return view('sua-view', compact('produto'));
    }
}
    









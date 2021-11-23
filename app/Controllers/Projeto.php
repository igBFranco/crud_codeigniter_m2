<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjetoModel;

class Projeto extends BaseController
{
    private $projetoModel;

    public function __construct(){
        $this->projetoModel = new ProjetoModel();
    }


    public function index(){
        return view('projetos', [
            'projetos'=> $this->projetoModel->paginate(10),
            'pager'=>$this->projetoModel->pager
        ]);
    }

    public function create()
	{
		return view('projetosform');
	}

	public function store()
	{
		if ($this->projetoModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Projeto adicionado com sucesso!'
			]);
		} else {
			echo "Ocorreu um erro!";
		}
	}

	public function edit($id)
	{
		return view('projetosform', [
			'projeto' => $this->projetoModel->find($id)
		]);
	}

    public function delete($id){
        if($this->projetoModel->delete($id)){
            echo view('messages', [
                'message' => 'Projeto Excluído com Sucesso!'
            ]);
        }else{
            echo "Erro! Não Foi possível Excluir o Projeto Selecionado.";
        }
    }
}

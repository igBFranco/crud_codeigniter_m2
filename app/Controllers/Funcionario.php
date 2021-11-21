<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FuncionarioModel;

class Funcionario extends BaseController
{

    private $funcionarioModel;

    public function __construct(){
        $this->funcionarioModel = new FuncionarioModel();
    }


    public function index(){
        return view('funcionarios', [
            'funcionarios'=> $this->funcionarioModel->paginate(10),
            'pager'=>$this->funcionarioModel->pager
        ]);
    }

    public function create()
	{
		return view('form');
	}

	public function store()
	{
		if ($this->funcionarioModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Funcionário adicionado com sucesso!'
			]);
		} else {
			echo "Ocorreu um erro!";
		}
	}

	public function edit($id)
	{
		return view('form', [
			'funcionario' => $this->funcionarioModel->find($id)
		]);
	}

    public function delete($id){
        if($this->funcionarioModel->delete($id)){
            echo view('messages', [
                'message' => 'Funcionário Excluído com Sucesso!'
            ]);
        }else{
            echo "Erro! Não Foi possível Excluir o Funcionário Selecionado.";
        }
    }
}

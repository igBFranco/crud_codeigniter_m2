<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartamentoModel;

class Departamento extends BaseController
{
    private $departamentoModel;

    public function __construct(){
        $this->departamentoModel = new DepartamentoModel();
    }


    public function index(){
        return view('departamentos', [
            'departamentos'=> $this->departamentoModel->paginate(10),
            'pager'=>$this->departamentoModel->pager
        ]);
    }

    public function create()
	{
		return view('departamentosform');
	}

	public function store()
	{
		if ($this->departamentoModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Departamento adicionado com sucesso!'
			]);
		} else {
			echo "Ocorreu um erro!";
		}
	}

	public function edit($id)
	{
		return view('departamentosform', [
			'departamento' => $this->departamentoModel->find($id)
		]);
	}

    public function delete($id){
        if($this->departamentoModel->delete($id)){
            echo view('messages', [
                'message' => 'Departamento Excluído com Sucesso!'
            ]);
        }else{
            echo "Erro! Não Foi possível Excluir o Departamento Selecionado.";
        }
    }

}

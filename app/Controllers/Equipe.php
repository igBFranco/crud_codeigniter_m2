<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EquipeModel;

class Equipe extends BaseController
{

    private $equipeModel;

    public function __construct(){
        $this->equipeModel = new EquipeModel();
    }

    public function index(){
        return view('equipes', [
            'equipes'=> $this->equipeModel->paginate(10),
            'pager'=>$this->equipeModel->pager
        ]);
    }

    public function create()
	{
		return view('equipesform');
	}

	public function store()
	{
		if ($this->equipeModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Equipe adicionada com sucesso!'
			]);
		} else {
			echo "Ocorreu um erro!";
		}
	}

	public function edit($id)
	{
		return view('equipesform', [
			'equipe' => $this->equipeModel->find($id)
		]);
	}

    public function delete($id){
        if($this->equipeModel->delete($id)){
            echo view('messages', [
                'message' => 'Equipe Excluída com Sucesso!'
            ]);
        }else{
            echo "Erro! Não Foi possível Excluir o Funcionário Selecionado.";
        }
    }
}

<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\CoresController;
use App\Controller\MarcasController;
use App\Controller\ModelosController;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController
{
    public $paginate = [
        'maxLimit' => 5
    ];
    public function index(){
        // dados da tabela cores
        $cores = new CoresController();
        $cores = $cores->VerCores();
        $this->set(compact('cores'));
        // dados da tabela marcas
        $marcas = new MarcasController();
        $marcas = $marcas->VerMarcas();
        $this->set(compact('marcas'));
        // dados da tabela modelos
        $modelos = new ModelosController();
        $modelos = $modelos->VerModelos();
        $this->set(compact('modelos'));
        //dados usuario principal
        $usuario = $this->paginate($this->Usuario);
        $this->set(compact('usuario'));

        if ($this->request->is('post')) {
            $usuario = $this->request->getData();
            $this->add($usuario);
        }
        
    }

    public function add($usuario){
        $usuario = $this->Usuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('Informações Salvas'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro tente novamente.'));
        }
        $this->set(compact('usuario'));
    }

    public function edit($id = null){
         // dados da tabela cores
         $cores = new CoresController();
         $cores = $cores->VerCores();
         $this->set(compact('cores'));
         // dados da tabela marcas
         $marcas = new MarcasController();
         $marcas = $marcas->VerMarcas();
         $this->set(compact('marcas'));
         // dados da tabela modelos
         $modelos = new ModelosController();
         $modelos = $modelos->VerModelos();
         $this->set(compact('modelos'));
        $usuario = $this->Usuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('Dados do carro alterados com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Houve um erro ao editar os dados do carro.'));
        }
        $this->set(compact('usuario'));
    }
    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('Excluído com êxito'));
        } else {
            $this->Flash->error(__('Houve algum problema, tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function sobre(){
        
    }
}

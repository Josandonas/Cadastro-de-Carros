<?php
declare(strict_types=1);

namespace App\Controller;
use App\Controller\CoresController;
use App\Model\Table\CoresTable;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @property \App\Model\Table\CoresTable $Cores
 * @method \App\Model\Entity\Core[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController{
    public $paginate = [
        'maxLimit' => 5
    ];
    // public function __construct(CoresTable $cores){
    //     $this->Cores=$cores;
    // }
    public function index(){
        $cores = new CoresController();
        // $usuario = $this->paginate($this->Usuario);      
        // dd($usuario);
        // dd($this->set(compact('usuario')));  
        // $cores = $this->paginate($this->Cores);
        dd($cores);
        // dd($this->set(compact('core')));      
    }
    public function view($id = null){
        $usuario = $this->Usuario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usuario'));
    }
    public function add(){
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
    public function edit($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuario'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('Excluído com êxito'));
        } else {
            $this->Flash->error(__('Houve algum problema, tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

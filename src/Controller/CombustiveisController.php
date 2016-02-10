<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Combustiveis Controller
 *
 * @property \App\Model\Table\CombustiveisTable $Combustiveis
 */
class CombustiveisController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('combustiveis', $this->paginate($this->Combustiveis));
        $this->set('_serialize', ['combustiveis']);
    }

    /**
     * View method
     *
     * @param string|null $id Combustivei id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $combustivei = $this->Combustiveis->get($id, [
            'contain' => ['Abastecimentos']
        ]);
        $this->set('combustivei', $combustivei);
        $this->set('_serialize', ['combustivei']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $combustivei = $this->Combustiveis->newEntity();
        if ($this->request->is('post')) {
            $combustivei = $this->Combustiveis->patchEntity($combustivei, $this->request->data);
            if ($this->Combustiveis->save($combustivei)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('combustivei'));
        $this->set('_serialize', ['combustivei']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Combustivei id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $combustivei = $this->Combustiveis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $combustivei = $this->Combustiveis->patchEntity($combustivei, $this->request->data);
            if ($this->Combustiveis->save($combustivei)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('combustivei'));
        $this->set('_serialize', ['combustivei']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Combustivei id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $combustivei = $this->Combustiveis->get($id);
        if ($this->Combustiveis->delete($combustivei)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

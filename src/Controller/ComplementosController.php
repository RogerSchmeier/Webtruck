<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Complementos Controller
 *
 * @property \App\Model\Table\ComplementosTable $Complementos
 */
class ComplementosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('complementos', $this->paginate($this->Complementos));
        $this->set('_serialize', ['complementos']);
    }

    /**
     * View method
     *
     * @param string|null $id Complemento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $complemento = $this->Complementos->get($id, [
            'contain' => ['Abastecimentos']
        ]);
        $this->set('complemento', $complemento);
        $this->set('_serialize', ['complemento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $complemento = $this->Complementos->newEntity();
        if ($this->request->is('post')) {
            $complemento = $this->Complementos->patchEntity($complemento, $this->request->data);
            if ($this->Complementos->save($complemento)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('complemento'));
        $this->set('_serialize', ['complemento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Complemento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $complemento = $this->Complementos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complemento = $this->Complementos->patchEntity($complemento, $this->request->data);
            if ($this->Complementos->save($complemento)) {
                $this->Flash->success('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('complemento'));
        $this->set('_serialize', ['complemento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Complemento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complemento = $this->Complementos->get($id);
        if ($this->Complementos->delete($complemento)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

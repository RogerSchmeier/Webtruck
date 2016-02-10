<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Motoristas Controller
 *
 * @property \App\Model\Table\MotoristasTable $Motoristas
 */
class MotoristasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cidades']
        ];
        $this->set('motoristas', $this->paginate($this->Motoristas));
        $this->set('_serialize', ['motoristas']);
    }

    /**
     * View method
     *
     * @param string|null $id Motorista id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $motorista = $this->Motoristas->get($id, [
            'contain' => ['Cidades', 'Implementos', 'Multas', 'Veiculos']
        ]);
        $this->set('motorista', $motorista);
        $this->set('_serialize', ['motorista']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $motorista = $this->Motoristas->newEntity();
        if ($this->request->is('post')) {
            $motorista = $this->Motoristas->patchEntity($motorista, $this->request->data);
            if ($this->Motoristas->save($motorista)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Motoristas->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('motorista', 'cidades'));
        $this->set('_serialize', ['motorista']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Motorista id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $motorista = $this->Motoristas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $motorista = $this->Motoristas->patchEntity($motorista, $this->request->data);
            if ($this->Motoristas->save($motorista)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Motoristas->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('motorista', 'cidades'));
        $this->set('_serialize', ['motorista']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Motorista id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $motorista = $this->Motoristas->get($id);
        if ($this->Motoristas->delete($motorista)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fornecedores Controller
 *
 * @property \App\Model\Table\FornecedoresTable $Fornecedores
 */
class FornecedoresController extends AppController
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
        $this->set('fornecedores', $this->paginate($this->Fornecedores));
        $this->set('_serialize', ['fornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => ['Cidades', 'Manutencoes', 'Pneus', 'Recapagens']
        ]);
        $this->set('fornecedore', $fornecedore);
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedore = $this->Fornecedores->newEntity();
        if ($this->request->is('post')) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->data);
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Fornecedores->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('fornecedore', 'cidades'));
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->data);
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Fornecedores->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('fornecedore', 'cidades'));
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedore = $this->Fornecedores->get($id);
        if ($this->Fornecedores->delete($fornecedore)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

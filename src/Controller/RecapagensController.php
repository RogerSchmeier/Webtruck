<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recapagens Controller
 *
 * @property \App\Model\Table\RecapagensTable $Recapagens
 */
class RecapagensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pneus', 'Fornecedores']
        ];
        $this->set('recapagens', $this->paginate($this->Recapagens));
        $this->set('_serialize', ['recapagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Recapagen id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recapagen = $this->Recapagens->get($id, [
            'contain' => ['Pneus', 'Fornecedores']
        ]);
        $this->set('recapagen', $recapagen);
        $this->set('_serialize', ['recapagen']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recapagen = $this->Recapagens->newEntity();
        if ($this->request->is('post')) {
            $recapagen = $this->Recapagens->patchEntity($recapagen, $this->request->data);
            if ($this->Recapagens->save($recapagen)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $pneus = $this->Recapagens->Pneus->find('list', ['limit' => 200]);
        $fornecedores = $this->Recapagens->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('recapagen', 'pneus', 'fornecedores'));
        $this->set('_serialize', ['recapagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recapagen id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recapagen = $this->Recapagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recapagen = $this->Recapagens->patchEntity($recapagen, $this->request->data);
            if ($this->Recapagens->save($recapagen)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $pneus = $this->Recapagens->Pneus->find('list', ['limit' => 200]);
        $fornecedores = $this->Recapagens->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('recapagen', 'pneus', 'fornecedores'));
        $this->set('_serialize', ['recapagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recapagen id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recapagen = $this->Recapagens->get($id);
        if ($this->Recapagens->delete($recapagen)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

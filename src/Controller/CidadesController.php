<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidades Controller
 *
 * @property \App\Model\Table\CidadesTable $Cidades
 */
class CidadesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cidades', $this->paginate($this->Cidades));
        $this->set('_serialize', ['cidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => ['Abastecimentos', 'Agendamentos', 'Fornecedores', 'Implementos', 'Manutencoes', 'Motoristas', 'Multas', 'Servicos', 'Veiculos']
        ]);
        $this->set('cidade', $cidade);
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidades->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->data);
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->data);
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidades->get($id);
        if ($this->Cidades->delete($cidade)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

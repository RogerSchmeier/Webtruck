<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Manutencoes Controller
 *
 * @property \App\Model\Table\ManutencoesTable $Manutencoes
 */
class ManutencoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Veiculos', 'Servicos', 'Fornecedores', 'Implementos', 'Cidades']
        ];
        $this->set('manutencoes', $this->paginate($this->Manutencoes));
        $this->set('_serialize', ['manutencoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Manutenco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $manutenco = $this->Manutencoes->get($id, [
            'contain' => ['Veiculos', 'Servicos', 'Fornecedores', 'Implementos', 'Cidades']
        ]);
        $this->set('manutenco', $manutenco);
        $this->set('_serialize', ['manutenco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $manutenco = $this->Manutencoes->newEntity();
        if ($this->request->is('post')) {
            $manutenco = $this->Manutencoes->patchEntity($manutenco, $this->request->data);
            if ($this->Manutencoes->save($manutenco)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Manutencoes->Veiculos->find('list', ['limit' => 200]);
        $servicos = $this->Manutencoes->Servicos->find('list', ['limit' => 200]);
        $fornecedores = $this->Manutencoes->Fornecedores->find('list', ['limit' => 200]);
        $implementos = $this->Manutencoes->Implementos->find('list', ['limit' => 200]);
        $cidades = $this->Manutencoes->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('manutenco', 'veiculos', 'servicos', 'fornecedores', 'implementos', 'cidades'));
        $this->set('_serialize', ['manutenco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Manutenco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $manutenco = $this->Manutencoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $manutenco = $this->Manutencoes->patchEntity($manutenco, $this->request->data);
            if ($this->Manutencoes->save($manutenco)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Manutencoes->Veiculos->find('list', ['limit' => 200]);
        $servicos = $this->Manutencoes->Servicos->find('list', ['limit' => 200]);
        $fornecedores = $this->Manutencoes->Fornecedores->find('list', ['limit' => 200]);
        $implementos = $this->Manutencoes->Implementos->find('list', ['limit' => 200]);
        $cidades = $this->Manutencoes->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('manutenco', 'veiculos', 'servicos', 'fornecedores', 'implementos', 'cidades'));
        $this->set('_serialize', ['manutenco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Manutenco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $manutenco = $this->Manutencoes->get($id);
        if ($this->Manutencoes->delete($manutenco)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

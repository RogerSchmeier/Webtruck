<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicos Controller
 *
 * @property \App\Model\Table\ServicosTable $Servicos
 */
class ServicosController extends AppController
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
        $this->set('servicos', $this->paginate($this->Servicos));
        $this->set('_serialize', ['servicos']);
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => ['Cidades', 'Manutencoes']
        ]);
        $this->set('servico', $servico);
        $this->set('_serialize', ['servico']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servicos->newEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            if ($this->Servicos->save($servico)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Servicos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'cidades'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            if ($this->Servicos->save($servico)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Servicos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'cidades'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servicos->get($id);
        if ($this->Servicos->delete($servico)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

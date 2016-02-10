<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendamentos Controller
 *
 * @property \App\Model\Table\AgendamentosTable $Agendamentos
 */
class AgendamentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Implementos', 'Veiculos', 'Cidades']
        ];
        $this->set('agendamentos', $this->paginate($this->Agendamentos));
        $this->set('_serialize', ['agendamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Agendamento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agendamento = $this->Agendamentos->get($id, [
            'contain' => ['Implementos', 'Veiculos', 'Cidades']
        ]);
        $this->set('agendamento', $agendamento);
        $this->set('_serialize', ['agendamento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agendamento = $this->Agendamentos->newEntity();
        if ($this->request->is('post')) {
            $agendamento = $this->Agendamentos->patchEntity($agendamento, $this->request->data);
            if ($this->Agendamentos->save($agendamento)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $implementos = $this->Agendamentos->Implementos->find('list', ['limit' => 200]);
        $veiculos = $this->Agendamentos->Veiculos->find('list', ['limit' => 200]);
        $cidades = $this->Agendamentos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('agendamento', 'implementos', 'veiculos', 'cidades'));
        $this->set('_serialize', ['agendamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agendamento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agendamento = $this->Agendamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agendamento = $this->Agendamentos->patchEntity($agendamento, $this->request->data);
            if ($this->Agendamentos->save($agendamento)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $implementos = $this->Agendamentos->Implementos->find('list', ['limit' => 200]);
        $veiculos = $this->Agendamentos->Veiculos->find('list', ['limit' => 200]);
        $cidades = $this->Agendamentos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('agendamento', 'implementos', 'veiculos', 'cidades'));
        $this->set('_serialize', ['agendamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agendamento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agendamento = $this->Agendamentos->get($id);
        if ($this->Agendamentos->delete($agendamento)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
     public function view_pdf($id = null)
    {
        $agendamento = $this->Agendamentos->get($id, [
            'contain' => ['Veiculos', 'Implementos', 'Cidades']
        ]);
        $this->set('agendamento', $agendamento);
        $this->set('_serialize', ['agendamento']);
        $this->layout ='pdf';
    }
}

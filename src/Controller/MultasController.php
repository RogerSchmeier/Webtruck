<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Multas Controller
 *
 * @property \App\Model\Table\MultasTable $Multas
 */
class MultasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Veiculos', 'Implementos', 'Motoristas', 'Cidades']
        ];
        $this->set('multas', $this->paginate($this->Multas));
        $this->set('_serialize', ['multas']);
    }

    /**
     * View method
     *
     * @param string|null $id Multa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $multa = $this->Multas->get($id, [
            'contain' => ['Veiculos', 'Implementos', 'Motoristas', 'Cidades']
        ]);
        $this->set('multa', $multa);
        $this->set('_serialize', ['multa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $multa = $this->Multas->newEntity();
        if ($this->request->is('post')) {
            $multa = $this->Multas->patchEntity($multa, $this->request->data);
            if ($this->Multas->save($multa)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Multas->Veiculos->find('list', ['limit' => 200]);
        $implementos = $this->Multas->Implementos->find('list', ['limit' => 200]);
        $motoristas = $this->Multas->Motoristas->find('list', ['limit' => 200]);
        $cidades = $this->Multas->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('multa', 'veiculos', 'implementos', 'motoristas', 'cidades'));
        $this->set('_serialize', ['multa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Multa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $multa = $this->Multas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $multa = $this->Multas->patchEntity($multa, $this->request->data);
            if ($this->Multas->save($multa)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Multas->Veiculos->find('list', ['limit' => 200]);
        $implementos = $this->Multas->Implementos->find('list', ['limit' => 200]);
        $motoristas = $this->Multas->Motoristas->find('list', ['limit' => 200]);
        $cidades = $this->Multas->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('multa', 'veiculos', 'implementos', 'motoristas', 'cidades'));
        $this->set('_serialize', ['multa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Multa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $multa = $this->Multas->get($id);
        if ($this->Multas->delete($multa)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
      public function view_pdf($id = null)
    {
        $multa = $this->Multas->get($id, [
            'contain' => ['Veiculos', 'Implementos', 'Motoristas', 'Cidades']
        ]);
        $this->set('multa', $multa);
        $this->set('_serialize', ['multa']);
        $this->layout ='pdf';
    }
}

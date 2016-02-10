<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Veiculos Controller
 *
 * @property \App\Model\Table\VeiculosTable $Veiculos
 */
class VeiculosController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Motoristas', 'Cidades']
        ];
        $this->set('veiculos', $this->paginate($this->Veiculos));
        $this->set('_serialize', ['veiculos']);
    }

    /**
     * View method
     *
     * @param string|null $id Veiculo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {


        $veiculo = $this->Veiculos->get($id, [
            'contain' => ['Motoristas', 'Cidades', 'Abastecimentos', 'Agendamentos', 'Manutencoes', 'Multas']]);
       
         $this->set('veiculo', $veiculo);
        $this->set('_serialize', ['veiculo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $veiculo = $this->Veiculos->newEntity();
        if ($this->request->is('post')) {
            $veiculo = $this->Veiculos->patchEntity($veiculo, $this->request->data);
            if ($this->Veiculos->save($veiculo)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        
        
         $motoristas = $this->Veiculos->Motoristas->find('list', ['limit' => 200]);
        $cidades = $this->Veiculos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('veiculo', 'motoristas', 'cidades'));
        $this->set('_serialize', ['veiculo']);
       

        
    }

    /**
     * Edit method
     *
     * @param string|null $id Veiculo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $veiculo = $this->Veiculos->get($id, [
            'contain' => ['Motoristas', 'Cidades']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veiculo = $this->Veiculos->patchEntity($veiculo, $this->request->data);
            if ($this->Veiculos->save($veiculo)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The veiculo could not be saved. Please, try again.');
            }
        }
        $motoristas = $this->Veiculos->Motoristas->find('list', ['limit' => 200]);
        $cidades = $this->Veiculos->Cidades->find('list', ['limit' => 200]);

        $this->set(compact('veiculo', 'motoristas', 'cidades'));
        $this->set('_serialize', ['veiculo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Veiculo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $veiculo = $this->Veiculos->get($id);
        if ($this->Veiculos->delete($veiculo)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }

    public function view_pdf($id = null) {
        $veiculo = $this->Veiculos->get($id, [
            'contain' => ['Motoristas', 'Cidades']]);

        $this->set('veiculo', $veiculo);
        $this->set('_serialize', ['veiculo']);
        $this->layout = 'pdf';
    }

}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Implementos Controller
 *
 * @property \App\Model\Table\ImplementosTable $Implementos
 */
class ImplementosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cidades', 'Motoristas']
        ];
        $this->set('implementos', $this->paginate($this->Implementos));
        $this->set('_serialize', ['implementos']);
    }

    /**
     * View method
     *
     * @param string|null $id Implemento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $implemento = $this->Implementos->get($id, [
            'contain' => ['Cidades', 'Motoristas', 'Abastecimentos', 'Agendamentos', 'Manutencoes', 'Multas']
        ]);
        $this->set('implemento', $implemento);
        $this->set('_serialize', ['implemento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $implemento = $this->Implementos->newEntity();
        if ($this->request->is('post')) {
            $implemento = $this->Implementos->patchEntity($implemento, $this->request->data);
            if ($this->Implementos->save($implemento)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Implementos->Cidades->find('list', ['limit' => 200]);
        $motoristas = $this->Implementos->Motoristas->find('list', ['limit' => 200]);
    
        $this->set(compact('implemento', 'cidades', 'motoristas', 'pneus'));
        $this->set('_serialize', ['implemento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Implemento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $implemento = $this->Implementos->get($id, [
            'contain' => ['Cidades', 'Motoristas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $implemento = $this->Implementos->patchEntity($implemento, $this->request->data);
            if ($this->Implementos->save($implemento)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $cidades = $this->Implementos->Cidades->find('list', ['limit' => 200]);
        $motoristas = $this->Implementos->Motoristas->find('list', ['limit' => 200]);
        
        $this->set(compact('implemento', 'cidades', 'motoristas' ));
        $this->set('_serialize', ['implemento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Implemento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $implemento = $this->Implementos->get($id);
        if ($this->Implementos->delete($implemento)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

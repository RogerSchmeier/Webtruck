<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pneus Controller
 *
 * @property \App\Model\Table\PneusTable $Pneus
 */
class PneusController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fornecedores']
        ];
        $this->set('pneus', $this->paginate($this->Pneus));
        $this->set('_serialize', ['pneus']);
    }

    /**
     * View method
     *
     * @param string|null $id Pneus id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pneus = $this->Pneus->get($id, [
            'contain' => ['Fornecedores']
        ]);
        $this->set('pneus', $pneus);
        $this->set('_serialize', ['pneus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pneus = $this->Pneus->newEntity();
        if ($this->request->is('post')) {
            $pneus = $this->Pneus->patchEntity($pneus, $this->request->data);
            
            $media= ($pneus['km_final'] - $pneus['km_inicial']) ;  
            $pneus['media_km']=$media;
            
            if ($this->Pneus->save($pneus)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $fornecedores = $this->Pneus->Fornecedores->find('list', ['limit' => 200]);
        
        $this->set(compact('pneus', 'fornecedores'));
        $this->set('_serialize', ['pneus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pneus id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pneus = $this->Pneus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pneus = $this->Pneus->patchEntity($pneus, $this->request->data);
            
             $media= ($pneus['km_final'] - $pneus['km_inicial']) ;  
            $pneus['media_km']=$media;
            
            if ($this->Pneus->save($pneus)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $fornecedores = $this->Pneus->Fornecedores->find('list', ['limit' => 200]);
        
        $this->set(compact('pneus', 'fornecedores'));
        $this->set('_serialize', ['pneus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pneus id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pneus = $this->Pneus->get($id);
        if ($this->Pneus->delete($pneus)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

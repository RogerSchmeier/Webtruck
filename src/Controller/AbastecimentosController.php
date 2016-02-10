<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Abastecimentos Controller
 *
 * @property \App\Model\Table\AbastecimentosTable $Abastecimentos
 */
class AbastecimentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Veiculos', 'Implementos', 'Combustiveis', 'Complementos', 'Cidades']
        ];
        $this->set('abastecimentos', $this->paginate($this->Abastecimentos));
        $this->set('_serialize', ['abastecimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Abastecimento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $abastecimento = $this->Abastecimentos->get($id, [
            'contain' => ['Veiculos', 'Implementos', 'Combustiveis', 'Complementos', 'Cidades']
        ]);
        $this->set('abastecimento', $abastecimento);
        $this->set('_serialize', ['abastecimento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $abastecimento = $this->Abastecimentos->newEntity();
        if ($this->request->is('post')) {
            $abastecimento = $this->Abastecimentos->patchEntity($abastecimento, $this->request->data);
            
            $media= ($abastecimento['km_fim'] - $abastecimento['km_inicio']) / $abastecimento['litros_comb'] ;  
            $abastecimento['media']=$media;
            if ($this->Abastecimentos->save($abastecimento)) {
                $this->Flash->success('Salvo com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Abastecimentos->Veiculos->find('list', ['limit' => 200]);
        $implementos = $this->Abastecimentos->Implementos->find('list', ['limit' => 200]);
        $combustiveis = $this->Abastecimentos->Combustiveis->find('list', ['limit' => 200]);
        $complementos = $this->Abastecimentos->Complementos->find('list', ['limit' => 200]);
        $cidades = $this->Abastecimentos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('abastecimento', 'veiculos', 'implementos', 'combustiveis', 'complementos', 'cidades'));
        $this->set('_serialize', ['abastecimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Abastecimento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $abastecimento = $this->Abastecimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $abastecimento = $this->Abastecimentos->patchEntity($abastecimento, $this->request->data);
            
            $media= ($abastecimento['km_fim'] - $abastecimento['km_inicio']) / $abastecimento['litros_comb'] ;  
            $abastecimento['media']=$media;
            if ($this->Abastecimentos->save($abastecimento)) {
                $this->Flash->success('Edição Salva com Sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Por Favor tente Novamente, erro ao Preencher o Cadastro.');
            }
        }
        $veiculos = $this->Abastecimentos->Veiculos->find('list', ['limit' => 200]);
        $implementos = $this->Abastecimentos->Implementos->find('list', ['limit' => 200]);
        $combustiveis = $this->Abastecimentos->Combustiveis->find('list', ['limit' => 200]);
        $complementos = $this->Abastecimentos->Complementos->find('list', ['limit' => 200]);
        $cidades = $this->Abastecimentos->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('abastecimento', 'veiculos', 'implementos', 'combustiveis', 'complementos', 'cidades'));
        $this->set('_serialize', ['abastecimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Abastecimento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $abastecimento = $this->Abastecimentos->get($id);
        if ($this->Abastecimentos->delete($abastecimento)) {
            $this->Flash->success('Registro Excluído com sucesso.');
        } else {
            $this->Flash->error('Não foi possivel deletar o Registro.');
        }
        return $this->redirect(['action' => 'index']);
    }
    public function view_pdf($id = null)
    {
        $abastecimento = $this->Abastecimentos->get($id, [
            'contain' => ['Veiculos', 'Implementos', 'Combustiveis', 'Complementos', 'Cidades']
        ]);
        $this->set('abastecimento', $abastecimento);
        $this->set('_serialize', ['abastecimento']);
        $this->layout ='pdf';
    }
    
}

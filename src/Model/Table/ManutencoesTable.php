<?php
namespace App\Model\Table;

use App\Model\Entity\Manutenco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Manutencoes Model
 */
class ManutencoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('manutencoes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id'
        ]);
        $this->belongsTo('Servicos', [
            'foreignKey' => 'servico_id'
        ]);
        $this->belongsTo('Fornecedores', [
            'foreignKey' => 'fornecedore_id'
        ]);
        $this->belongsTo('Implementos', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('motivo', 'create')
            ->notEmpty('motivo')
            ->add('km_veiculo', 'valid', ['rule' => 'numeric'])
            ->requirePresence('km_veiculo', 'create')
            ->notEmpty('km_veiculo')
            ->add('data', 'valid', ['rule' => 'date'])
            ->requirePresence('data', 'create')
            ->notEmpty('data')
            ->allowEmpty('garantia')
            ->add('preco_obra', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco_obra', 'create')
            ->notEmpty('preco_obra')
            ->add('preco_peca', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco_peca', 'create')
            ->notEmpty('preco_peca')
            ->add('veiculo_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('veiculo_id', 'create')
            ->notEmpty('veiculo_id')
            ->add('servico_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('servico_id', 'create')
            ->notEmpty('servico_id')
            ->add('fornecedore_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('fornecedore_id', 'create')
            ->notEmpty('fornecedore_id')
            ->add('implemento_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('implemento_id', 'create')
            ->notEmpty('implemento_id')
            ->add('cidade_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cidade_id', 'create')
            ->notEmpty('cidade_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['veiculo_id'], 'Veiculos'));
        $rules->add($rules->existsIn(['servico_id'], 'Servicos'));
        $rules->add($rules->existsIn(['fornecedore_id'], 'Fornecedores'));
        $rules->add($rules->existsIn(['implemento_id'], 'Implementos'));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

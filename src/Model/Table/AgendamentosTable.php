<?php
namespace App\Model\Table;

use App\Model\Entity\Agendamento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendamentos Model
 */
class AgendamentosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('agendamentos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Implementos', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id'
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
            ->add('data', 'valid', ['rule' => 'date'])
            ->requirePresence('data', 'create')
            ->notEmpty('data')
            ->allowEmpty('endereco')
            ->add('implemento_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('implemento_id')
            ->add('veiculo_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('veiculo_id')
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
        $rules->add($rules->existsIn(['implemento_id'], 'Implementos'));
        $rules->add($rules->existsIn(['veiculo_id'], 'Veiculos'));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

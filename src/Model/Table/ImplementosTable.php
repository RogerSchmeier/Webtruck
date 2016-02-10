<?php
namespace App\Model\Table;

use App\Model\Entity\Implemento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Implementos Model
 */
class ImplementosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('implementos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->belongsTo('Motoristas', [
            'foreignKey' => 'motorista_id'
        ]);
        $this->hasMany('Abastecimentos', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->hasMany('Agendamentos', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->hasMany('Manutencoes', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->hasMany('Multas', [
            'foreignKey' => 'implemento_id'
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
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo')
            ->requirePresence('ano', 'create')
            ->notEmpty('ano')
            ->requirePresence('chassis', 'create')
            ->notEmpty('chassis')
            ->add('eixos', 'valid', ['rule' => 'numeric'])
            ->requirePresence('eixos', 'create')
            ->notEmpty('eixos')
            ->requirePresence('placa', 'create')
            ->notEmpty('placa')
            ->requirePresence('renavan', 'create')
            ->notEmpty('renavan')
            ->allowEmpty('obs')
            ->add('cidade_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cidade_id', 'create')
            ->notEmpty('cidade_id')
            ->add('motorista_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('motorista_id', 'create')
            ->notEmpty('motorista_id')
            ->allowEmpty('cor')
            ->allowEmpty('antt');

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
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        $rules->add($rules->existsIn(['motorista_id'], 'Motoristas'));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Veiculo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veiculos Model
 */
class VeiculosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('veiculos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Motoristas', [
            'foreignKey' => 'motorista_id'
        ]);
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Abastecimentos', [
            'foreignKey' => 'veiculo_id'
        ]);
        $this->hasMany('Agendamentos', [
            'foreignKey' => 'veiculo_id'
        ]);
        $this->hasMany('Manutencoes', [
            'foreignKey' => 'veiculo_id'
        ]);
        $this->hasMany('Multas', [
            'foreignKey' => 'veiculo_id'
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
            ->allowEmpty('marca')
            ->requirePresence('ano', 'create')
            ->notEmpty('ano')
            ->requirePresence('motor', 'create')
            ->notEmpty('motor')
            ->requirePresence('chassis', 'create')
            ->notEmpty('chassis')
            ->requirePresence('renavam', 'create')
            ->notEmpty('renavam')
            ->requirePresence('placa', 'create')
            ->notEmpty('placa')
            ->requirePresence('antt', 'create')
            ->notEmpty('antt')
            ->allowEmpty('obs')
            ->add('motorista_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('motorista_id', 'create')
            ->notEmpty('motorista_id')
            ->add('eixos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('eixos')
            ->add('cidade_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cidade_id', 'create')
            ->notEmpty('cidade_id')
            ->add('kilometragem', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('kilometragem')
            ->allowEmpty('cor');

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
        $rules->add($rules->existsIn(['motorista_id'], 'Motoristas'));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

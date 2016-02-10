<?php
namespace App\Model\Table;

use App\Model\Entity\Motorista;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motoristas Model
 */
class MotoristasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('motoristas');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Implementos', [
            'foreignKey' => 'motorista_id'
        ]);
        $this->hasMany('Multas', [
            'foreignKey' => 'motorista_id'
        ]);
        $this->hasMany('Veiculos', [
            'foreignKey' => 'motorista_id'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->requirePresence('CPF', 'create')
            ->notEmpty('CPF')
            ->requirePresence('RG', 'create')
            ->notEmpty('RG')
            ->requirePresence('CNH', 'create')
            ->notEmpty('CNH')
            ->add('data_nasc', 'valid', ['rule' => 'date'])
            ->requirePresence('data_nasc', 'create')
            ->notEmpty('data_nasc')
            ->add('data_adm', 'valid', ['rule' => 'date'])
            ->requirePresence('data_adm', 'create')
            ->notEmpty('data_adm')
            ->add('data_dem', 'valid', ['rule' => 'date'])
            ->requirePresence('data_dem', 'create')
            ->notEmpty('data_dem')
            ->allowEmpty('telefone')
            ->requirePresence('celular', 'create')
            ->notEmpty('celular')
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco')
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
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

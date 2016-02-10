<?php
namespace App\Model\Table;

use App\Model\Entity\Fornecedore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fornecedores Model
 */
class FornecedoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('fornecedores');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Manutencoes', [
            'foreignKey' => 'fornecedore_id'
        ]);
        $this->hasMany('Pneus', [
            'foreignKey' => 'fornecedore_id'
        ]);
        $this->hasMany('Recapagens', [
            'foreignKey' => 'fornecedore_id'
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
            ->allowEmpty('fantasia')
            ->requirePresence('razao', 'create')
            ->notEmpty('razao')
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj')
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone')
            ->allowEmpty('celular')
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->allowEmpty('endereco')
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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

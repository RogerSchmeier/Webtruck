<?php
namespace App\Model\Table;

use App\Model\Entity\Servico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servicos Model
 */
class ServicosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('servicos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Manutencoes', [
            'foreignKey' => 'servico_id'
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
            ->allowEmpty('cnpj')
            ->allowEmpty('cpf')
            ->allowEmpty('telefone')
            ->allowEmpty('celular')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->add('cidade_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cidade_id', 'create')
            ->notEmpty('cidade_id')
            ->allowEmpty('endereco');

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

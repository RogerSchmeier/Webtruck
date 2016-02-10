<?php
namespace App\Model\Table;

use App\Model\Entity\Complemento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Complementos Model
 */
class ComplementosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('complementos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Abastecimentos', [
            'foreignKey' => 'complemento_id'
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
            ->allowEmpty('obs');

        return $validator;
    }
}

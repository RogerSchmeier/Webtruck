<?php
namespace App\Model\Table;

use App\Model\Entity\Combustivei;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Combustiveis Model
 */
class CombustiveisTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('combustiveis');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Abastecimentos', [
            'foreignKey' => 'combustivei_id'
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

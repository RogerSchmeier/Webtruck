<?php
namespace App\Model\Table;

use App\Model\Entity\Pneus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pneus Model
 */
class PneusTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('pneus');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Fornecedores', [
            'foreignKey' => 'fornecedore_id'
        ]);
        $this->belongsToMany('Implementos', [
            'foreignKey' => 'pneus_id',
            'targetForeignKey' => 'implemento_id',
            'joinTable' => 'implementos_pneus'
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
            ->requirePresence('marca', 'create')
            ->notEmpty('marca')
            ->add('km_inicial', 'valid', ['rule' => 'numeric'])
            ->requirePresence('km_inicial', 'create')
            ->notEmpty('km_inicial')
            ->add('km_final', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('km_final')
            ->add('media_km', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('media_km')
            ->add('preco', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco', 'create')
            ->notEmpty('preco')
            ->add('numero', 'valid', ['rule' => 'decimal'])
            ->requirePresence('numero', 'create')
            ->notEmpty('numero')
            ->allowEmpty('dano_total')
            ->add('fornecedore_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('fornecedore_id', 'create')
            ->notEmpty('fornecedore_id');

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
        $rules->add($rules->existsIn(['fornecedore_id'], 'Fornecedores'));
        return $rules;
    }
}

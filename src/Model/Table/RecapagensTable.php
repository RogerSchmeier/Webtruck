<?php
namespace App\Model\Table;

use App\Model\Entity\Recapagen;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recapagens Model
 */
class RecapagensTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('recapagens');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Pneus', [
            'foreignKey' => 'pneu_id'
        ]);
        $this->belongsTo('Fornecedores', [
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
            ->add('km_inicial', 'valid', ['rule' => 'decimal'])
            ->requirePresence('km_inicial', 'create')
            ->notEmpty('km_inicial')
            ->add('km_final', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('km_final')
            ->add('media_km', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('media_km')
            ->add('preco_recape', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco_recape', 'create')
            ->notEmpty('preco_recape')
            ->allowEmpty('recape')
            ->add('pneu_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('pneu_id', 'create')
            ->notEmpty('pneu_id')
            ->add('fornecedore_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('fornecedore_id', 'create')
            ->notEmpty('fornecedore_id')
            ->allowEmpty('dano_total');

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
        $rules->add($rules->existsIn(['pneu_id'], 'Pneus'));
        $rules->add($rules->existsIn(['fornecedore_id'], 'Fornecedores'));
        return $rules;
    }
}

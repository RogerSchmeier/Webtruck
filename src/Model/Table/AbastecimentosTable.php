<?php
namespace App\Model\Table;

use App\Model\Entity\Abastecimento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abastecimentos Model
 */
class AbastecimentosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('abastecimentos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Veiculos', [
            'foreignKey' => 'veiculo_id'
        ]);
        $this->belongsTo('Implementos', [
            'foreignKey' => 'implemento_id'
        ]);
        $this->belongsTo('Combustiveis', [
            'foreignKey' => 'combustivei_id'
        ]);
        $this->belongsTo('Complementos', [
            'foreignKey' => 'complemento_id'
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
            ->add('preco_comb', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco_comb', 'create')
            ->notEmpty('preco_comb')
            ->add('preco_comp', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco_comp', 'create')
            ->notEmpty('preco_comp')
            ->add('data', 'valid', ['rule' => 'date'])
            ->requirePresence('data', 'create')
            ->notEmpty('data')
            ->add('litros_comb', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('litros_comb')
            ->add('litros_comp', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('litros_comp')
            ->requirePresence('Posto', 'create')
            ->notEmpty('Posto')
            ->add('km_inicio', 'valid', ['rule' => 'numeric'])
            ->requirePresence('km_inicio', 'create')
            ->notEmpty('km_inicio')
            ->add('km_fim', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('km_fim')
            ->allowEmpty('media')
            ->add('veiculo_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('veiculo_id', 'create')
            ->notEmpty('veiculo_id')
            ->add('implemento_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('implemento_id', 'create')
            ->notEmpty('implemento_id')
            ->add('combustivei_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('combustivei_id', 'create')
            ->notEmpty('combustivei_id')
            ->add('complemento_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('complemento_id', 'create')
            ->notEmpty('complemento_id')
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
        $rules->add($rules->existsIn(['veiculo_id'], 'Veiculos'));
        $rules->add($rules->existsIn(['implemento_id'], 'Implementos'));
        $rules->add($rules->existsIn(['combustivei_id'], 'Combustiveis'));
        $rules->add($rules->existsIn(['complemento_id'], 'Complementos'));
        $rules->add($rules->existsIn(['cidade_id'], 'Cidades'));
        return $rules;
    }
}

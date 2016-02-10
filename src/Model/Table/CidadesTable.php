<?php
namespace App\Model\Table;

use App\Model\Entity\Cidade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cidades Model
 */
class CidadesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('cidades');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Abastecimentos', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Agendamentos', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Fornecedores', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Implementos', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Manutencoes', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Motoristas', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Multas', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Servicos', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->hasMany('Veiculos', [
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->allowEmpty('uf')
            ->requirePresence('pais', 'create')
            ->notEmpty('pais');

        return $validator;
    }
}

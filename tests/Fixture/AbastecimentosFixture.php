<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AbastecimentosFixture
 *
 */
class AbastecimentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'preco_comb' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'preco_comp' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'data' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'litros_comb' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'litros_comp' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'Posto' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'km_inicio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'km_fim' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'media' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'veiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'implemento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'combustivei_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'complemento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_abastecimentos_veiculos1_idx' => ['type' => 'index', 'columns' => ['veiculo_id'], 'length' => []],
            'fk_abastecimentos_implementos1_idx' => ['type' => 'index', 'columns' => ['implemento_id'], 'length' => []],
            'fk_abastecimentos_combustiveis1_idx' => ['type' => 'index', 'columns' => ['combustivei_id'], 'length' => []],
            'fk_abastecimentos_complementos1_idx' => ['type' => 'index', 'columns' => ['complemento_id'], 'length' => []],
            'fk_abastecimentos_cidades1_idx' => ['type' => 'index', 'columns' => ['cidade_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_abastecimentos_cidades1' => ['type' => 'foreign', 'columns' => ['cidade_id'], 'references' => ['cidades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_abastecimentos_combustiveis1' => ['type' => 'foreign', 'columns' => ['combustivei_id'], 'references' => ['combustiveis', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_abastecimentos_complementos1' => ['type' => 'foreign', 'columns' => ['complemento_id'], 'references' => ['complementos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_abastecimentos_implementos1' => ['type' => 'foreign', 'columns' => ['implemento_id'], 'references' => ['implementos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_abastecimentos_veiculos1' => ['type' => 'foreign', 'columns' => ['veiculo_id'], 'references' => ['veiculos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'preco_comb' => 1,
            'preco_comp' => 1,
            'data' => '2015-08-27',
            'litros_comb' => 1,
            'litros_comp' => 1,
            'Posto' => 'Lorem ipsum dolor sit amet',
            'km_inicio' => 1,
            'km_fim' => 1,
            'media' => 'Lorem ipsum dolor sit amet',
            'veiculo_id' => 1,
            'implemento_id' => 1,
            'combustivei_id' => 1,
            'complemento_id' => 1,
            'cidade_id' => 1
        ],
    ];
}

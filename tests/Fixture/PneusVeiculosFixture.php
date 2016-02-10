<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PneusVeiculosFixture
 *
 */
class PneusVeiculosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'veiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pneu_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_veiculos_has_pneus_pneus1_idx' => ['type' => 'index', 'columns' => ['pneu_id'], 'length' => []],
            'fk_veiculos_has_pneus_veiculos1_idx' => ['type' => 'index', 'columns' => ['veiculo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_veiculos_has_pneus_pneus1' => ['type' => 'foreign', 'columns' => ['pneu_id'], 'references' => ['pneus', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_veiculos_has_pneus_veiculos1' => ['type' => 'foreign', 'columns' => ['veiculo_id'], 'references' => ['veiculos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'veiculo_id' => 1,
            'pneu_id' => 1
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MultasFixture
 *
 */
class MultasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'local' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'data' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'valor' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'pontos' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'motivo' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'veiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'implemento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'motorista_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_multas_veiculos1_idx' => ['type' => 'index', 'columns' => ['veiculo_id'], 'length' => []],
            'fk_multas_implementos1_idx' => ['type' => 'index', 'columns' => ['implemento_id'], 'length' => []],
            'fk_multas_motoristas1_idx' => ['type' => 'index', 'columns' => ['motorista_id'], 'length' => []],
            'fk_multas_cidades1_idx' => ['type' => 'index', 'columns' => ['cidade_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_multas_cidades1' => ['type' => 'foreign', 'columns' => ['cidade_id'], 'references' => ['cidades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_multas_implementos1' => ['type' => 'foreign', 'columns' => ['implemento_id'], 'references' => ['implementos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_multas_motoristas1' => ['type' => 'foreign', 'columns' => ['motorista_id'], 'references' => ['motoristas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_multas_veiculos1' => ['type' => 'foreign', 'columns' => ['veiculo_id'], 'references' => ['veiculos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'local' => 'Lorem ipsum dolor sit amet',
            'data' => '2015-08-27',
            'valor' => 1,
            'pontos' => 1,
            'motivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'veiculo_id' => 1,
            'implemento_id' => 1,
            'motorista_id' => 1,
            'cidade_id' => 1
        ],
    ];
}

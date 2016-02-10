<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ManutencoesFixture
 *
 */
class ManutencoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'motivo' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'km_veiculo' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'data' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'garantia' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'preco_obra' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'preco_peca' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'veiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'servico_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fornecedore_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'implemento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_manutencoes_veiculos1_idx' => ['type' => 'index', 'columns' => ['veiculo_id'], 'length' => []],
            'fk_manutencoes_servicos1_idx' => ['type' => 'index', 'columns' => ['servico_id'], 'length' => []],
            'fk_manutencoes_fornecedores1_idx' => ['type' => 'index', 'columns' => ['fornecedore_id'], 'length' => []],
            'fk_manutencoes_implementos1_idx' => ['type' => 'index', 'columns' => ['implemento_id'], 'length' => []],
            'fk_manutencoes_cidades1_idx' => ['type' => 'index', 'columns' => ['cidade_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_manutencoes_cidades1' => ['type' => 'foreign', 'columns' => ['cidade_id'], 'references' => ['cidades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_manutencoes_fornecedores1' => ['type' => 'foreign', 'columns' => ['fornecedore_id'], 'references' => ['fornecedores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_manutencoes_implementos1' => ['type' => 'foreign', 'columns' => ['implemento_id'], 'references' => ['implementos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_manutencoes_servicos1' => ['type' => 'foreign', 'columns' => ['servico_id'], 'references' => ['servicos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_manutencoes_veiculos1' => ['type' => 'foreign', 'columns' => ['veiculo_id'], 'references' => ['veiculos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'motivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'km_veiculo' => 1,
            'data' => '2015-08-27',
            'garantia' => 'Lorem ipsum dolor sit amet',
            'preco_obra' => 1,
            'preco_peca' => 1,
            'veiculo_id' => 1,
            'servico_id' => 1,
            'fornecedore_id' => 1,
            'implemento_id' => 1,
            'cidade_id' => 1
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImplementosPneusFixture
 *
 */
class ImplementosPneusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'implementos_pneus';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'pneus_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'implementos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_implementos_pneus_pneus1_idx' => ['type' => 'index', 'columns' => ['pneus_id'], 'length' => []],
            'fk_implementos_pneus_implementos1_idx' => ['type' => 'index', 'columns' => ['implementos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_implementos_pneus_implementos1' => ['type' => 'foreign', 'columns' => ['implementos_id'], 'references' => ['implementos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_implementos_pneus_pneus1' => ['type' => 'foreign', 'columns' => ['pneus_id'], 'references' => ['pneus', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'pneus_id' => 1,
            'implementos_id' => 1
        ],
    ];
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CombustiveisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CombustiveisTable Test Case
 */
class CombustiveisTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Combustiveis' => 'app.combustiveis',
        'Abastecimentos' => 'app.abastecimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Combustiveis') ? [] : ['className' => 'App\Model\Table\CombustiveisTable'];
        $this->Combustiveis = TableRegistry::get('Combustiveis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Combustiveis);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

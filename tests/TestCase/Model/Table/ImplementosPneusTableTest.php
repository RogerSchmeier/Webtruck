<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImplementosPneusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImplementosPneusTable Test Case
 */
class ImplementosPneusTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'ImplementosPneus' => 'app.implementos_pneus',
        'Pneuses' => 'app.pneuses',
        'Implementos' => 'app.implementos',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Multas' => 'app.multas',
        'Agendamentos' => 'app.agendamentos',
        'Manutencoes' => 'app.manutencoes',
        'Servicos' => 'app.servicos',
        'Fornecedores' => 'app.fornecedores',
        'Pneus' => 'app.pneus',
        'PneusVeiculos' => 'app.pneus_veiculos',
        'Recapagens' => 'app.recapagens',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImplementosPneus') ? [] : ['className' => 'App\Model\Table\ImplementosPneusTable'];
        $this->ImplementosPneus = TableRegistry::get('ImplementosPneus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImplementosPneus);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

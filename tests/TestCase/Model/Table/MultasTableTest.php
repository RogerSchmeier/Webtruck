<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MultasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MultasTable Test Case
 */
class MultasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Multas' => 'app.multas',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Implementos' => 'app.implementos',
        'Agendamentos' => 'app.agendamentos',
        'Manutencoes' => 'app.manutencoes',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos',
        'Fornecedores' => 'app.fornecedores',
        'Servicos' => 'app.servicos',
        'PneusVeiculos' => 'app.pneus_veiculos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Multas') ? [] : ['className' => 'App\Model\Table\MultasTable'];
        $this->Multas = TableRegistry::get('Multas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Multas);

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

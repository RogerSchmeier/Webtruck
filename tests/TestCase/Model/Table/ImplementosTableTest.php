<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImplementosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImplementosTable Test Case
 */
class ImplementosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Implementos' => 'app.implementos',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Agendamentos' => 'app.agendamentos',
        'Fornecedores' => 'app.fornecedores',
        'Manutencoes' => 'app.manutencoes',
        'Motoristas' => 'app.motoristas',
        'Multas' => 'app.multas',
        'Veiculos' => 'app.veiculos',
        'Pneus' => 'app.pneus',
        'PneusVeiculos' => 'app.pneus_veiculos',
        'Servicos' => 'app.servicos',
        'ImplementosPneus' => 'app.implementos_pneus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Implementos') ? [] : ['className' => 'App\Model\Table\ImplementosTable'];
        $this->Implementos = TableRegistry::get('Implementos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Implementos);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicosTable Test Case
 */
class ServicosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Servicos' => 'app.servicos',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Implementos' => 'app.implementos',
        'Agendamentos' => 'app.agendamentos',
        'Manutencoes' => 'app.manutencoes',
        'Multas' => 'app.multas',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'PneusVeiculos' => 'app.pneus_veiculos',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos',
        'Fornecedores' => 'app.fornecedores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Servicos') ? [] : ['className' => 'App\Model\Table\ServicosTable'];
        $this->Servicos = TableRegistry::get('Servicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servicos);

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

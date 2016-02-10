<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbastecimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbastecimentosTable Test Case
 */
class AbastecimentosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Abastecimentos' => 'app.abastecimentos',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Cidades' => 'app.cidades',
        'Agendamentos' => 'app.agendamentos',
        'Fornecedores' => 'app.fornecedores',
        'Implementos' => 'app.implementos',
        'Manutencoes' => 'app.manutencoes',
        'Multas' => 'app.multas',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'Servicos' => 'app.servicos',
        'PneusVeiculos' => 'app.pneus_veiculos',
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
        $config = TableRegistry::exists('Abastecimentos') ? [] : ['className' => 'App\Model\Table\AbastecimentosTable'];
        $this->Abastecimentos = TableRegistry::get('Abastecimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Abastecimentos);

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

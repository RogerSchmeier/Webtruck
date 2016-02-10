<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManutencoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManutencoesTable Test Case
 */
class ManutencoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Manutencoes' => 'app.manutencoes',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Implementos' => 'app.implementos',
        'Agendamentos' => 'app.agendamentos',
        'Multas' => 'app.multas',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos',
        'Fornecedores' => 'app.fornecedores',
        'Recapagens' => 'app.recapagens',
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
        $config = TableRegistry::exists('Manutencoes') ? [] : ['className' => 'App\Model\Table\ManutencoesTable'];
        $this->Manutencoes = TableRegistry::get('Manutencoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Manutencoes);

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

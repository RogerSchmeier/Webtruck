<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotoristasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotoristasTable Test Case
 */
class MotoristasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Motoristas' => 'app.motoristas',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Agendamentos' => 'app.agendamentos',
        'Fornecedores' => 'app.fornecedores',
        'Implementos' => 'app.implementos',
        'Manutencoes' => 'app.manutencoes',
        'Multas' => 'app.multas',
        'Servicos' => 'app.servicos',
        'Veiculos' => 'app.veiculos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Motoristas') ? [] : ['className' => 'App\Model\Table\MotoristasTable'];
        $this->Motoristas = TableRegistry::get('Motoristas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motoristas);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CidadesTable Test Case
 */
class CidadesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Agendamentos' => 'app.agendamentos',
        'Fornecedores' => 'app.fornecedores',
        'Implementos' => 'app.implementos',
        'Manutencoes' => 'app.manutencoes',
        'Motoristas' => 'app.motoristas',
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
        $config = TableRegistry::exists('Cidades') ? [] : ['className' => 'App\Model\Table\CidadesTable'];
        $this->Cidades = TableRegistry::get('Cidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cidades);

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

<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AgendamentosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AgendamentosController Test Case
 */
class AgendamentosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Agendamentos' => 'app.agendamentos',
        'Implementos' => 'app.implementos',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Multas' => 'app.multas',
        'Manutencoes' => 'app.manutencoes',
        'Servicos' => 'app.servicos',
        'Fornecedores' => 'app.fornecedores',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'Pneuses' => 'app.pneuses',
        'Recapagens' => 'app.recapagens',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

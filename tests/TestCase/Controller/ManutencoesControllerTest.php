<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManutencoesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ManutencoesController Test Case
 */
class ManutencoesControllerTest extends IntegrationTestCase
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
        'PneusVeiculos' => 'app.pneus_veiculos',
        'Combustiveis' => 'app.combustiveis',
        'Complementos' => 'app.complementos',
        'Fornecedores' => 'app.fornecedores',
        'Recapagens' => 'app.recapagens',
        'Servicos' => 'app.servicos'
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

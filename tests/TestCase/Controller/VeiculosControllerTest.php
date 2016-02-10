<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VeiculosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VeiculosController Test Case
 */
class VeiculosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Implementos' => 'app.implementos',
        'Agendamentos' => 'app.agendamentos',
        'Manutencoes' => 'app.manutencoes',
        'Servicos' => 'app.servicos',
        'Fornecedores' => 'app.fornecedores',
        'Pneus' => 'app.pneus',
        'ImplementosPneus' => 'app.implementos_pneus',
        'Pneuses' => 'app.pneuses',
        'PneusVeiculos' => 'app.pneus_veiculos',
        'Recapagens' => 'app.recapagens',
        'Multas' => 'app.multas',
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

<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ServicosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ServicosController Test Case
 */
class ServicosControllerTest extends IntegrationTestCase
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

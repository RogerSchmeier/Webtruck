<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ImplementosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ImplementosController Test Case
 */
class ImplementosControllerTest extends IntegrationTestCase
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
        'ImplementosPneus' => 'app.implementos_pneus',
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

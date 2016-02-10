<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RecapagensController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RecapagensController Test Case
 */
class RecapagensControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Recapagens' => 'app.recapagens',
        'Pneus' => 'app.pneus',
        'Fornecedores' => 'app.fornecedores',
        'Cidades' => 'app.cidades',
        'Abastecimentos' => 'app.abastecimentos',
        'Veiculos' => 'app.veiculos',
        'Motoristas' => 'app.motoristas',
        'Implementos' => 'app.implementos',
        'Agendamentos' => 'app.agendamentos',
        'Manutencoes' => 'app.manutencoes',
        'Servicos' => 'app.servicos',
        'Multas' => 'app.multas',
        'ImplementosPneus' => 'app.implementos_pneus',
        'PneusVeiculos' => 'app.pneus_veiculos',
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

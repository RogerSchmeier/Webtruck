<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity.
 */
class Veiculo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'modelo' => true,
        'marca' => true,
        'ano' => true,
        'motor' => true,
        'chassis' => true,
        'renavam' => true,
        'placa' => true,
        'antt' => true,
        'obs' => true,
        'motorista_id' => true,
        'eixos' => true,
        'cidade_id' => true,
        'kilometragem' => true,
        'cor' => true,
        'motorista' => true,
        'cidade' => true,
        'abastecimentos' => true,
        'agendamentos' => true,
        'manutencoes' => true,
        'multas' => true,
        'pneus' => true,
    ];
}

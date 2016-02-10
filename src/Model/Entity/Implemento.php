<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Implemento Entity.
 */
class Implemento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'modelo' => true,
        'ano' => true,
        'chassis' => true,
        'eixos' => true,
        'placa' => true,
        'renavan' => true,
        'obs' => true,
        'cidade_id' => true,
        'motorista_id' => true,
        'cor' => true,
        'antt' => true,
        'cidade' => true,
        'motorista' => true,
        'abastecimentos' => true,
        'agendamentos' => true,
        'manutencoes' => true,
        'multas' => true,
        'pneus' => true,
    ];
}

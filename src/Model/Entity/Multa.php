<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Multa Entity.
 */
class Multa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'local' => true,
        'data' => true,
        'valor' => true,
        'pontos' => true,
        'motivo' => true,
        'veiculo_id' => true,
        'implemento_id' => true,
        'motorista_id' => true,
        'cidade_id' => true,
        'veiculo' => true,
        'implemento' => true,
        'motorista' => true,
        'cidade' => true,
    ];
}

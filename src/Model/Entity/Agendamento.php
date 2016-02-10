<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agendamento Entity.
 */
class Agendamento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'motivo' => true,
        'data' => true,
        'endereco' => true,
        'implemento_id' => true,
        'veiculo_id' => true,
        'cidade_id' => true,
        'implemento' => true,
        'veiculo' => true,
        'cidade' => true,
    ];
}

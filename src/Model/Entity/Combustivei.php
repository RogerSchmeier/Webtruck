<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Combustivei Entity.
 */
class Combustivei extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'obs' => true,
        'abastecimentos' => true,
    ];
}

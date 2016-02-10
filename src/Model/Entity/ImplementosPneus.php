<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImplementosPneus Entity.
 */
class ImplementosPneus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'pneus_id' => true,
        'implementos_id' => true,
        'pneus' => true,
        'implemento' => true,
    ];
}

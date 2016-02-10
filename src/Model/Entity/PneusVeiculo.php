<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PneusVeiculo Entity.
 */
class PneusVeiculo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'veiculo' => true,
        'pneus' => true,
    ];
}

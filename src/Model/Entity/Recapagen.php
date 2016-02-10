<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recapagen Entity.
 */
class Recapagen extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'km_inicial' => true,
        'km_final' => true,
        'media_km' => true,
        'preco_recape' => true,
        'recape' => true,
        'pneu_id' => true,
        'fornecedore_id' => true,
        'dano_total' => true,
        'pneus' => true,
        'fornecedore' => true,
    ];
}

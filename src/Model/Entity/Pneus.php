<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pneus Entity.
 */
class Pneus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'marca' => true,
        'km_inicial' => true,
        'km_final' => true,
        'media_km' => true,
        'preco' => true,
        'numero' => true,
        'dano_total' => true,
        'fornecedore_id' => true,
        'fornecedore' => true,
        'implementos' => true,
        'veiculos' => true,
    ];
}

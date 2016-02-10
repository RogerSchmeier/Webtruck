<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Abastecimento Entity.
 */
class Abastecimento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'preco_comb' => true,
        'preco_comp' => true,
        'data' => true,
        'litros_comb' => true,
        'litros_comp' => true,
        'Posto' => true,
        'km_inicio' => true,
        'km_fim' => true,
        'media' => true,
        'veiculo_id' => true,
        'implemento_id' => true,
        'combustivei_id' => true,
        'complemento_id' => true,
        'cidade_id' => true,
        'veiculo' => true,
        'implemento' => true,
        'combustivei' => true,
        'complemento' => true,
        'cidade' => true,
    ];
}

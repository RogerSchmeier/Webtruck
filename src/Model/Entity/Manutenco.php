<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Manutenco Entity.
 */
class Manutenco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'motivo' => true,
        'km_veiculo' => true,
        'data' => true,
        'garantia' => true,
        'preco_obra' => true,
        'preco_peca' => true,
        'veiculo_id' => true,
        'servico_id' => true,
        'fornecedore_id' => true,
        'implemento_id' => true,
        'cidade_id' => true,
        'veiculo' => true,
        'servico' => true,
        'fornecedore' => true,
        'implemento' => true,
        'cidade' => true,
    ];
}

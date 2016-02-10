<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Motorista Entity.
 */
class Motorista extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'CPF' => true,
        'RG' => true,
        'CNH' => true,
        'data_nasc' => true,
        'data_adm' => true,
        'data_dem' => true,
        'telefone' => true,
        'celular' => true,
        'endereco' => true,
        'cidade_id' => true,
        'cidade' => true,
        'implementos' => true,
        'multas' => true,
        'veiculos' => true,
    ];
}

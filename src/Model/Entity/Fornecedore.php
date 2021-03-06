<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fornecedore Entity.
 */
class Fornecedore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fantasia' => true,
        'razao' => true,
        'cnpj' => true,
        'telefone' => true,
        'celular' => true,
        'email' => true,
        'endereco' => true,
        'cidade_id' => true,
        'cidade' => true,
        'manutencoes' => true,
        'pneus' => true,
        'recapagens' => true,
    ];
}

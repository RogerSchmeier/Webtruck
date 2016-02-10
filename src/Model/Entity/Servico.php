<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity.
 */
class Servico extends Entity
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
        'cpf' => true,
        'telefone' => true,
        'celular' => true,
        'email' => true,
        'cidade_id' => true,
        'endereco' => true,
        'cidade' => true,
        'manutencoes' => true,
    ];
}

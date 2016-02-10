<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cidade Entity.
 */
class Cidade extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'uf' => true,
        'pais' => true,
        'abastecimentos' => true,
        'agendamentos' => true,
        'fornecedores' => true,
        'implementos' => true,
        'manutencoes' => true,
        'motoristas' => true,
        'multas' => true,
        'servicos' => true,
        'veiculos' => true,
    ];
}

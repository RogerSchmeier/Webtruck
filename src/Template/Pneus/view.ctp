<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $pneus->id] ,['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pneus->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $pneus->id)]) ?> </li>
        </ul>
</div>
<div class="pneus view large-10 medium-9 columns">
    <h2><?= h($pneus->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Marca') ?></h6>
            <p><?= h($pneus->marca) ?></p>
            <h6 class="subheader"><?= __('Dano Total') ?></h6>
            <p><?= h($pneus->dano_total) ?></p>
            <h6 class="subheader"><?= __('Fornecedore') ?></h6>
            <p><?= $pneus->has('fornecedore') ? $this->Html->link($pneus->fornecedore->fantasia, ['controller' => 'Fornecedores', 'action' => 'view', $pneus->fornecedore->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pneus->id) ?></p>
            <h6 class="subheader"><?= __('Km Inicial') ?></h6>
            <p><?= $this->Number->format($pneus->km_inicial) ?></p>
            <h6 class="subheader"><?= __('Km Final') ?></h6>
            <p><?= $this->Number->format($pneus->km_final) ?></p>
            <h6 class="subheader"><?= __('Media Km') ?></h6>
            <p><?= $this->Number->format($pneus->media_km) ?></p>
            <h6 class="subheader"><?= __('Preco') ?></h6>
            <p><?= $this->Number->format($pneus->preco) ?></p>
            <h6 class="subheader"><?= __('Numero') ?></h6>
            <p><?= $this->Number->format($pneus->numero) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ImplementosPneus') ?></h4>
    <?php if (!empty($pneus->implementos_pneus)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Pneu Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pneus->implementos_pneus as $implementosPneus): ?>
        <tr>
            <td><?= h($implementosPneus->pneu_id) ?></td>
            <td><?= h($implementosPneus->implemento_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ImplementosPneus', 'action' => 'view', $implementosPneus->pneu_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ImplementosPneus', 'action' => 'edit', $implementosPneus->pneu_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ImplementosPneus', 'action' => 'delete', $implementosPneus->pneu_id], ['confirm' => __('Are you sure you want to delete # {0}?', $implementosPneus->pneu_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PneusVeiculos') ?></h4>
    <?php if (!empty($pneus->pneus_veiculos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Pneu Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pneus->pneus_veiculos as $pneusVeiculos): ?>
        <tr>
            <td><?= h($pneusVeiculos->veiculo_id) ?></td>
            <td><?= h($pneusVeiculos->pneu_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PneusVeiculos', 'action' => 'view', $pneusVeiculos->veiculo_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PneusVeiculos', 'action' => 'edit', $pneusVeiculos->veiculo_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PneusVeiculos', 'action' => 'delete', $pneusVeiculos->veiculo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pneusVeiculos->veiculo_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Implementos') ?></h4>
    <?php if (!empty($pneus->implementos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Modelo') ?></th>
            <th><?= __('Ano') ?></th>
            <th><?= __('Chassis') ?></th>
            <th><?= __('Eixos') ?></th>
            <th><?= __('Placa') ?></th>
            <th><?= __('Renavan') ?></th>
            <th><?= __('Obs') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Cor') ?></th>
            <th><?= __('Antt') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pneus->implementos as $implementos): ?>
        <tr>
            <td><?= h($implementos->id) ?></td>
            <td><?= h($implementos->modelo) ?></td>
            <td><?= h($implementos->ano) ?></td>
            <td><?= h($implementos->chassis) ?></td>
            <td><?= h($implementos->eixos) ?></td>
            <td><?= h($implementos->placa) ?></td>
            <td><?= h($implementos->renavan) ?></td>
            <td><?= h($implementos->obs) ?></td>
            <td><?= h($implementos->cidade_id) ?></td>
            <td><?= h($implementos->motorista_id) ?></td>
            <td><?= h($implementos->cor) ?></td>
            <td><?= h($implementos->antt) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Implementos', 'action' => 'view', $implementos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Implementos', 'action' => 'edit', $implementos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Implementos', 'action' => 'delete', $implementos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $implementos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Veiculos') ?></h4>
    <?php if (!empty($pneus->veiculos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Modelo') ?></th>
            <th><?= __('Marca') ?></th>
            <th><?= __('Ano') ?></th>
            <th><?= __('Motor') ?></th>
            <th><?= __('Chassis') ?></th>
            <th><?= __('Renavam') ?></th>
            <th><?= __('Placa') ?></th>
            <th><?= __('Antt') ?></th>
            <th><?= __('Obs') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Eixos') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th><?= __('Kilometragem') ?></th>
            <th><?= __('Cor') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pneus->veiculos as $veiculos): ?>
        <tr>
            <td><?= h($veiculos->id) ?></td>
            <td><?= h($veiculos->modelo) ?></td>
            <td><?= h($veiculos->marca) ?></td>
            <td><?= h($veiculos->ano) ?></td>
            <td><?= h($veiculos->motor) ?></td>
            <td><?= h($veiculos->chassis) ?></td>
            <td><?= h($veiculos->renavam) ?></td>
            <td><?= h($veiculos->placa) ?></td>
            <td><?= h($veiculos->antt) ?></td>
            <td><?= h($veiculos->obs) ?></td>
            <td><?= h($veiculos->motorista_id) ?></td>
            <td><?= h($veiculos->eixos) ?></td>
            <td><?= h($veiculos->cidade_id) ?></td>
            <td><?= h($veiculos->kilometragem) ?></td>
            <td><?= h($veiculos->cor) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Veiculos', 'action' => 'view', $veiculos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Veiculos', 'action' => 'edit', $veiculos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Veiculos', 'action' => 'delete', $veiculos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

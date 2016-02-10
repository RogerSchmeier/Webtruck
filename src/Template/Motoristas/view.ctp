<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $motorista->id], ['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $motorista->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $motorista->id)]) ?> </li>
        </ul>
</div>
<div class="motoristas view large-10 medium-9 columns">
    <h2><?= h($motorista->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($motorista->nome) ?></p>
            <h6 class="subheader"><?= __('CPF') ?></h6>
            <p><?= h($motorista->CPF) ?></p>
            <h6 class="subheader"><?= __('RG') ?></h6>
            <p><?= h($motorista->RG) ?></p>
            <h6 class="subheader"><?= __('CNH') ?></h6>
            <p><?= h($motorista->CNH) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= h($motorista->telefone) ?></p>
            <h6 class="subheader"><?= __('Celular') ?></h6>
            <p><?= h($motorista->celular) ?></p>
            <h6 class="subheader"><?= __('Endereco') ?></h6>
            <p><?= h($motorista->endereco) ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $motorista->has('cidade') ? $this->Html->link($motorista->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $motorista->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($motorista->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Nasc') ?></h6>
            <p><?= h($motorista->data_nasc) ?></p>
            <h6 class="subheader"><?= __('Data Adm') ?></h6>
            <p><?= h($motorista->data_adm) ?></p>
            <h6 class="subheader"><?= __('Data Dem') ?></h6>
            <p><?= h($motorista->data_dem) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Implementos') ?></h4>
    <?php if (!empty($motorista->implementos)): ?>
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
        <?php foreach ($motorista->implementos as $implementos): ?>
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
    <h4 class="subheader"><?= __('Related Multas') ?></h4>
    <?php if (!empty($motorista->multas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Local') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Valor') ?></th>
            <th><?= __('Pontos') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($motorista->multas as $multas): ?>
        <tr>
            <td><?= h($multas->id) ?></td>
            <td><?= h($multas->local) ?></td>
            <td><?= h($multas->data) ?></td>
            <td><?= h($multas->valor) ?></td>
            <td><?= h($multas->pontos) ?></td>
            <td><?= h($multas->motivo) ?></td>
            <td><?= h($multas->veiculo_id) ?></td>
            <td><?= h($multas->implemento_id) ?></td>
            <td><?= h($multas->motorista_id) ?></td>
            <td><?= h($multas->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Multas', 'action' => 'view', $multas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Multas', 'action' => 'edit', $multas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Multas', 'action' => 'delete', $multas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $multas->id)]) ?>

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
    <?php if (!empty($motorista->veiculos)): ?>
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
        <?php foreach ($motorista->veiculos as $veiculos): ?>
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

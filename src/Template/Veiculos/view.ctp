<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $veiculo->id] ,['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculo->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $veiculo->id)]) ?> </li>
    </ul>
</div>
<div class="veiculos view large-10 medium-9 columns">
    <h2><?= h($veiculo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Modelo') ?></h6>
            <p><?= h($veiculo->modelo) ?></p>
            <h6 class="subheader"><?= __('Marca') ?></h6>
            <p><?= h($veiculo->marca) ?></p>
            <h6 class="subheader"><?= __('Motor') ?></h6>
            <p><?= h($veiculo->motor) ?></p>
            <h6 class="subheader"><?= __('Chassis') ?></h6>
            <p><?= h($veiculo->chassis) ?></p>
            <h6 class="subheader"><?= __('Renavam') ?></h6>
            <p><?= h($veiculo->renavam) ?></p>
            <h6 class="subheader"><?= __('Placa') ?></h6>
            <p><?= h($veiculo->placa) ?></p>
            <h6 class="subheader"><?= __('Antt') ?></h6>
            <p><?= h($veiculo->antt) ?></p>
            <h6 class="subheader"><?= __('Motorista') ?></h6>           
            <p><?= $veiculo->has('motorista') ? $this->Html->link($veiculo->motorista->nome, ['controller' => 'Motoristas', 'action' => 'view', $veiculo->motorista->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $veiculo->has('cidade') ? $this->Html->link($veiculo->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $veiculo->cidade->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cor') ?></h6>
            <p><?= h($veiculo->cor) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($veiculo->id) ?></p>
            <h6 class="subheader"><?= __('Eixos') ?></h6>
            <p><?= $this->Number->format($veiculo->eixos) ?></p>
            <h6 class="subheader"><?= __('Kilometragem') ?></h6>
            <p><?= $this->Number->format($veiculo->kilometragem) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Ano') ?></h6>
            <?= $this->Text->autoParagraph(h($veiculo->ano)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Obs') ?></h6>
            <?= $this->Text->autoParagraph(h($veiculo->obs)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Histórico de Abastecimentos') ?></h4>
    <?php if (!empty($veiculo->abastecimentos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Preco Comb') ?></th>
            <th><?= __('Preco Comp') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Litros Comb') ?></th>
            <th><?= __('Litros Comp') ?></th>
            <th><?= __('Posto') ?></th>
            <th><?= __('Km Inicio') ?></th>
            <th><?= __('Km Fim') ?></th>
            <th><?= __('Media') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Combustivei Id') ?></th>
            <th><?= __('Complemento Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($veiculo->abastecimentos as $abastecimentos): ?>
        <tr>
            <td><?= h($abastecimentos->id) ?></td>
            <td><?= h($abastecimentos->preco_comb) ?></td>
            <td><?= h($abastecimentos->preco_comp) ?></td>
            <td><?= h($abastecimentos->data) ?></td>
            <td><?= h($abastecimentos->litros_comb) ?></td>
            <td><?= h($abastecimentos->litros_comp) ?></td>
            <td><?= h($abastecimentos->Posto) ?></td>
            <td><?= h($abastecimentos->km_inicio) ?></td>
            <td><?= h($abastecimentos->km_fim) ?></td>
            <td><?= h($abastecimentos->media) ?></td>
            <td><?= h($abastecimentos->veiculo_id) ?></td>
            <td><?= h($abastecimentos->implemento_id) ?></td>
            <td><?= h($abastecimentos->combustivei_id) ?></td>
            <td><?= h($abastecimentos->complemento_id) ?></td>
            <td><?= h($abastecimentos->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Abastecimentos', 'action' => 'view', $abastecimentos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Abastecimentos', 'action' => 'edit', $abastecimentos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Abastecimentos', 'action' => 'delete', $abastecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abastecimentos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Histórico de Agendamentos') ?></h4>
    <?php if (!empty($veiculo->agendamentos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Endereco') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($veiculo->agendamentos as $agendamentos): ?>
        <tr>
            <td><?= h($agendamentos->id) ?></td>
            <td><?= h($agendamentos->motivo) ?></td>
            <td><?= h($agendamentos->data) ?></td>
            <td><?= h($agendamentos->endereco) ?></td>
            <td><?= h($agendamentos->implemento_id) ?></td>
            <td><?= h($agendamentos->veiculo_id) ?></td>
            <td><?= h($agendamentos->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Agendamentos', 'action' => 'view', $agendamentos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Agendamentos', 'action' => 'edit', $agendamentos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendamentos', 'action' => 'delete', $agendamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendamentos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Histórico de Manutencoes') ?></h4>
    <?php if (!empty($veiculo->manutencoes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Km Veiculo') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Garantia') ?></th>
            <th><?= __('Preco Obra') ?></th>
            <th><?= __('Preco Peca') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Servico Id') ?></th>
            <th><?= __('Fornecedore Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($veiculo->manutencoes as $manutencoes): ?>
        <tr>
            <td><?= h($manutencoes->id) ?></td>
            <td><?= h($manutencoes->motivo) ?></td>
            <td><?= h($manutencoes->km_veiculo) ?></td>
            <td><?= h($manutencoes->data) ?></td>
            <td><?= h($manutencoes->garantia) ?></td>
            <td><?= h($manutencoes->preco_obra) ?></td>
            <td><?= h($manutencoes->preco_peca) ?></td>
            <td><?= h($manutencoes->veiculo_id) ?></td>
            <td><?= h($manutencoes->servico_id) ?></td>
            <td><?= h($manutencoes->fornecedore_id) ?></td>
            <td><?= h($manutencoes->implemento_id) ?></td>
            <td><?= h($manutencoes->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Manutencoes', 'action' => 'view', $manutencoes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Manutencoes', 'action' => 'edit', $manutencoes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Manutencoes', 'action' => 'delete', $manutencoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manutencoes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Histórico de Multas') ?></h4>
    <?php if (!empty($veiculo->multas)): ?>
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
        <?php foreach ($veiculo->multas as $multas): ?>
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

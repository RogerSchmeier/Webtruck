<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $servico->id] ,['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $servico->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $servico->id)]) ?> </li>
    </ul>
</div>
<div class="servicos view large-10 medium-9 columns">
    <h2><?= h($servico->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fantasia') ?></h6>
            <p><?= h($servico->fantasia) ?></p>
            <h6 class="subheader"><?= __('Razao') ?></h6>
            <p><?= h($servico->razao) ?></p>
            <h6 class="subheader"><?= __('Cnpj') ?></h6>
            <p><?= h($servico->cnpj) ?></p>
            <h6 class="subheader"><?= __('Cpf') ?></h6>
            <p><?= h($servico->cpf) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= h($servico->telefone) ?></p>
            <h6 class="subheader"><?= __('Celular') ?></h6>
            <p><?= h($servico->celular) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($servico->email) ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $servico->has('cidade') ? $this->Html->link($servico->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $servico->cidade->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Endereco') ?></h6>
            <p><?= h($servico->endereco) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($servico->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Histórico Manutenções') ?></h4>
    <?php if (!empty($servico->manutencoes)): ?>
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
        <?php foreach ($servico->manutencoes as $manutencoes): ?>
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

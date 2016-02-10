<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $fornecedore->id],['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $fornecedore->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $fornecedore->id)]) ?> </li>
        </ul>
</div>
<div class="fornecedores view large-10 medium-9 columns">
    <h2><?= h($fornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fantasia') ?></h6>
            <p><?= h($fornecedore->fantasia) ?></p>
            <h6 class="subheader"><?= __('Razao') ?></h6>
            <p><?= h($fornecedore->razao) ?></p>
            <h6 class="subheader"><?= __('Cnpj') ?></h6>
            <p><?= h($fornecedore->cnpj) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= h($fornecedore->telefone) ?></p>
            <h6 class="subheader"><?= __('Celular') ?></h6>
            <p><?= h($fornecedore->celular) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($fornecedore->email) ?></p>
            <h6 class="subheader"><?= __('Endereco') ?></h6>
            <p><?= h($fornecedore->endereco) ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $fornecedore->has('cidade') ? $this->Html->link($fornecedore->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $fornecedore->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedore->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Manutenções Relacionadas') ?></h4>
    <?php if (!empty($fornecedore->manutencoes)): ?>
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
        <?php foreach ($fornecedore->manutencoes as $manutencoes): ?>
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
    <h4 class="subheader"><?= __('Pneus Relacionados') ?></h4>
    <?php if (!empty($fornecedore->pneus)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Marca') ?></th>
            <th><?= __('Km Inicial') ?></th>
            <th><?= __('Km Final') ?></th>
            <th><?= __('Media Km') ?></th>
            <th><?= __('Preco') ?></th>
            <th><?= __('Numero') ?></th>
            <th><?= __('Dano Total') ?></th>
            <th><?= __('Fornecedore Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($fornecedore->pneus as $pneus): ?>
        <tr>
            <td><?= h($pneus->id) ?></td>
            <td><?= h($pneus->marca) ?></td>
            <td><?= h($pneus->km_inicial) ?></td>
            <td><?= h($pneus->km_final) ?></td>
            <td><?= h($pneus->media_km) ?></td>
            <td><?= h($pneus->preco) ?></td>
            <td><?= h($pneus->numero) ?></td>
            <td><?= h($pneus->dano_total) ?></td>
            <td><?= h($pneus->fornecedore_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Pneus', 'action' => 'view', $pneus->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Pneus', 'action' => 'edit', $pneus->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pneus', 'action' => 'delete', $pneus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pneus->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Recapagens Relacionadas') ?></h4>
    <?php if (!empty($fornecedore->recapagens)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Km Inicial') ?></th>
            <th><?= __('Km Final') ?></th>
            <th><?= __('Media Km') ?></th>
            <th><?= __('Preço Recape') ?></th>
            <th><?= __('Recape') ?></th>
            <th><?= __('Pneu Id') ?></th>
            <th><?= __('Fornecedore Id') ?></th>
            <th><?= __('Dano Total') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($fornecedore->recapagens as $recapagens): ?>
        <tr>
            <td><?= h($recapagens->id) ?></td>
            <td><?= h($recapagens->km_inicial) ?></td>
            <td><?= h($recapagens->km_final) ?></td>
            <td><?= h($recapagens->media_km) ?></td>
            <td><?= h($recapagens->preço_recape) ?></td>
            <td><?= h($recapagens->recape) ?></td>
            <td><?= h($recapagens->pneu_id) ?></td>
            <td><?= h($recapagens->fornecedore_id) ?></td>
            <td><?= h($recapagens->dano_total) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Recapagens', 'action' => 'view', $recapagens->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Recapagens', 'action' => 'edit', $recapagens->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recapagens', 'action' => 'delete', $recapagens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recapagens->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

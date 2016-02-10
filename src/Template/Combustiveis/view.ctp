<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $combustivei->id], ['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $combustivei->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $combustivei->id)]) ?> </li>
        </ul>
</div>
<div class="combustiveis view large-10 medium-9 columns">
    <h2><?= h($combustivei->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($combustivei->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($combustivei->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Obs') ?></h6>
            <?= $this->Text->autoParagraph(h($combustivei->obs)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Abastecimentos Relacionados') ?></h4>
    <?php if (!empty($combustivei->abastecimentos)): ?>
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
        <?php foreach ($combustivei->abastecimentos as $abastecimentos): ?>
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

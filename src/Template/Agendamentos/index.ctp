<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
       
        <li><?= $this->Html->link(__('Novo'), ['controller' => 'Agendamentos', 'action' => 'add'],['class'=>'btn btn-default btn-xs']) ?> </li>
    </ul>
</div>
<div class="agendamentos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('motivo') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('endereco') ?></th>
            <th><?= $this->Paginator->sort('implemento_id') ?></th>
            <th><?= $this->Paginator->sort('veiculo_id') ?></th>
            <th><?= $this->Paginator->sort('cidade_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($agendamentos as $agendamento): ?>
        <tr>
            <td><?= $this->Number->format($agendamento->id) ?></td>
            <td><?= h($agendamento->motivo) ?></td>
            <td><?= h($agendamento->data) ?></td>
            <td><?= h($agendamento->endereco) ?></td>
            <td>
                <?= $agendamento->has('implemento') ? $this->Html->link($agendamento->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $agendamento->implemento->id]) : '' ?>
            </td>
            <td>
                <?= $agendamento->has('veiculo') ? $this->Html->link($agendamento->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $agendamento->veiculo->id]) : '' ?>
            </td>
            <td>
                <?= $agendamento->has('cidade') ? $this->Html->link($agendamento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $agendamento->cidade->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $agendamento->id], ['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $agendamento->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $agendamento->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $agendamento->id)]) ?>
                 <?= $this->Html->link(__('Relatório'), ['action' => 'view_pdf', $agendamento->id], ['class'=>'btn btn-primary btn-xs']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

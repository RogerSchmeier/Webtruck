<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">     
        
       
        <li><?= $this->Html->link(__('Novo'), ['controller' => 'Cidades', 'action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?> </li>
    </ul>
</div>
<div class="cidades index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('uf') ?></th>
            <th><?= $this->Paginator->sort('pais') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cidades as $cidade): ?>
        <tr>
            <td><?= $this->Number->format($cidade->id) ?></td>
            <td><?= h($cidade->nome) ?></td>
            <td><?= h($cidade->uf) ?></td>
            <td><?= h($cidade->pais) ?></td>
            <td class="actions">
                <?= $this->html->link(__('Ver'), ['action' => 'view', $cidade->id], ['class'=>'btn btn-info btn-xs'] ) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cidade->id], ['class'=>'btn btn-default btn-xs'] ) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cidade->id], ['class'=>'btn btn-danger btn-xs'],  ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $cidade->id)]) ?>
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

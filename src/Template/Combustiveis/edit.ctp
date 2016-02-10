<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $combustivei->id], ['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $combustivei->id)]
            )
        ?>
    </ul>
</div>
<div class="combustiveis form large-10 medium-9 columns">
    <?= $this->Form->create($combustivei); ?>
    <fieldset>
        <legend><?= __('Editar') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $complemento->id], ['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $complemento->id)]
            )
        ?>
    </ul>
</div>
<div class="complementos form large-10 medium-9 columns">
    <?= $this->Form->create($complemento); ?>
    <fieldset>
        <legend><?= __('Edit Complemento') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $cidade->id], ['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]
            )
        ?></ul>
</div>
<div class="cidades form large-10 medium-9 columns">
    <?= $this->Form->create($cidade); ?>
    <fieldset>
        <legend><?= __('Edit Cidade') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('uf');
            echo $this->Form->input('pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success ']) ?>
    <?= $this->Form->end() ?>
</div>

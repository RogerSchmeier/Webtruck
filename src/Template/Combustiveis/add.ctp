
<div class="combustiveis form large-10 medium-9 columns">
    <?= $this->Form->create($combustivei); ?>
    <fieldset>
        <legend><?= __('Add Combustivei') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

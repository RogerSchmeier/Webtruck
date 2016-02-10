
<div class="complementos form large-10 medium-9 columns">
    <?= $this->Form->create($complemento); ?>
    <fieldset>
        <legend><?= __('Add Complemento') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),  ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

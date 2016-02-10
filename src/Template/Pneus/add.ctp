
<div class="pneus form large-10 medium-9 columns">
    <?= $this->Form->create($pneus); ?>
    <fieldset>
        <legend><?= __('Novo Pneu') ?></legend>
        <?php
            echo $this->Form->input('marca');
            echo $this->Form->input('km_inicial');
            echo $this->Form->input('km_final');
            echo $this->Form->input('media_km');
            echo $this->Form->input('preco');
            echo $this->Form->input('numero');
            echo $this->Form->input('dano_total');
            echo $this->Form->input('fornecedore_id', ['options' => $fornecedores]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

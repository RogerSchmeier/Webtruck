
<div class="recapagens form large-10 medium-9 columns">
    <?= $this->Form->create($recapagen); ?>
    <fieldset>
        <legend><?= __('Nova Recapagem') ?></legend>
        <?php
            echo $this->Form->input('km_inicial');
            echo $this->Form->input('km_final');
            echo $this->Form->input('media_km');
            echo $this->Form->input('preco_recape');
            echo $this->Form->input('recape');
            echo $this->Form->input('pneu_id', ['options' => $pneus]);
            echo $this->Form->input('fornecedore_id', ['options' => $fornecedores]);
            echo $this->Form->input('dano_total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

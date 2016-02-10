
<div class="abastecimentos form large-10 medium-9 columns">
    <?= $this->Form->create($abastecimento); ?>
    <fieldset>
        <legend><?= __('Add Abastecimento') ?></legend>
        <?php
            echo $this->Form->input('preco_comb');
            echo $this->Form->input('preco_comp');
            echo $this->Form->input('data');
            echo $this->Form->input('litros_comb');
            echo $this->Form->input('litros_comp');
            echo $this->Form->input('Posto');
            echo $this->Form->input('km_inicio');
            echo $this->Form->input('km_fim');
            echo $this->Form->input('media');
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('implemento_id', ['options' => $implementos]);
            echo $this->Form->input('combustivei_id', ['options' => $combustiveis]);
            echo $this->Form->input('complemento_id', ['options' => $complementos]);
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

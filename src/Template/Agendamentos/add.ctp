
<div class="agendamentos form large-10 medium-9 columns">
    <?= $this->Form->create($agendamento); ?>
    <fieldset>
        <legend><?= __('Add Agendamento') ?></legend>
        <?php
            echo $this->Form->input('motivo');
            echo $this->Form->input('data');
            echo $this->Form->input('endereco');
            echo $this->Form->input('implemento_id', ['options' => $implementos]);
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success ']) ?>
    <?= $this->Form->end() ?>
</div>

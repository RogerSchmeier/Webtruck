
<div class="fornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedore); ?>
    <fieldset>
        <legend><?= __('Add Fornecedore') ?></legend>
        <?php
            echo $this->Form->input('fantasia');
            echo $this->Form->input('razao');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
            echo $this->Form->input('email');
            echo $this->Form->input('endereco');
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

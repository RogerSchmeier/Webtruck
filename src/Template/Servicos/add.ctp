
<div class="servicos form large-10 medium-9 columns">
    <?= $this->Form->create($servico); ?>
    <fieldset>
        <legend><?= __('Novo Prestador de Serviço') ?></legend>
        <?php
            echo $this->Form->input('fantasia');
            echo $this->Form->input('razao');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('cpf');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
            echo $this->Form->input('email');
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

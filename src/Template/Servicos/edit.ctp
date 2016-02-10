<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $servico->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $servico->id)]
            )
        ?>
    </ul>
</div>
<div class="servicos form large-10 medium-9 columns">
    <?= $this->Form->create($servico); ?>
    <fieldset>
        <legend><?= __('Editar Servico') ?></legend>
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

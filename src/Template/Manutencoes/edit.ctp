<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $manutenco->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $manutenco->id)]
            )
        ?>
</div>
<div class="manutencoes form large-10 medium-9 columns">
    <?= $this->Form->create($manutenco); ?>
    <fieldset>
        <legend><?= __('Editar Manutenção') ?></legend>
        <?php
            echo $this->Form->input('motivo');
            echo $this->Form->input('km_veiculo');
            echo $this->Form->input('data');
            echo $this->Form->input('garantia');
            echo $this->Form->input('preco_obra');
            echo $this->Form->input('preco_peca');
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('servico_id', ['options' => $servicos]);
            echo $this->Form->input('fornecedore_id', ['options' => $fornecedores]);
            echo $this->Form->input('implemento_id', ['options' => $implementos]);
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>

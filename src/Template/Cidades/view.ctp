<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $cidade->id], ['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cidade->id], ['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id)]) ?> </li>
        </ul>
</div>
<div class="cidades view large-10 medium-9 columns">
    <h2><?= h($cidade->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($cidade->nome) ?></p>
            <h6 class="subheader"><?= __('Uf') ?></h6>
            <p><?= h($cidade->uf) ?></p>
            <h6 class="subheader"><?= __('Pais') ?></h6>
            <p><?= h($cidade->pais) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cidade->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Abastecimentos') ?></h4>
    <?php if (!empty($cidade->abastecimentos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Preco Comb') ?></th>
            <th><?= __('Preco Comp') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Litros Comb') ?></th>
            <th><?= __('Litros Comp') ?></th>
            <th><?= __('Posto') ?></th>
            <th><?= __('Km Inicio') ?></th>
            <th><?= __('Km Fim') ?></th>
            <th><?= __('Media') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Combustivei Id') ?></th>
            <th><?= __('Complemento Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->abastecimentos as $abastecimentos): ?>
        <tr>
            <td><?= h($abastecimentos->id) ?></td>
            <td><?= h($abastecimentos->preco_comb) ?></td>
            <td><?= h($abastecimentos->preco_comp) ?></td>
            <td><?= h($abastecimentos->data) ?></td>
            <td><?= h($abastecimentos->litros_comb) ?></td>
            <td><?= h($abastecimentos->litros_comp) ?></td>
            <td><?= h($abastecimentos->Posto) ?></td>
            <td><?= h($abastecimentos->km_inicio) ?></td>
            <td><?= h($abastecimentos->km_fim) ?></td>
            <td><?= h($abastecimentos->media) ?></td>
            <td><?= h($abastecimentos->veiculo_id) ?></td>
            <td><?= h($abastecimentos->implemento_id) ?></td>
            <td><?= h($abastecimentos->combustivei_id) ?></td>
            <td><?= h($abastecimentos->complemento_id) ?></td>
            <td><?= h($abastecimentos->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Abastecimentos', 'action' => 'view', $abastecimentos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Abastecimentos', 'action' => 'edit', $abastecimentos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Abastecimentos', 'action' => 'delete', $abastecimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abastecimentos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __(' Agendamentos Relacionados') ?></h4>
    <?php if (!empty($cidade->agendamentos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Endereco') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->agendamentos as $agendamentos): ?>
        <tr>
            <td><?= h($agendamentos->id) ?></td>
            <td><?= h($agendamentos->motivo) ?></td>
            <td><?= h($agendamentos->data) ?></td>
            <td><?= h($agendamentos->endereco) ?></td>
            <td><?= h($agendamentos->implemento_id) ?></td>
            <td><?= h($agendamentos->veiculo_id) ?></td>
            <td><?= h($agendamentos->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Agendamentos', 'action' => 'view', $agendamentos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Agendamentos', 'action' => 'edit', $agendamentos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendamentos', 'action' => 'delete', $agendamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendamentos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Fornecedores Relacionados') ?></h4>
    <?php if (!empty($cidade->fornecedores)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Fantasia') ?></th>
            <th><?= __('Razao') ?></th>
            <th><?= __('Cnpj') ?></th>
            <th><?= __('Telefone') ?></th>
            <th><?= __('Celular') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Endereco') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->fornecedores as $fornecedores): ?>
        <tr>
            <td><?= h($fornecedores->id) ?></td>
            <td><?= h($fornecedores->fantasia) ?></td>
            <td><?= h($fornecedores->razao) ?></td>
            <td><?= h($fornecedores->cnpj) ?></td>
            <td><?= h($fornecedores->telefone) ?></td>
            <td><?= h($fornecedores->celular) ?></td>
            <td><?= h($fornecedores->email) ?></td>
            <td><?= h($fornecedores->endereco) ?></td>
            <td><?= h($fornecedores->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Fornecedores', 'action' => 'view', $fornecedores->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Fornecedores', 'action' => 'edit', $fornecedores->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fornecedores', 'action' => 'delete', $fornecedores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedores->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Implementos Relacionados') ?></h4>
    <?php if (!empty($cidade->implementos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Modelo') ?></th>
            <th><?= __('Ano') ?></th>
            <th><?= __('Chassis') ?></th>
            <th><?= __('Eixos') ?></th>
            <th><?= __('Placa') ?></th>
            <th><?= __('Renavan') ?></th>
            <th><?= __('Obs') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Cor') ?></th>
            <th><?= __('Antt') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->implementos as $implementos): ?>
        <tr>
            <td><?= h($implementos->id) ?></td>
            <td><?= h($implementos->modelo) ?></td>
            <td><?= h($implementos->ano) ?></td>
            <td><?= h($implementos->chassis) ?></td>
            <td><?= h($implementos->eixos) ?></td>
            <td><?= h($implementos->placa) ?></td>
            <td><?= h($implementos->renavan) ?></td>
            <td><?= h($implementos->obs) ?></td>
            <td><?= h($implementos->cidade_id) ?></td>
            <td><?= h($implementos->motorista_id) ?></td>
            <td><?= h($implementos->cor) ?></td>
            <td><?= h($implementos->antt) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Implementos', 'action' => 'view', $implementos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Implementos', 'action' => 'edit', $implementos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Implementos', 'action' => 'delete', $implementos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $implementos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Manutenções Relacionadas') ?></h4>
    <?php if (!empty($cidade->manutencoes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Km Veiculo') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Garantia') ?></th>
            <th><?= __('Preco Obra') ?></th>
            <th><?= __('Preco Peca') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Servico Id') ?></th>
            <th><?= __('Fornecedore Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->manutencoes as $manutencoes): ?>
        <tr>
            <td><?= h($manutencoes->id) ?></td>
            <td><?= h($manutencoes->motivo) ?></td>
            <td><?= h($manutencoes->km_veiculo) ?></td>
            <td><?= h($manutencoes->data) ?></td>
            <td><?= h($manutencoes->garantia) ?></td>
            <td><?= h($manutencoes->preco_obra) ?></td>
            <td><?= h($manutencoes->preco_peca) ?></td>
            <td><?= h($manutencoes->veiculo_id) ?></td>
            <td><?= h($manutencoes->servico_id) ?></td>
            <td><?= h($manutencoes->fornecedore_id) ?></td>
            <td><?= h($manutencoes->implemento_id) ?></td>
            <td><?= h($manutencoes->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Manutencoes', 'action' => 'view', $manutencoes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Manutencoes', 'action' => 'edit', $manutencoes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Manutencoes', 'action' => 'delete', $manutencoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manutencoes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Motoristas Relacionados') ?></h4>
    <?php if (!empty($cidade->motoristas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nome') ?></th>
            <th><?= __('CPF') ?></th>
            <th><?= __('RG') ?></th>
            <th><?= __('CNH') ?></th>
            <th><?= __('Data Nasc') ?></th>
            <th><?= __('Data Adm') ?></th>
            <th><?= __('Data Dem') ?></th>
            <th><?= __('Telefone') ?></th>
            <th><?= __('Celular') ?></th>
            <th><?= __('Endereco') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->motoristas as $motoristas): ?>
        <tr>
            <td><?= h($motoristas->id) ?></td>
            <td><?= h($motoristas->nome) ?></td>
            <td><?= h($motoristas->CPF) ?></td>
            <td><?= h($motoristas->RG) ?></td>
            <td><?= h($motoristas->CNH) ?></td>
            <td><?= h($motoristas->data_nasc) ?></td>
            <td><?= h($motoristas->data_adm) ?></td>
            <td><?= h($motoristas->data_dem) ?></td>
            <td><?= h($motoristas->telefone) ?></td>
            <td><?= h($motoristas->celular) ?></td>
            <td><?= h($motoristas->endereco) ?></td>
            <td><?= h($motoristas->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Motoristas', 'action' => 'view', $motoristas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Motoristas', 'action' => 'edit', $motoristas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Motoristas', 'action' => 'delete', $motoristas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motoristas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Multas Relacionadas') ?></h4>
    <?php if (!empty($cidade->multas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Local') ?></th>
            <th><?= __('Data') ?></th>
            <th><?= __('Valor') ?></th>
            <th><?= __('Pontos') ?></th>
            <th><?= __('Motivo') ?></th>
            <th><?= __('Veiculo Id') ?></th>
            <th><?= __('Implemento Id') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->multas as $multas): ?>
        <tr>
            <td><?= h($multas->id) ?></td>
            <td><?= h($multas->local) ?></td>
            <td><?= h($multas->data) ?></td>
            <td><?= h($multas->valor) ?></td>
            <td><?= h($multas->pontos) ?></td>
            <td><?= h($multas->motivo) ?></td>
            <td><?= h($multas->veiculo_id) ?></td>
            <td><?= h($multas->implemento_id) ?></td>
            <td><?= h($multas->motorista_id) ?></td>
            <td><?= h($multas->cidade_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Multas', 'action' => 'view', $multas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Multas', 'action' => 'edit', $multas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Multas', 'action' => 'delete', $multas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $multas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Prestadores de Serviços Relacionados') ?></h4>
    <?php if (!empty($cidade->servicos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Fantasia') ?></th>
            <th><?= __('Razao') ?></th>
            <th><?= __('Cnpj') ?></th>
            <th><?= __('Cpf') ?></th>
            <th><?= __('Telefone') ?></th>
            <th><?= __('Celular') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th><?= __('Endereco') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->servicos as $servicos): ?>
        <tr>
            <td><?= h($servicos->id) ?></td>
            <td><?= h($servicos->fantasia) ?></td>
            <td><?= h($servicos->razao) ?></td>
            <td><?= h($servicos->cnpj) ?></td>
            <td><?= h($servicos->cpf) ?></td>
            <td><?= h($servicos->telefone) ?></td>
            <td><?= h($servicos->celular) ?></td>
            <td><?= h($servicos->email) ?></td>
            <td><?= h($servicos->cidade_id) ?></td>
            <td><?= h($servicos->endereco) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Servicos', 'action' => 'view', $servicos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Servicos', 'action' => 'edit', $servicos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicos', 'action' => 'delete', $servicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Veiculos Relacionados') ?></h4>
    <?php if (!empty($cidade->veiculos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Modelo') ?></th>
            <th><?= __('Marca') ?></th>
            <th><?= __('Ano') ?></th>
            <th><?= __('Motor') ?></th>
            <th><?= __('Chassis') ?></th>
            <th><?= __('Renavam') ?></th>
            <th><?= __('Placa') ?></th>
            <th><?= __('Antt') ?></th>
            <th><?= __('Obs') ?></th>
            <th><?= __('Motorista Id') ?></th>
            <th><?= __('Eixos') ?></th>
            <th><?= __('Cidade Id') ?></th>
            <th><?= __('Kilometragem') ?></th>
            <th><?= __('Cor') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cidade->veiculos as $veiculos): ?>
        <tr>
            <td><?= h($veiculos->id) ?></td>
            <td><?= h($veiculos->modelo) ?></td>
            <td><?= h($veiculos->marca) ?></td>
            <td><?= h($veiculos->ano) ?></td>
            <td><?= h($veiculos->motor) ?></td>
            <td><?= h($veiculos->chassis) ?></td>
            <td><?= h($veiculos->renavam) ?></td>
            <td><?= h($veiculos->placa) ?></td>
            <td><?= h($veiculos->antt) ?></td>
            <td><?= h($veiculos->obs) ?></td>
            <td><?= h($veiculos->motorista_id) ?></td>
            <td><?= h($veiculos->eixos) ?></td>
            <td><?= h($veiculos->cidade_id) ?></td>
            <td><?= h($veiculos->kilometragem) ?></td>
            <td><?= h($veiculos->cor) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Veiculos', 'action' => 'view', $veiculos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Veiculos', 'action' => 'edit', $veiculos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Veiculos', 'action' => 'delete', $veiculos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

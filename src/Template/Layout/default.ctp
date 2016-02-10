<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'WebTruck - Sua frota em boas mãos';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('sticky-footer-navbar.css') ?>


        <?= $this->Html->script('bootstrap.min.js') ?>        
        <?= $this->Html->script('ie-emulation-modes-warning.js') ?> 
        <?= $this->Html->script('jquery.min.js') ?> 
        <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>
        <?= $this->Html->script('npm.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><?= $this->Html->link(__('Agenda'), ['controller' => 'Agendamentos', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Manutenções'), ['controller' => 'Manutencoes', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Prestadores de Serviço'), ['controller' => 'Servicos', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Veículos'), ['controller' => 'Veiculos', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Implementos'), ['controller' => 'Implementos', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Motoristas'), ['controller' => 'Motoristas', 'action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Abastecimentos'), ['controller' => 'Abastecimentos', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Multas'), ['controller' => 'Multas', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                         <li><?= $this->Html->link(__('Pneus'), ['controller' => 'Pneus', 'action' => 'index']) ?></li>




                    </ul>
                    </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
       


            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="active"><i class="glyphicon glyphicon-home"></i><?= $this->fetch('title') ?></li>
                            <li class="right"><?= $this->Html->link(__('   Sair'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-danger btn-xs glyphicon glyphicon-off ']) ?></li>
                        </ol>
                    </div>


                </div>

                <div id="content">
                    <?= $this->Flash->render() ?>
                    <div class="row">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
                <footer>
                    <ul>

                    </ul>
                </footer>
            </div>
        </div>
    </body>
</html>

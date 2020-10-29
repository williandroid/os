<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Dados do Produto</a></li>
            <li><a data-toggle="tab" href="#tab2">Ordens de Serviço</a></li>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Dados</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Descrição</strong></td>
                                        <td><?php echo $result->descricao ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>EquipaID</strong></td>
                                        <td><?php echo $result->eqid ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Usuário</strong></td>
                                        <td><?php echo $result->usuario ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Patrimônio</strong></td>
                                        <td><?php echo $result->patrimonio ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;"><strong>Série</strong></td>
                                        <td><?php echo $result->serie ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;"><strong>Local</strong></td>
                                        <td><?php echo $result->local ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;"><strong>IP</strong></td>
                                        <td><?php echo $result->ip ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;"><strong>Nome do PC/Notebook</strong></td>
                                        <td><?php echo $result->nomePc ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;"><strong>Fornecedor</strong></td>
                                        <td><?php echo $result->fornecedor ?></td>
                                    </tr>                                    
                                    <tr>
                                        <td style="text-align: right;"><strong>S.O</strong></td>
                                        <td><?php echo $result->so ?></td>
                                    </tr>
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Mais Detalhes</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGTwo">
                        <div class="widget-content">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right"><strong>Unidade</strong></td>
                                        <td><?php echo $result->unidade ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Preço de Compra</strong></td>
                                        <td>R$ <?php echo $result->precoCompra; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Preço de Venda</strong></td>
                                        <td>R$ <?php echo $result->precoVenda; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Estoque</strong></td>
                                        <td><?php echo $result->estoque; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Estoque Mínimo</strong></td>
                                        <td><?php echo $result->estoqueMinimo; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Data Compra</strong></td>
                                        <td><?php echo $result->dataCompra; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Data Garantia</strong></td>
                                        <td><?php echo $result->dataGarantia; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Observação</strong></td>
                                        <td><?php echo $result->obs; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>

                <table class="table table-bordered ">
                    <thead>
                        <tr style="backgroud-color: #2D335B">
                            <th>#</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>Descricao</th>
                            <th>Defeito</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td colspan="6">Nenhuma OS Cadastrada</td>
                        </tr>
                    </tbody>
                </table>

            <?php } else { ?>

                <table class="table table-bordered ">
                    <thead>
                        <tr style="backgroud-color: #2D335B">
                            <th>#</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>Descricao</th>
                            <th>Defeito</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($results as $r) {
                            $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
                            $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));
                            echo '<tr>';
                            echo '<td>' . $r->idOs . '</td>';
                            echo '<td>' . $dataInicial . '</td>';
                            echo '<td>' . $dataFinal . '</td>';
                            echo '<td>' . $r->descricaoProduto . '</td>';
                            echo '<td>' . $r->defeito . '</td>';

                            echo '<td>';
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                                echo '<a href="' . base_url() . 'index.php/os/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                            }
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                                echo '<a href="' . base_url() . 'index.php/os/editar/' . $r->idOs . '" class="btn btn-info tip-top" title="Editar OS"><i class="icon-pencil icon-white"></i></a>';
                            }

                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                        <tr>

                        </tr>
                    </tbody>
                </table>


<?php } ?>

        </div>
    </div>
</div>
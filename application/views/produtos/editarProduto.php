<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Editar Produto</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <?php echo form_hidden('idProdutos', $result->idProdutos) ?>
                        <label for="descricao" class="control-label">Descrição<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descricao" type="text" name="descricao" value="<?php echo $result->descricao; ?>"  />
                        </div>
                        <div class="control-group">
                            <label for="eqid" class="control-label">EQ-ID<span class="required"></span></label>
                            <div class="controls">
                                <input id="eqid" type="text" name="eqid" value="<?php echo $result->eqid; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="usuario" class="control-label">Usuário<span class="required"></span></label>
                            <div class="controls">
                                <input id="usuario" type="text" name="usuario" value="<?php echo $result->usuario; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="patrimonio" class="control-label">Patrimônio<span class="required"></span></label>
                            <div class="controls">
                                <input id="patrimonio" type="text" name="patrimonio" value="<?php echo $result->patrimonio; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="serie" class="control-label">Série</label>
                            <div class="controls">
                                <input id="serie" type="text" name="serie" value="<?php echo $result->serie; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="local" class="control-label">Local</label>
                            <div class="controls">
                                <input id="local" type="text" name="local" value="<?php echo $result->local; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="ip" class="control-label">IP<span class="required"></span></label>
                            <div class="controls">
                                <input id="ip" type="text" name="ip" value="<?php echo $result->ip; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="nomePc" class="control-label">Nome do PC/Notebook<span class="required"></span></label>
                            <div class="controls">
                                <input id="nomePc" type="text" name="nomePc" value="<?php echo $result->nomePc; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="fornecedor" class="control-label">Fornecedor</label>
                            <div class="controls">
                                <input id="fornecedor" type="text" name="fornecedor" value="<?php echo $result->fornecedor; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="so" class="control-label">S.O<span class="required"></span></label>
                            <div class="controls">
                                <input id="so" type="text" name="so" value="<?php echo $result->so; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="unidade" class="control-label">Unidade<span class="required">*</span></label>
                            <div class="controls">
                                <input id="unidade" type="text" name="unidade" value="<?php echo $result->unidade; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="precoCompra" class="control-label">Preço de Compra<span class="required">*</span></label>
                            <div class="controls">
                                <input id="precoCompra" class="money" type="text" name="precoCompra" value="<?php echo $result->precoCompra; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="precoVenda" class="control-label">Preço de Venda<span class="required">*</span></label>
                            <div class="controls">
                                <input id="precoVenda" class="money" type="text" name="precoVenda" value="<?php echo $result->precoVenda; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="estoque" class="control-label">Estoque<span class="required">*</span></label>
                            <div class="controls">
                                <input id="estoque" type="text" name="estoque" value="<?php echo $result->estoque; ?>"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="estoqueMinimo" class="control-label">Estoque Mínimo</label>
                            <div class="controls">
                                <input id="estoqueMinimo" type="text" name="estoqueMinimo" value="<?php echo $result->estoqueMinimo; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="dataCompra" class="control-label">Data Compra</label>
                            <div class="controls">
                                <input id="dataCompra" type="text" name="dataCompra" value="<?php echo $result->dataCompra; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="dataGarantia" class="control-label">Data Garantia</label>
                            <div class="controls">
                                <input id="dataGarantia" type="text" name="dataGarantia" value="<?php echo $result->dataGarantia; ?>"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="obs" class="control-label">Observação</label>
                            <div class="controls">                            
                                <textarea name="obs" id="obs" cols="30" rows="5"><?php echo $result->obs?></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="span12">
                                <div class="span6 offset3">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Alterar</button>
                                    <a href="<?php echo base_url() ?>index.php/produtos" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                </div>
                            </div>
                        </div>


                </form>
            </div>

        </div>
    </div>
</div>


<script src="<?php echo base_url() ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".money").maskMoney();

        $('#formProduto').validate({
            rules: {
                descricao: {required: true},
                unidade: {required: true},
                precoCompra: {required: true},
                precoVenda: {required: true},
                estoque: {required: true}
            },
            messages: {
                descricao: {required: 'Campo Requerido.'},
                unidade: {required: 'Campo Requerido.'},
                precoCompra: {required: 'Campo Requerido.'},
                precoVenda: {required: 'Campo Requerido.'},
                estoque: {required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>





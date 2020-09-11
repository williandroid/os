<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Cadastro de Produto</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descricao" type="text" name="descricao" value="<?php echo set_value('descricao'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="eqid" class="control-label">EQ-ID</label>
                        <div class="controls">
                            <input id="eqid" type="text" name="eqid" value="<?php echo set_value('eqid'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="usuario" class="control-label">Usuário</label>
                        <div class="controls">
                            <input id="usuario" type="text" name="usuario" value="<?php echo set_value('usuario'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="patrimonio" class="control-label">Patrimônio</label>
                        <div class="controls">
                            <input id="patrimonio" type="text" name="patrimonio" value="<?php echo set_value('patrimonio'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="ip" class="control-label">IP</label>
                        <div class="controls">
                            <input id="ip" type="text" name="ip" value="<?php echo set_value('ip'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nomePc" class="control-label">Nome do PC/Notebook</label>
                        <div class="controls">
                            <input id="nomePc" type="text" name="nomePc" value="<?php echo set_value('nomePc'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="so" class="control-label">S.O</label>
                        <div class="controls">
                            <input id="so" type="text" name="so" value="<?php echo set_value('so'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="unidade" class="control-label">Unidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="unidade" type="text" name="unidade" value="<?php echo set_value('unidade'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precoCompra" class="control-label">Preço de Compra<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precoCompra" class="money" type="text" name="precoCompra" value="<?php echo set_value('precoCompra'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precoVenda" class="control-label">Preço de Venda<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precoVenda" class="money" type="text" name="precoVenda" value="<?php echo set_value('precoVenda'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="estoque" class="control-label">Estoque<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estoque" type="text" name="estoque" value="<?php echo set_value('estoque'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="estoqueMinimo" class="control-label">Estoque Mínimo</label>
                        <div class="controls">
                            <input id="estoqueMinimo" type="text" name="estoqueMinimo" value="<?php echo set_value('estoqueMinimo'); ?>"  />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
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




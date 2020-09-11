<?php $totalServico = 0; $totalProdutos = 0;?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Ordem de Serviço</h5>
                <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'eOs')){
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/os/editar/'.$result->idOs.'"><i class="icon-pencil icon-white"></i> Editar</a>'; 
                    } ?>
                    
                    <a id="imprimir" title="Imprimir" class="btn btn-mini btn-inverse" href=""><i class="icon-print icon-white"></i> Imprimir</a>
                </div>
            </div>
            <div class="widget-content" id="printOs">
                <div class="invoice-content">
                    <div class="invoice-head" style="margin-bottom: 0">

                        <table class="table">
                            <tbody>
                                <?php if($emitente == null) {?>
                                            
                                <tr>
                                    <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                                </tr>
                                <?php } else {?>
                                <tr>
                                    <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>
                                    <td> <span style="font-size: 15px; "> <?php echo $emitente[0]->nome; ?></span> </br></br><span style="font-size: 12px; ">CNPJ: <?php echo $emitente[0]->cnpj; ?> </br> <?php echo $emitente[0]->rua.', nº:'.$emitente[0]->numero.', '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span style="font-size: 12px; "> E-mail: <?php echo $emitente[0]->email.' - Fone: '.$emitente[0]->telefone; ?></span></td>
                                    <td style="width: 15%; text-align: center">#Protocolo: <span ><?php echo $result->idOs?></span></br> </br> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>

                
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h6>Cliente</h6>
                                                <span style="font-size: 12px; "><?php echo $result->nomeCliente?></span><br/>
                                                <span style="font-size: 12px; "><?php echo $result->rua?>, <?php echo $result->numero?>, <?php echo $result->bairro?></span><br/>
                                                <span style="font-size: 12px; "><?php echo $result->cidade?> - <?php echo $result->estado?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h6>Responsável</h6></span>
                                                <span style="font-size: 12px; "><?php echo $result->nome?></span> <br/>
                                                <span style="font-size: 12px; ">Telefone: <?php echo $result->telefone?></span><br/>
                                                <span style="font-size: 12px; ">Email: <?php echo $result->email?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
      
                    </div>

                    <div style="margin-top: 0; padding-top: 0">

                    <?php if($result->descricaoProduto != null){?>
                    <hr style="margin-top: 0">
                    <h5>Descrição</h5>
                    <p style="font-size: 12px;">
                        <?php echo $result->descricaoProduto?>
                        
                    </p>
                    <?php }?>

                    <?php if($result->defeito != null){?>
                    <hr style="margin-top: 0">
                    <h5>Defeito</h5>
                    <p style="font-size: 12px;">
                        <?php echo $result->defeito?>
                    </p>
                    <?php }?>
                    <?php if($result->laudoTecnico != null){?>
                    <hr style="margin-top: 0">
                    <h5>Laudo Técnico</h5>
                    <p style="font-size: 12px;">
                        <?php echo $result->laudoTecnico?>
                    </p>
                    <?php }?>
                    <?php if($result->observacoes != null){?>
                    <hr style="margin-top: 0">
                    <h5>Observações</h5>
                    <p style="font-size: 12px;">
                        <?php echo $result->observacoes?>
                    </p>
                    <?php }?>

                        <?php if($produtos != null){?>
                        <br />
                        <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th><span style="font-size: 12px; ">Código</span></th>
                                            <th><span style="font-size: 12px; ">EQ-ID</span></th>
                                            <th><span style="font-size: 12px; ">Equipamento</span></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($produtos as $p) {
                                            echo '<td><span style="font-size: 12px; ">'.$p->idProdutos.'</span></td>';
                                            echo '<td><span style="font-size: 12px; ">'.$p->eqid.'</span></td>';
                                            echo '<td><span style="font-size: 12px; ">'.$p->descricao.'</span></td>';
                                        }?>
                                    </tbody>
                                </table>
                               <?php }?>
                        
                        <?php if($servicos != null){?>
                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><span style="font-size: 12px; ">Serviço</span></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        setlocale(LC_MONETARY, 'en_US');
                                        foreach ($servicos as $s) {                                            
                                            echo '<td><span style="font-size: 12px; ">'.$s->nome.'</span></td>';
                                        }?>                                     
                                        </tbody>
                                    </table>
                        <?php }?>
                        <hr />
                    
                        <!--<h4 style="text-align: right">Valor Total: R$ <?php// echo number_format($totalProdutos + $totalServico,2,',','.');?></h4>-->

                        <h5>Assinatura do Responsável Técnico:____________________________________________</h5>
                        <h5>Assinatura do Cliente: ________________________________________________________</h5>
                        <h5>Data da Conclusão: ____/____/_______</h5>
                        
                    </div>
            

                    
                    
              
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#imprimir").click(function(){         
            PrintElem('#printOs');
        })

        function PrintElem(elem)
        {
            Popup($(elem).html());
        }

        function Popup(data)
        {
            var mywindow = window.open('', 'mydiv', 'height=600,width=800');
            mywindow.document.open();
            mywindow.document.onreadystatechange=function(){
             if(this.readyState==='complete'){
              this.onreadystatechange=function(){};
              mywindow.focus();
              mywindow.print();
              mywindow.close();
             }
            }


            mywindow.document.write('<html><head><title>Map Os</title>');
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap-responsive.min.css' />");


            mywindow.document.write("</head><body >");
            mywindow.document.write(data);          
            mywindow.document.write("</body></html>");

            mywindow.document.close(); // necessary for IE >= 10


            return true;
        }

    });
</script>
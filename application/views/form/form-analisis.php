<div class="col-xs-8 contenedor-formulario">
    <div class="wrap">
      <div class="login-logo text-center">
          <img src="<?=base_url()?>public/imagenes/icono_aurum.png" class="logo-mini" width="100px">
      </div>
      <p class="text-center bg_texto"><?=$title?></p>

      <div class="bg_texto" id="message"><?php echo $message;?></div>

      <?php
        $attr = array('class' => 'formulario', 'id' => 'formulario_analisis');
        echo form_open("cpanel/analisis", $attr);
      ?>
      <div class="text-center col-xs-12">
      <div class="col-xs-6">
        <div class="input-group">
          <?php
            $attrLabelNomApe = array('class' => 'label', 'id' => 'Nombre/Apellido');
            echo form_input($nomb_ape);
            echo lang('form_analisis_nom_ape', 'nomb_ape', $attrLabelNomApe);
          ?>
        </div>
        <div class="input-group">
          <?php
            $attrLabelDocIdent = array('class' => 'label', 'id' => 'C.I/RIF');
            echo form_input($doc_identidad);
            echo lang('form_analisis_doc_identidad', 'doc_identidad', $attrLabelDocIdent);
          ?>
        </div>
        <div class="input-group">
          <?php
            $attrLabelPesoAire = array('class' => 'label', 'id' => 'Peso Al Aire');
            echo form_input($peso_1);
            echo lang('form_analisis_peso1', 'peso_1', $attrLabelPesoAire);
          ?>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="input-group">
          <?php
            $attrLabelPesoSumergido = array('class' => 'label', 'id' => 'Peso Sumergido');
            echo form_input($peso_2);
            echo lang('form_analisis_peso2', 'peso_2', $attrLabelPesoSumergido);
          ?>
        </div>
        <div class="input-group">
          <?php
            $attrLabelTemp = array('class' => 'label', 'id' => 'Temperatura');
            echo form_input($temperatura);
            echo lang('form_analisis_temperatura', 'temperatura', $attrLabelTemp);
          ?>
        </div>
        <p><?php echo form_submit('submit', lang('form_analisis_submit_btn'));?></p>
      </div>

      <?php echo form_close();?>

      </div>
  </div>
</div>
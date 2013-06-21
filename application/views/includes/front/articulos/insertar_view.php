<div id="insert_articulo" data-role="content">
    <h2>Inserta un artículo nuevo:</h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('front/articulos/insertar_articulo'); ?>

    <fieldset data-role="fieldcontain">
        <div class="control_group">
            <label class="control_label">Titulo</label>
            <div class="controls">
                <input type="text" id="titulo" name="titulo" value="<?php echo set_value('titulo'); ?>" size="50">
            </div>
        </div>

        <div class="control_group">
            <label class="control_label">Cuerpo</label>
            <div class="controls">
                <input type="text" id="cuerpo" name="cuerpo" value="<?php echo set_value('cuerpo'); ?>" size="150">
            </div>
        </div>

        <div class="control_group">
            <label class="control_label">Sección</label>
            <div class="controls">
                <input type="text" id="seccion" name="seccion" value="<?php echo set_value('seccion'); ?>" size="2">
            </div>
        </div>


        <div class="form_actions">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn">Cancelar</button>
        </div>
    </fieldset>
</form>

</div>


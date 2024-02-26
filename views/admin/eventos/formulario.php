<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Infornación Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre Evento"
            
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea
            class="formulario__input"
            id="descripcion"
            name="descripcion"
            placeholder="Descripción Evento"
            rows="8"
            
        ></textarea>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoria o Tipo de Evento</label>
        <select 
            class="formulario__select"
            id="categoria"
            name="categoria_id">
                <option value="" disabled selected>--Seleccione--</option>
                <?php foreach($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
                    
                <?php } ?>  
        </select>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el Día</label>
        <div class="formulario__radio">
            <?php foreach($dias as $dia) { ?>
                <div class="formulario__radio-grupo">
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>

                    <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre); ?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                        
                    />
                </div>
            <?php } ?>
    </div>

   <div id="horas" class="formulario__campo">
        <label class="formulario__label">Selecciona Hora</label>

        <ul class="horas">
            <?php foreach($horas as $hora) { ?>
                <li class="horas__hora"><?php echo $hora->hora; ?></li>
            <?php }?>
        </ul>
   </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponentes</label>
        <input
            type="text"
            class="formulario__input"
            id="ponentes"
            placeholder=" Buscar Ponentes "
            
        >
    </div>


    <div class="formulario__campo">
        <label for="disponobles" class="formulario__label">Lugares Disponibles</label>
        <input
            type="number"
            min="1"
            class="formulario__input"
            id="disponobles"
            name="disponobles"
            placeholder=" Ej. 20"
            
        >
    </div>



    
    
</fieldset>

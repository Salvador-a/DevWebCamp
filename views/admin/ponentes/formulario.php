<fieldset>
    <legend>Informacion Personal</legend>
    
    <div class="formulario__campo">
        <label for="nombre" class="formualario__label" >Nombre</label>
        <input
             type="text"
             class="formulario__input" 
             id="nombre"
             name="nombre" 
             placeholder="Nombre Ponente"
             value="<?php $ponente->nombre ?? ''; ?>" required
        />
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formualario__label" >Apellido</label>
        <input
             type="text"
             class="formulario__input" 
             id="apellido"
             name="apellido" 
             placeholder="Apellido Ponente"
             value="<?php $ponente->apellido ?? ''; ?>" required
        />
    </div>

   
</fieldset>
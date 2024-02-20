<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Regístrate en DevWebCamp</p>
    
    <form class="formulario" action="">

        <div class="formulario__campo">
            <label class="formulario__label" for="nombre">Nombre</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
            />
        </div> 


        <div class="formulario__campo">
            <label class="formulario__label" for="apellido">Apellido</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
            />
        </div> 

        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            />
        </div>
        
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            />
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password2">Repetir Password</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Password"
                id="password2"
                name="password2"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Crea Tu Cuenta" />
    </form>

    <div class="acciones">

        <a href="/login" class="acciones__enlace">¿Ya tiens cuenta? Inicia Sesión </a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
    
</main>
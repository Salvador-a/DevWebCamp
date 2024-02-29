(function() {
    const ponentesInput = document.querySelector('#ponentes');

    if(ponentesInput) {

        let ponentes = [];
        let ponentesFiltrados = [];

        const listadoPonentes = document.querySelector('#listado-ponentes')
        const ponentesHidden = document.querySelector('[name="ponente_id"]')

        obtenerPonentes();
        ponentesInput.addEventListener('input', buscarPonentes);

        async function obtenerPonentes() { 
            
            const url = `/api/ponentes`;

            const respuesta = await fetch(url);
            const resultado = await respuesta.json();

            formatearPonentes(resultado);
        }

        // Formater ponentes
        function formatearPonentes(arrayPonentes = []) {
            ponentes = arrayPonentes.map( ponente => {
                return {
                    nombre: `${ponente.nombre.trim()} ${ponente.apellido.trim()}`,
                    id: ponente.id
                } 
            })
        }

        function buscarPonentes(e) {
            const busqueda = e.target.value;

            if(busqueda.length > 3) {
                const expresion = new RegExp(busqueda, 'i');
                ponentesFiltrados = ponentes.filter( ponente => {
                    if(ponente.nombre.toLowerCase().search(expresion) != -1) {
                        return ponente;
                    } 
                })
            } else {
                ponentesFiltrados = [];
            
            }

            mostrarPonentes();
        }

        function mostrarPonentes() {

           
            while(listadoPonentes.firstChild) {
                listadoPonentes.removeChild(listadoPonentes.firstChild)
            }

            if(ponentesFiltrados.length >0 ) {
                
                ponentesFiltrados.forEach(ponente => {
                    const ponenteHTML = document.createElement('LI');
                    ponenteHTML.classList.add('listado-ponentes__ponente')
                    ponenteHTML.textContent = ponente.nombre;
                    ponenteHTML.dataset.ponenteId = ponente.id;
                    ponenteHTML.onclick = seleccionarPonente;
    
                    // Añadir al dom
                    listadoPonentes.appendChild(ponenteHTML)
    
                })
            } else {
                const noResultado = document.createElement('P');
                noResultado.classList.add('listado-ponentes__no-resultado')
                noResultado.textContent = 'No hay resultados para tu busqueda ';
                listadoPonentes.appendChild(noResultado)
            }

        }

        function seleccionarPonente(e) {
            const ponente = e.target;

            // Remover la clase previa
            const ponentePrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');
            if(ponentePrevio) {
                ponentePrevio.classList.remove('listado-ponentes__ponente--seleccionado');
            }

            ponente.classList.add('listado-ponentes__ponente--seleccionado');

            ponentesHidden.value = ponente.dataset.ponenteId;
            


        }

    }

})();
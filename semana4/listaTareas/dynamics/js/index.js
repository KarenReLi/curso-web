window.addEventListener ("load", () => 
{
    const formulario = document.getElementById ("formulario");
    const nombreNuevaMateria = document.getElementById ("nuevaMateria");
    const select = document.getElementById ("Materia");
    const nombreNuevaTarea = document.getElementById ("Tareas");
    //const divTareas = document.getElementById ("Secciones");
    let arregloTareas = [''];
    //const listaTareasDiv = document.getElementById ("listaDeTareas");
 
    formulario.addEventListener ("submit", (evento) =>
    {
        evento.preventDefault ();
        const selectValor = document.getElementById ("Materia").value;
        //console.log (selectValor);
        if (selectValor === "otra")
        {
            const valorMat = nombreNuevaMateria.value;
            const valorTarea = nombreNuevaTarea.value;
            //console.log (valorMat);
            const añadir = document.createElement ('option');
            añadir.classList.add (valorMat);
            //console.log (añadir);
            agregar ();
            //console.log("agregar tarea")
            const agregarTarea = () =>
            {
                let existe = false;
                const nombreNuevaTarea = document.getElementById ("Tareas");
                const divTareas = document.getElementById ("Secciones");
                let valorTarea = nombreNuevaTarea.value;
                if (arregloTareas.includes (valorTarea))
                {
                    alert("La tarea ya existe");
                    existe = true;
                }
                else
                {
                    arregloTareas.push (valorTarea);
                    //console.log (arregloTareas);
                    divTareas.innerHTML += "<div class='Tarea'><h2>"+valorTarea+"</h2><h2>"+valorMat+"</h2></div><br>"
                    +"<label><input type='button' id='eliminar' value='eliminar'></label>"
                    +"<label><input type='button' id='completar' value='Marcar como completado'></label>";
                }  
            }
            agregarTarea ();
        }

        if (selectValor !="otra")
        {
            const valorTarea = nombreNuevaTarea.value;
            const agregarTarea = () =>
            {
                let existe = false;
                const nombreNuevaTarea = document.getElementById ("Tareas");
                const divTareas = document.getElementById ("Secciones");
                let valorTarea = nombreNuevaTarea.value;
                if (arregloTareas.includes (valorTarea))
                {
                    alert("La tarea ya existe");
                    existe = true;
                }
                else
                {
                    arregloTareas.push (valorTarea);
                    console.log (arregloTareas);
                    divTareas.innerHTML += "<div class='Tarea'><h2>"+valorTarea+"</h2><h2>"+selectValor+"</h2></div><br>"
                    +"<label><input type='button' id='eliminar' value='eliminar'></label>"
                    +"<label><input type='button' id='completar' value='Marcar como completado'></label>";
                }
            }
            agregarTarea ();
        }
        formulario.reset();
    });
    const agregar = () => 
    {
        const option = document.createElement('option');
        const valor = nombreNuevaMateria.value;
        //console.log (valor);
        option.value = valor;
        option.innerHTML = valor;
        let existe = false;
        var sel = document.getElementById("Materia"); 
        //console.log(sel);
        //console.log(option.innerHTML);
        for (var i = 0; i < sel.length; i++) 
        {
            var opt = sel[i];
            if (opt.value === option.innerHTML)
            {
                existe = true;
                alert ("La materia ya existe");
            }
        }
        if (!existe)
        select.appendChild(option);
    }
});

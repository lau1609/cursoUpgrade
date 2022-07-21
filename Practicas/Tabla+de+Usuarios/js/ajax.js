var loader = document.getElementById('loader');

document.getElementById('btn_cargar_usuarios').addEventListener('click', function(){
    //console.log('prueba');
   // return false
    var peticion = new XMLHttpRequest();
    //peticion.open('GET', 'https://api.npoint.io/7d3afdf0ba4c085c846b', false);
    peticion.open('GET', 'php/usuarios.php', false);

    loader.classList.add('active');

    peticion.onload = function(){
        //console.log (JSON.parse(peticion.responseText)[0].pais);
        var datos = JSON.parse(peticion.responseText);

        for (var i = 0; i < datos.length; i++) {
            var elemento = document.createElement('tr');
            elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
            document.getElementById('tabla').appendChild(elemento);
            
        }
    }
    /*         datos.forEach(persona => {
            var elemento = document.createElement('tr');
            elemento.innerHTML += ("<td>" + persona.id + "</td>");
            elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
            elemento.innerHTML += ("<td>" + persona.edad + "</td>");
            elemento.innerHTML += ("<td>" + persona.pais + "</td>");
            elemento.innerHTML += ("<td>" + persona.correo + "</td>");
            document.getElementById('tabla').ap[i]pendChild(elemento);
            
        }); */

    

    peticion.onreadystatechange = function(){
        console.log(peticion.status)
        if (peticion.readyState == 4  && peticion.status == 200) {
             loader.classList.remove('active');
        }
    }

    peticion.send();

    console.log(peticion.responseText);
})
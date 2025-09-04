$(document).ready(function () {
    $("#miFormulario").submit(function (e) {
        let valido = true;

        // Nombre
        if ($("input[name='nombre']").val().trim() === "") {
            $("#error-nombre").show(); 
            valido = false;
        } else {
            $("#error-nombre").hide();
        }

        // Apellido
        if ($("input[name='apellido']").val().trim() === "") {
            $("#error-apellido").show(); 
            valido = false;
        } else {
            $("#error-apellido").hide();
        }

        // Edad
        let edad = $("input[name='edad']").val().trim();
        if (edad === "" || isNaN(edad) || edad <= 0) {
            $("#error-edad").show(); 
            valido = false;
        } else {
            $("#error-edad").hide();
        }

        // Dirección
        if ($("input[name='direccion']").val().trim() === "") {
            $("#error-direccion").show(); 
            valido = false;
        } else {
            $("#error-direccion").hide();
        }

        // Estudios
        if ($("input[name='estudios']:checked").length === 0) {
            $("#error-estudios").show(); 
            valido = false;
        } else {
            $("#error-estudios").hide();
        }

        // Sexo
        if ($("select[name='sexo']").val() === "") {
            $("#error-sexo").show(); 
            valido = false;
        } else {
            $("#error-sexo").hide();
        }

        // Deportes
        if ($("input[name='deportes[]']:checked").length === 0) {
            $("#error-deportes").show(); 
            valido = false;
        } else {
            $("#error-deportes").hide();
        }

        if (!valido) {
            e.preventDefault(); // Evita que se envíe si hay errores
        }
    });
});

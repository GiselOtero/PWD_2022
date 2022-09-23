/* Validacion de formularios con Jquery Validate */
/* $(document).ready(function() { */
jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Solo letras");

jQuery.validator.addMethod("validpassword", function(value, element) {
    return this.optional(element) || /^[a-z0-9]{6,10}$/i.test(value);
}, " ");


$("#tp1Ej1").validate({
        
        rules:{
            num:{
                required: true,
                number: true,

            }
        },
        messages:{
            num:{
                required:"Ingrese un numero",
                number:"El dato ingresado debe ser un numero"
            },
        },
    });
/* }); */

$("#tp1Ej2").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        lunes:{
            number:true,
        },
        martes:{
            number:true,
        },
        miercoles:{
            number:true,
        },
        jueves:{
            number:true,
        },
        viernes:{
            number:true,
        },
    },
    messages:{
        lunes:{
            number:"El dato ingresado debe ser un numero",
        },
        martes:{
            number:"El dato ingresado debe ser un numero",
        },
        miercoles:{
            number:"El dato ingresado debe ser un numero",
        },
        jueves:{
            number:"El dato ingresado debe ser un numero",
        },
        viernes:{
            number:"El dato ingresado debe ser un numero",
        },
    },
    
});
$("#tp1Ej3").validate({
    rules:{
        nombre:{
            required: true,
            lettersonly:true,
            number:false,
            minlength:3,
            
        },
        apellido:{
            required:true,
            lettersonly:true,
            minlength:3,
        },
        edad:{
            required:true,
            number:true,
            minlength:1,
            maxlength:3,
            min:1,
        },
        direccion:{
            required:true,
        },

    },
    messages:{
        nombre:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida sin numeros ni espacios",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        apellido:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        edad:{
            required:"Este campo es requerido",
            number:"Ingrese un numero",
            maxlength:"La edad no debe superar a 4 caracteres",
        },
        direccion:{
            required:"Este campo es requerido",

        }
    }

});

$("#tp1Ej5").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        nombre:{
            required: true,
            lettersonly:true,
            number:false,
            minlength:3,
            
        },
        apellido:{
            required:true,
            lettersonly:true,
            minlength:3,
        },
        edad:{
            required:true,
            number:true,
            minlength:1,
            maxlength:3,
            min:1,
        },
        direccion:{
            required:true,
        },
        sexo:{
            required: true,
        },
        estudios:{
            required:true,
        }
    },
    messages:{
        nombre:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida sin numeros ni espacios",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        apellido:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        edad:{
            required:"Este campo es requerido",
            number:"Ingrese un numero",
            maxlength:"La edad no debe superar a 4 caracteres",
        },
        direccion:{
            required:"Este campo es requerido",

        },
        sexo:{
            required:"Este campo es requerido",

        },
        estudios:{
            required:"Este campo es requerido",

        }
    }

});
$("#tp1Ej6").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        nombre:{
            required: true,
            lettersonly:true,
            number:false,
            minlength:3,
            
        },
        apellido:{
            required:true,
            lettersonly:true,
            minlength:3,
        },
        edad:{
            required:true,
            number:true,
            minlength:1,
            maxlength:3,
            min:1,
        },
        direccion:{
            required:true,
        },
        sexo:{
            required: true,
        },
        estudios:{
            required:true,
        },
        /* 'deportes[]':{
            required:true,
        } */
    },
    messages:{
        nombre:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida sin numeros ni espacios",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        apellido:{
            required:"Este campo es requerido",
            lettersonly:"Ingrese una cadena valida",
            minlength:"El nombre debe tener al menos 3 caracteres"
        },
        edad:{
            required:"Este campo es requerido",
            number:"Ingrese un numero",
            maxlength:"La edad no debe superar a 4 caracteres",
        },
        direccion:{
            required:"Este campo es requerido",

        },
        sexo:{
            required:"Este campo es requerido",

        },
        estudios:{
            required:"Este campo es requerido",
        },
        /* 'deportes[]':{
            required:"Este campo es requerido",
        } */
    }

});

/* tp2 */
$("#tp2Ej3").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        username:{
            required:true,
            minlength:4,
        },
        password:{
            validpassword:true,
            
        },
    },
    messages:{
        password:{
            validpassword:"ingrese una cadena valida"
        }
    }
})
$("#tp2Ej4").validate({
    rules:{
        titulo:{
            required:true,
        },
        actores:{
            required:true,
            minlength:3,
        },
        director:{
            required:true,
            minlength:3,
        },
        guion:{
            required:true,
            minlength:3,
        },
        produccion:{
            required:true,
            minlength:3,
        },
        anio:{
            required:true,
            number:true,
            minlength:4,
            maxlength:4,
            range: [1900, 2025]
        },
        nacionalidad:{
            required:true,
            minlength:3,
        },
        genero:{
            required:true,
        },
        duracion:{
            required:true,
            number:true,
            min:1,

        },
        restriccion:{
            required:true,
        },
    },

    messages:{
        titulo:{
            required:"Este campo es requerido",
        },
        actores:{
            required:"Este campo es requerido",
        },
        director:{
            required:"Este campo es requerido",
        },
        guion:{
            required:"Este campo es requerido",
        },
        produccion:{
            required:"Este campo es requerido",
        },
        anio:{
            required:"Este campo es requerido",
            number:"Ingrese un numero",
            minlength:"Debe tener al menos 4 caracteres",
            maxlength:"Debe tener al menos 4 caracteres",
            range:"Ingrese un año entre 1900 y 2025",
        },
        nacionalidad:{
            required:"Este campo es requerido",
        },
        genero:{
            required:"Este campo es requerido",
        },
        duracion:{
            required:"Este campo es requerido",
            number:true,
            min:1,

        },
        restriccion:{
            required:"Este campo es requerido",
        },
    }
});













/* TP4 PHPMySQL */

$("#tp4_nuevaPersona").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        NroDni:{
            required:true,
            number:true,
            minlength:7,
            maxlength:8,
        },
        Apellido:{
            required:true,
            lettersonly:true,
            minlength:3,
        },
        Nombre:{
            required:true,
            lettersonly:true,
            minlength:3,
        },
        fechaNac:{
            required:true,
        },
        Telefono:{
            required:true,
            /* number:true, */
        },
        Domicilio:{
            required:true,
        },

    },
    /* mensaje:{}, */
});

$('#tp4_cambioDuenio').validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rule:{
        Patente:{
            required:true,
            minlength:6,

        },
        NroDni:{
            required:true,
            number:true,
            minlength:6,
        }
    },
    messages:{
        Patente:{
            required:" Este Campo es requerido ",
            minlength: " Debe tener al menos 6 caracteres "
        },
        NroDni:{
            required:" Este Campo es requerido ",
            number:" Cadena invalida ",
            minlength: " Debe tener al menos 6 caracteres "
        }
    }
});


$('#tp4_nuevoAuto').validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rule:{
        Patente:{
            required:true,
            minlength:6,

        },
        Marca:{
            required:true,
            minlength:6,
        },
        Modelo:{
            required:true,
            number: true,
            minlength:2,
        },
        DniDuenio:{
            required:true,
            number:true,
            minlength:6,
            maxlength:8,
        }
    },
    messages:{
        Patente:{
            required:"Este campo es requerido",
            minlength: "Debe tener al menos 6 caracteres",
        },
        Marca:{
            required:"Este campo es requerido",
            
        },
        Modelo:{
            required:"Este campo es requerido",
            number:" Cadena invalida ",
            minlength: " Debe tener al menos 2 caracteres "


        },
        DniDuenio:{
            required:"Este campo es requerido",
            number:" Cadena invalida ",
            minlength: " Debe tener al menos 6 caracteres ",

        }
        
    }
});

$("#tp4_buscarPersona").validate({
    errorElement:"div",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules:{
        NroDni:{
            required:true,
            number:true,
            minlength:7,
            maxlength:8,
        },
    },
    messages:{
        required:" Este Campo es requerido ",
        number:" Cadena invalida ",
        minlength: " Debe tener al menos 6 caracteres ",
    }
});

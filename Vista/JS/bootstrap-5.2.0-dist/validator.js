/* Trabajo Practico n1 */
$("#tp1Ej1").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    nro: {
      validators: {
        notEmpty: {
          message: "ingrese un numero",
        },
        regexp: {
          regexp: /^-?[0-9]\d*(\.\d+)?$/ /* nros negativos y positivos */,
          message: "Ingrese una cadena válida",
        },
      },
    },
  },
});

$("#tp1Ej2").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    lunes: {
      validators: {
        notEmpty: {
          message: "ingrese un horario",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
        /*  numeric: {
          message: "ingrese un numero",
        }, */
      },
    },
    martes: {
      validators: {
        notEmpty: {
          message: "ingrese un horario",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    miercoles: {
      validators: {
        notEmpty: {
          message: "ingrese un horario",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    jueves: {
      validators: {
        notEmpty: {
          message: "ingrese un horario",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    viernes: {
      validators: {
        notEmpty: {
          message: "ingrese un horario",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
  },
});

$("#tp1Ej3").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    nombre: {
      validators: {
        notEmpty: {
          message: "ingrese un nombre",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    apellido: {
      validators: {
        notEmpty: {
          message: "Ingrese Apellido",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    edad: {
      validators: {
        notEmpty: {
          message: "Ingrese Edad",
        },
        stringLength: {
          min: 1,
          max: 2,
          message: "debe tener al menos 1 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese un valor numerico",
        },
      },
    },
    direccion: {
      validators: {
        notEmpty: {
          message: "Ingrese direccion",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
  },
});

$("#tp1Ej5").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    nombre: {
      validators: {
        notEmpty: {
          message: "ingrese un nombre",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    apellido: {
      validators: {
        notEmpty: {
          message: "Ingrese Apellido",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    edad: {
      validators: {
        notEmpty: {
          message: "Ingrese Edad",
        },
        stringLength: {
          min: 1,
          max: 2,
          message: "debe tener al menos 1 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese un valor numerico",
        },
      },
    },
    direccion: {
      validators: {
        notEmpty: {
          message: "Ingrese direccion",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },

    estudio: {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },

    sexo: {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },
  },
});

$("#tp1Ej6").bootstrapValidator({
  message: "Este valor no es valido",
  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    nombre: {
      validators: {
        notEmpty: {
          message: "ingrese un nombre",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    apellido: {
      validators: {
        notEmpty: {
          message: "Ingrese Apellido",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    edad: {
      validators: {
        notEmpty: {
          message: "Ingrese Edad",
        },
        stringLength: {
          min: 1,
          max: 2,
          message: "debe tener al menos 1 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese un valor numerico",
        },
      },
    },
    direccion: {
      validators: {
        notEmpty: {
          message: "Ingrese direccion",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },

    estudio: {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },

    sexo: {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },

    "deportes[]": {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },
  },
});

$("#tp1Ej7").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    num1: {
      validators: {
        notEmpty: {
          message: "ingrese un numero",
        },
        regexp: {
          regexp: /^-?[0-9]\d*(\.\d+)?$/ /* nros negativos y positivos */,
          message: "Ingrese una cadena válida",
        },
      },
    },

    num2: {
      validators: {
        notEmpty: {
          message: "ingrese un numero",
        },
        regexp: {
          regexp: /^-?[0-9]\d*(\.\d+)?$/ /* nros negativos y positivos */,
          message: "Ingrese una cadena válida",
        },
      },
    },
    operacion: {
      validators: {
        notEmpty: {
          message: "Seleccione una Opcion",
        },
      },
    },
  },
});

$("#tp1Ej8").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    edad: {
      validators: {
        notEmpty: {
          message: "Ingrese Edad",
        },
        stringLength: {
          min: 1,
          max: 2,
          message: "debe tener al menos 1 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese un valor numerico",
        },
      },
    },
    estudiante: {
      validators: {
        notEmpty: {
          message: "Ingrese una opcion",
        },
      },
    },
  },
});

/*
 *
 *
 *
 *
 */
/* Trabajo Practico n2 */
$("#tp2Ej4").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "null",

    invalid: "null",

    validating: "fa fa-circle",
  },

  fields: {
    titulo: {
      feedbackIcons: false,
      container: ".fail-alert",
      validators: {
        notEmpty: {
          message: "El Titulo es requerido",
        },
      },
    },

    actores: {
      validators: {
        notEmpty: {
          message: "Ingrese al menos un actor",
        },
      },
    },

    director: {
      validators: {
        notEmpty: {
          message: "Ingrese Direcctor",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    guion: {
      validators: {
        notEmpty: {
          message: "Ingrese un Guionista",
        },
      },
    },
    produccion: {
      validators: {
        notEmpty: {
          message: "Ingrese una Produccion",
        },
      },
    },
    anio: {
      validators: {
        notEmpty: {
          message: "Ingrese año",
        },
        stringLength: {
          min: 3,
          max: 4,
          message: "debe tener al menos 4 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    nacionalidad: {
      validators: {
        notEmpty: {
          message: "Ingrese una Nacionalidad",
        },
        regexp: {
          regexp: /^[a-zA-Z]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    genero: {
      validators: {
        notEmpty: {
          message: "Seleccione un genero",
        },
      },
    },
    duracion: {
      validators: {
        notEmpty: {
          message: "Ingrese duracion",
        },
        stringLength: {
          max: 3,
          message: "debe tener al menos 3 caracteres",
        },
        regexp: {
          regexp: /^[0-9]+$/,
          message: "Ingrese una cadena válida",
        },
      },
    },
    restriccion: {
      validators: {
        notEmpty: {
          message: "Seleccione una opcion",
        },
      },
    },
  },
});
$("#tp2Ej3").bootstrapValidator({
  message: "Este valor no es valido",

  feedbackIcons: {
    valid: "fas fa-check",

    invalid: "fas fa-times",

    validating: "fa fa-circle",
  },

  fields: {
    username: {
      validators: {
        notEmpty: {
          message: "Ingrese un usuario",
        },
        stringLength: {
          min: 5,
          //max: 12,
          message: "El usuario debe tener como mínimo 5 caracteres",
        },
      },
    },
    password: {
      validators: {
        notEmpty: {
          message: "ingrese una contraseña",
        },
        stringLength: {
          min: 8,
          //max: 12,
          message: "La contraseña debe tener como mínimo 8 caracteres",
        },
        regexp: {
          regexp: /^[a-z0-9]{6,10}$/,
          message: "La contraseña debe ser letras minúsculas + números",
        },
        different: {
          // diferente: la contraseña no puede ser la misma que el usuario
          message: "Usuario y contraseña no pueden ser iguales",
          field: "username", // valor de campo comparado
        },
      },
    },
  },
});

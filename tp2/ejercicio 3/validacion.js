$(document).ready(function () {
  $("#formulario").validate({
    rules: {
      user: {
        required: true,
        minlength: 3,
      },
      password: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      user: {
        minlength: "Ingrese un minimo de 3 caracteres",
      },
      password: {
        minlength:
          "Ingrese un minimo de 8 caracteres, la contraseña no puede ser igual al nombre, debe contener letras y numeros",
      },
    },
  });
});

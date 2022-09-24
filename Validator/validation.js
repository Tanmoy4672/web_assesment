jQuery("#formSignIn").validate({
  rules: {
    userName: {
      required: true,
      minlength: 2,
    },
    userPass: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    userName: {
      required: "Please&nbsp;enter&nbsp;your&nbsp;username",
      minlength:
        "Name&nbsp;must&nbsp;be&nbsp;minimum&nbsp;than&nbsp;2&nbsp;char",
    },
    userPass: {
      required: "Please&nbsp;enter&nbsp;your&nbsp;password",
      minlength: "Password&nbsp;must&nbsp;be&nbsp;minimum&nbsp;6&nbsp;char",
    },
  },
});

jQuery("#registrationForm").validate({
  rules: {
    userName: {
      required: true,
      minlength: 2,
    },
    userEmail: {
      required: true,
      email: true
    },
    userPhone: {
      required: true,
      minlength: 11
    },
    userPass: {
        required: true,
        minlength: 2,
      },
  },
  messages: {
    userName: {
      required: "Please&nbsp;enter&nbsp;valid&nbsp;name*",
      minlength:
        "Name&nbsp;must&nbsp;be&nbsp;minimum&nbsp;than&nbsp;2&nbsp;char*",
    },
    userEmail: {
      required: "Enter&nbsp;a&nbsp;valid&nbsp;email*",
      email:"Please&nbsp;enter&nbsp;a&nbsp;valid&nbsp;email&nbsp;address*"
    },
    userPass: {
      required: "Please&nbsp;enter&nbsp;password*",
      minlength: "Password&nbsp;must&nbsp;be&nbsp;minimum&nbsp;6&nbsp;char*",
    },
    userPhone:{
        required: "Please&nbsp;enter&nbsp;phone&nbsp;*",
        minlength: "Phone&nbsp;number&nbsp;must&nbsp;be&nbsp;minimum&nbsp;11&nbsp;char*",
    }
  },
});

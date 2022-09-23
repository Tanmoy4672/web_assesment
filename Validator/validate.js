$("#formSignIn").validate({
  rules: {
    userName: {
      minlength: 2,
    },
  },
  messages: {
    userName: {
      required: "Please enter your username",
      minlength: "Name at least 2 character",
    },
  },

  submitHandler: function (form) {
    form.submit();
  },
});

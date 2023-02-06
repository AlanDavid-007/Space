if ($("#add_create").length > 0) {
    $("#add_create").validate({
      rules: {
        Title: {
          required: true,
        },
        Description: {
          required: true,
          maxlength: 60,
          Description: true,
        },
      },
      messages: {
        Title: {
          required: "Title is required.",
        },
        Description: {
          required: "Description is required.",
          Description: "It does not seem to be a valid Description.",
          maxlength: "The Description should be or equal to 60 chars.",
        },
      },
    })
  }
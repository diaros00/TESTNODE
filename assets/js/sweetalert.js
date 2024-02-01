function AlertMessage(type, title, text) {
    return Swal.fire({
        html: "<p class='fs-2'>" + title + "</p>" + "<p class='fs-6'>" + text + "</p>",
        icon: type,
        buttonsStyling: false,
        confirmButtonText: "OK",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
}
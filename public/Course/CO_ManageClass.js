"use strict";
var TableClass = (function () {
    var t, e;
    return {
        init: function () {
            (e = document.querySelector("#kt_courseclass_table")) &&
            (e.querySelectorAll("tbody tr").forEach((t) => {
                    const e = t.querySelectorAll("td"),
                        n = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
                    e[2].setAttribute("data-order", n);
                }),
                (t = $(e).DataTable({
                    info: !1,
                    order: [],
                    columnDefs: [{
                            orderable: !1,
                            targets: 1
                        },
                        {
                            orderable: !1,
                            targets: 1
                        },
                    ],
                })),
                document
                .querySelector('[data-kt-permissions-table-filter="search"]')
                .addEventListener("keyup", function (e) {
                    t.search(e.target.value).draw();
                }),
                e
                .querySelectorAll('[data-kt-permissions-table-filter="delete_row"]')
                .forEach((e) => {
                    e.addEventListener("click", function (e) {
                        e.preventDefault();
                        const n = e.target.closest("tr"),
                            o = n.querySelectorAll("td")[0].innerText;
                        Swal.fire({
                            text: "Are you sure you want to delete " + o + "?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary",
                            },
                        }).then(function (e) {
                            e.value ?
                                Swal.fire({
                                    text: "You have deleted " + o + "!.",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    },
                                }).then(function () {
                                    t.row($(n)).remove().draw();
                                }) :
                                "cancel" === e.dismiss &&
                                Swal.fire({
                                    text: customerName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    },
                                });
                        });
                    });
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    TableClass.init();
});


ClassicEditor
    .create(document.querySelector('#description'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#description_edit'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });


// Course matrix
// Datatable Course matrix
$("#kt_coursematrix_table").DataTable({
    "language": {
        "lengthMenu": "Show _MENU_",
    },
    "dom": "<'row'" +
        "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
        ">" +

        "<'table-responsive'tr>" +

        "<'row'" +
        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
        ">"
});
// checkbox all
$('#checkAll').click(function () {
    $('input:checkbox').prop('checked', this.checked);
    if ($(this).is(":checked")) {
        $(".btn-option-data").show();
        //   $(".title-total").hide();
    } else {
        $(".btn-option-data").hide();
        //   $(".title-total").show();
    }
});


// DatePicker
// Register
const registerDatePicker = document.getElementById("register_start");
const register_start = new tempusDominus.TempusDominus(registerDatePicker);
const register_end = new tempusDominus.TempusDominus(document.getElementById("register_end"), {
    useCurrent: false,
});

//using event listeners
registerDatePicker.addEventListener(tempusDominus.Namespace.events.change, (e) => {
    register_end.updateOptions({
        restrictions: {
            minDate: e.detail.date,
        },
    });
});

//using subscribe method
const showRegisterDate = register_end.subscribe(tempusDominus.Namespace.events.change, (e) => {
    register_start.updateOptions({
        restrictions: {
            maxDate: e.date,
        },
    });
});

// Class
const classDatePicker = document.getElementById("class_start");
const class_start = new tempusDominus.TempusDominus(classDatePicker);
const class_end = new tempusDominus.TempusDominus(document.getElementById("class_end"), {
    useCurrent: false,
});

//using event listeners
classDatePicker.addEventListener(tempusDominus.Namespace.events.change, (e) => {
    class_end.updateOptions({
        restrictions: {
            minDate: e.detail.date,
        },
    });
});

//using subscribe method
const showClassDate = class_end.subscribe(tempusDominus.Namespace.events.change, (e) => {
    class_start.updateOptions({
        restrictions: {
            maxDate: e.date,
        },
    });
});

// edit modal
// Register 
const registerDatePickerEdit = document.getElementById("register_start_edit");
const register_start_edit = new tempusDominus.TempusDominus(registerDatePickerEdit);
const register_end_edit = new tempusDominus.TempusDominus(document.getElementById("register_end_edit"), {
    useCurrent: false,
});

//using event listeners
registerDatePickerEdit.addEventListener(tempusDominus.Namespace.events.change, (e) => {
    register_end_edit.updateOptions({
        restrictions: {
        minDate: e.detail.date,
        },
    });
});

//using subscribe method
const showRegisterDateEdit = register_end_edit.subscribe(tempusDominus.Namespace.events.change, (e) => {
    register_start_edit.updateOptions({
        restrictions: {
        maxDate: e.date,
        },
    });
});


// Class
const classDatePickerEdit = document.getElementById("class_start_edit");
const class_start_edit = new tempusDominus.TempusDominus(classDatePickerEdit);
const class_end_edit = new tempusDominus.TempusDominus(document.getElementById("class_end_edit"), {
    useCurrent: false,
});

//using event listeners
classDatePickerEdit.addEventListener(tempusDominus.Namespace.events.change, (e) => {
    class_end_edit.updateOptions({
        restrictions: {
        minDate: e.detail.date,
        },
    });
});

//using subscribe method
const showClassDateEdit = class_end_edit.subscribe(tempusDominus.Namespace.events.change, (e) => {
    class_start_edit.updateOptions({
        restrictions: {
        maxDate: e.date,
        },
    });
});
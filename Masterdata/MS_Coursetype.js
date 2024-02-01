
"use strict";
var TableTypeCourse = (function () {
  var t, e;
  return {
    init: function () {
      (e = document.querySelector("#kt_typecos_table")) &&
        (e.querySelectorAll("tbody tr").forEach((t) => {
          const e = t.querySelectorAll("td"),
            n = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
          e[2].setAttribute("data-order", n);
        }),
        (t = $(e).DataTable({
          info: !1,
          order: [],
          columnDefs: [
            { orderable: !1, targets: 1 },
            { orderable: !1, targets: 1 },
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
                e.value
                  ? Swal.fire({
                      text: "You have deleted " + o + "!.",
                      icon: "success",
                      buttonsStyling: !1,
                      confirmButtonText: "Ok, got it!",
                      customClass: { confirmButton: "btn fw-bold btn-primary" },
                    }).then(function () {
                      t.row($(n)).remove().draw();
                    })
                  : "cancel" === e.dismiss &&
                    Swal.fire({
                      text: customerName + " was not deleted.",
                      icon: "error",
                      buttonsStyling: !1,
                      confirmButtonText: "Ok, got it!",
                      customClass: { confirmButton: "btn fw-bold btn-primary" },
                    });
              });
            });
          }));
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  TableTypeCourse.init();
});




$("#kt_manage_typecos_table").DataTable({
	"language": {
		"lengthMenu": "Show _MENU_",
	},
	"dom":
		"<'row'" +
		"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
		"<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
		">" +

		"<'table-responsive'tr>" +

		"<'row'" +
		"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
		"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
		">"
});

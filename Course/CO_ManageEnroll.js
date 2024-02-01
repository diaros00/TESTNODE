"use strict";
var TableEnroll = (function () {
    var t, e;
    return {
        init: function () {
            (e = document.querySelector("#kt_courseenroll_table")) &&
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
    TableEnroll.init();
});

function setReplacements(select){
    if(select.value==2){
     document.getElementById('hidden_div_replacement').style.display = "block";
    } else{
     document.getElementById('hidden_div_replacement').style.display = "none";
    }
 } 

 function setReplacementsModal(select){
    if(select.value==2){
     document.getElementById('hidden_div_modal_replacement').style.display = "block";
    } else{
     document.getElementById('hidden_div_modal_replacement').style.display = "none";
    }
 } 

 function checkStatusUpload() {
    var link = 'Authorization/AR_UploaduserStatus.php';
    createPopupWin(link, 'Message', 500, 650)
}

function createPopupWin(pageURL, pageTitle,
    popupWinWidth, popupWinHeight) {
    var left = (screen.width - popupWinWidth) / 2;
    var top = (screen.height - popupWinHeight) / 4;

    var myWindow = window.open(pageURL, pageTitle,
        'resizable=yes, width=' + popupWinWidth +
        ', height=' + popupWinHeight + ', top=' +
        top + ', left=' + left);
}
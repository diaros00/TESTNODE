var options = {
    series: [75],
    chart: {
        height: 160,
        type: 'radialBar',
        toolbar: {
            show: false
        },
    },
    plotOptions: {
        radialBar: {
            borderRadius: 10,
            startAngle: -135,
            endAngle: 225,
            hollow: {
                margin: 0,
                size: '70%',
                background: '#fff',
                image: undefined,
                imageOffsetX: 0,
                imageOffsetY: 0,
                position: 'front',
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 0,
                    blur: 4,
                    opacity: 0.24
                }
            },
            track: {
                background: '#fff',
                strokeWidth: '67%',
                margin: 0, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: -3,
                    left: 0,
                    blur: 4,
                    opacity: 0.35
                }
            },

            dataLabels: {
                show: true,
                name: {
                    offsetY: -10,
                    show: true,
                    color: '#888',
                    fontSize: '17px'
                },
                value: {
                    formatter: function (val) {
                        return parseInt(val);
                    },
                    color: '#111',
                    fontSize: '16px',
                    show: true,
                }
            }
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 0.5,
            gradientToColors: ['#ABE5A1'],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
        }
    },
    stroke: {
        lineCap: 'round'
    },
    labels: ['Percent'],
};

var chart_this_year = new ApexCharts(document.querySelector("#chart-this-year"), options);
chart_this_year.render();

var options = {
    series: [44, 55, 67, 83],
    chart: {
        height: 350,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 60 + "%"
                    }
                }
            }
        }
    },
    labels: ['Engineering Course', 'Core Competency', 'Functional Competency', 'Managerial Competency'],
    legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
    },
    noData: {
        text: "Loading...",
        align: 'center',
        verticalAlign: 'middle',
        offsetX: 0,
        offsetY: 0,
        style: {
            color: "#000000",
            fontSize: '14px',
            fontFamily: "Helvetica"
        }
    },
    stroke: {
        lineCap: 'round'
    },
};

var chart_curriculum = new ApexCharts(document.querySelector("#chart-curriculum"), options);
chart_curriculum.render();

var options = {
    series: [{
            name: 'Before',
            data: [2, 2, 1, 2, 3, 2, 2, 2, 1, 2, 3, 2, ],
        },
        {
            name: 'After',
            data: [5, 3, 4, 4, 5, 5, 5, 3, 4, 4, 5, 5, ],
        },

    ],
    chart: {
        height: 350,
        type: 'radar',
        toolbar: {
            show: false
        },
    },
    dataLabels: {
        enabled: true
    },
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                strokeColors: '#e9e9e9',
                fill: {
                    colors: ['#f8f8f8', '#fff']
                }
            }
        }
    },
    colors: ['#FF4560', '#01AF7D'],
    markers: {
        size: 4,
        colors: ['#fff'],
        strokeColor: ['#FF4560', '#01AF7D'],
        strokeWidth: 2,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val
            }
        }
    },
    xaxis: {
        categories: [
            'DP-MTN-04 Professional...',
            'DP-MN-03 Effective...',
            'DP-MN-02 Why Why...',
            'DP-MN-01 English...',
            'DP-DC-03 V5 Strategy',
            'DP-DC-02 ความปลอดภัย...',
            'DP-DC-01 Six hazard...',
            'DP-ACD-06 Jig &...',
            'DP-ACD-05 Producti...',
            'DP-ACD-04 Tooling',
            'DP-ACD-03 Wiring...',
            'DP-ACD-02 Wiring...',
            'DP-ACD-01 Wiring...',
            'DP-QC-02 Introduction...',
            'DP-QC-01 Karakuri...',
            'DP-PE-02 Quality...',
            'DP-PE-01 Lean...',
            'DP-RDL-01 SAP Intr...',
            'DP-RDH-02 Value An...',
            'DP-RDH-01 Total Pro...',
            'DP-RDPD-06 Measurem...',
            'DP-RDPD-05 Statist...',
            'DP-RDPD-04 AIAG-V...',
            'DP-RDPD-03Advance...'
        ],
        labels: {
            style: {
                fontSize: '9px',
                fontWeight: 10,
            },
        }
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function (val, i) {
                if (i % 2 === 0) {
                    return val
                } else {
                    return ''
                }
            }
        }
    }
};

var chart_course = new ApexCharts(document.querySelector("#chart-course"), options);
chart_course.render();


var options = {
    series: [{
        name: 'Trained : อบรมแล้ว',
        data: [100, 100, 45]
    }, {
        name: 'Target : เป้าหมาย',
        data: [100, 100, 100]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false
        },
    },
    plotOptions: {
        bar: {
            borderRadius: 5,
            horizontal: false,
            columnWidth: '30%',
            endingShape: 'rounded'
        },

    },
    colors: ['#8E44AD', '#F4ECF7'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " %"
            }
        }
    },
    xaxis: {
        categories: [2022, 2023, 2024],
    },
    yaxis: {
        min: 0,
        max: 100
    }
};

var chart_target_of_year = new ApexCharts(document.querySelector("#chart-target-of-year"), options);
chart_target_of_year.render();



"use strict";
var KTUsersPermissionsList = (function () {
  var t, e;
  return {
    init: function () {
      (e = document.querySelector("#kt_permissions_table")) &&
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
            { orderable: !1, targets: 3 },
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
  KTUsersPermissionsList.init();
});
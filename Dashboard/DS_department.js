var options = {
  series: [100],
  chart: {
    height: 210,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: '65%',
      }
    },
  },
  stroke: {
    lineCap: 'round'
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      shadeIntensity: 0.5,
      gradientToColors: ['#4776E6', '#8E54E9', '#4776E6'],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 0.6,
      stops: [30, 70, 100]
    }
  },
  labels: ['Total'],
};

var chart_total_progress = new ApexCharts(document.querySelector("#chart-total-progress"), options);
chart_total_progress.render();



var options = {
  series: [{
    name: 'Employee',
    type: 'column',
    data: [440, 505, 414, 671, 227, 413, 201]
  }, {
    name: 'Percent',
    type: 'line',
    data: [60, 70, 45, 30, 66, 20, 80]
  }],
  chart: {
    height: 450,
    type: 'line',
    parentHeightOffset: 0,
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false
    },
    events: {
      click: function (chart, w, e) {
        // console.log(chart, w, e)
      }
    },
    stackType: '100%'
  },
  stroke: {
    width: [0, 4]
  },
  colors: ["#884EA0", "#16A085"],
  plotOptions: {
    bar: {
      borderRadius: 20,
      columnWidth: '45%',
      // distributed: true,
    }
  },
  dataLabels: {
    enabled: true,
    enabledOnSeries: [1]
  },
  labels: ['D1-D3', 'G1-G3', 'M1-M3', 'Engineers', 'S1-S3', 'T1-T3', 'T7'],
  xaxis: {
    type: 'number',
    labels: {
      style: {
        fontSize: '12px'
      },
    },
  },
  yaxis: [{
    tickAmount: 5,
    min: 0,
    max: 1300,
    // title: {
    //     text: 'Percent',
    // },

  }, {
    opposite: true,
    // title: {
    //     text: 'Employee'
    // }
  }]
};

var chart_progress_level = new ApexCharts(document.querySelector("#chart-progress-level"), options);
chart_progress_level.render();

// Select 2 
// Select 2 - Company
// Format options
const optionFormat = (item) => {
  if (!item.id) {
      return item.text;
  }

  var span = document.createElement('span');
  var template = '';

  template += '<div class="d-flex align-items-center">';
  template += '<img src="' + item.element.getAttribute('data-kt-rich-content-icon') + '" class="rounded-circle h-30px me-3" alt="' + item.text + '"/>';
  template += '<div class="d-flex flex-column">'
  template += '<span class="fs-4 fw-bold lh-1">' + item.text + '</span>';
  template += '<span class="text-muted fs-5">' + item.element.getAttribute('data-kt-rich-content-subcontent') + '</span>';
  template += '</div>';
  template += '</div>';

  span.innerHTML = template;

  return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('#select2-company').select2({
  placeholder: "Select company",
  minimumResultsForSearch: Infinity,
  templateSelection: optionFormat,
  templateResult: optionFormat
});
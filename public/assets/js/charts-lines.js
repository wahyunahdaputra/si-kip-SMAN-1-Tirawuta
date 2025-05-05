const lineConfig = {
  type: 'line', 
  data: {
    labels: ['FPT', 'FKM', 'FH', 'FT', 'Fk', 'FEB', 'FISIP', 'FPK', 'FKIP', 'FIB', 'FPIK', 'FHIL', 'FF', 'FMIPA', 'PASCA'],
    datasets: [
      {
        label: 'Pria',
        backgroundColor: '#0694a2',
        borderColor: '#0694a2',
        data: [43, 48, 40, 54, 67, 73, 70, 43, 48, 40, 54, 67, 73, 70, 70],
        fill: false,
      },
      {
        label: 'Wanita',
        fill: false,
        backgroundColor: '#7e3af2',
        borderColor: '#7e3af2',
        data: [43, 48, 40, 54, 67, 73, 70, 43, 48, 40, 54, 67, 73, 70, 70],
      },
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
    hover: {
      mode: 'nearest',
      intersect: true,
    },
    scales: {
      x: {
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Month',
        },
      },
      y: {
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Value',
        },
      },
    },
  },
}

const lineCtx = document.getElementById('line')
window.myLine = new Chart(lineCtx, lineConfig)

const teknikInformatikaConfig = {
  type: 'line', 
  data: {
    labels: ['Teknik Informatika'],
    datasets: [
      {
        label: 'Pria',
        backgroundColor: '#0694a2',
        borderColor: '#0694a2',
        data: [43, ],
        fill: false,
      },
      {
        label: 'Wanita',
        fill: false,
        backgroundColor: '#7e3af2',
        borderColor: '#7e3af2',
        data: [43, ],
      },
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
    hover: {
      mode: 'nearest',
      intersect: true,
    },
    scales: {
      x: {
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Month',
        },
      },
      y: {
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Value',
        },
      },
    },
  },
}

const teknikInformatikaCtx = document.getElementById('teknikInformatika');
window.myTeknikInformatikaLine = new Chart(teknikInformatikaCtx, teknikInformatikaConfig)

const dataSeleksiSN = document.getElementById('dataSeleksiSN');
const dataSeleksiSB = document.getElementById('dataSeleksiSB');
const dataSeleksiSM = document.getElementById('dataSeleksiSM');
const dataSeleksiTotal = document.getElementById('dataSeleksiTotal');

var valueDataSN = [13645, 3448, 3046, 2554];
var valueDataSB = [32872,	3804,	3804,	3322];
var valueDataSM = [13645, 3448, 3046, 2554];
var valueDataTotal = [56204, 10139, 9025, 8780];

const labels = ["Peminat", "Lulus Seleksi", "Daya Tampung", "Registrasi Ulang"]

  const datasetsSN = {
      labels: labels,
      datasets: [{
        data: valueDataSN,
        backgroundColor: [
          '#15803d33',
          '#22c55e33',
          '#4ade8033',
          '#86efac33'
        ],
        borderColor: [
          '#059669',
          '#10b981',
          '#34d399',
          '#6ee7b7'
        ],
        borderWidth: 1
      }]
  }
  const configSN = {
      type: 'bar',
      data: datasetsSN,
      options: {
          responsive: true,
          legend: {
              display: false,
          },
          scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
      },
  }

  const datasetsSB = {
    labels: labels,
    datasets: [{
      data: valueDataSB,
      backgroundColor: [
        '#fb923c33',
        '#fbbf2433',
        'rgba(255, 205, 86, 0.2)',
        'rgba(255, 205, 86, 0.2)'
      ],
      borderColor: [
        '#ea580c',
        '#d97706',
        'rgb(255, 205, 86)',
        'rgb(255, 205, 86)'
      ],
      borderWidth: 1
    }]
  }
  const configSB = {
    type: 'bar',
    data: datasetsSB,
    options: {
        responsive: true,
        legend: {
            display: false,
        },
        scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      }
    },
  }

  const datasetsSM = {
    labels: labels,
    datasets: [{
      data: valueDataSM,
      backgroundColor: [
        '#a855f733',
        '#e879f933',
        '#f472b633',
        '#fb718533'
      ],
      borderColor: [
        '#9333ea',
        '#d946ef',
        '#db2777',
        '#f43f5e'
      ],
      borderWidth: 1
    }]
  }
  const configSM = {
    type: 'bar',
    data: datasetsSM,
    options: {
        responsive: true,
        legend: {
            display: false,
        },
        scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      }
    },
  }

  const datasetsTotal = {
    labels: labels,
    datasets: [{
      data: valueDataTotal,
      backgroundColor: [
        '#1d4ed833',
        '#3b82f633',
        '#60a5fa33',
        '#93c5fd33'
      ],
      borderColor: [
        '#0ea5e9',
        '#38bdf8',
        '#7dd3fc',
        '#bae6fd'
      ],
      borderWidth: 1
    }]
  }
  const configTotal = {
    type: 'bar',
    data: datasetsTotal,
    options: {
        responsive: true,
        legend: {
            display: false,
        },
        scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      }
    },
  }

  chartBarSN = new Chart(dataSeleksiSN, configSN)
  chartBarSB = new Chart(dataSeleksiSB, configSB)
  chartBarSM = new Chart(dataSeleksiSM, configSM)
  chartBarTotal = new Chart(dataSeleksiTotal, configTotal)
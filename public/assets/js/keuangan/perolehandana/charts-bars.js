const chartDataElement = document.getElementById("chartData");
const chartDataElement2 = document.getElementById("chartData2");

const dataValue = [1, 2, 3];

const labels = ["TS-2", "TS-1", "TS"]
const labels2 = ["TS-2", "TS-1", "TS"]

const datasets = {
  labels: labels,
  datasets: [
    {
      data: dataValue,
      backgroundColor: ["#cceeff", "#99d6e6", "#66cce0", "#33b3d1"], // Warna biru muda dengan transparansi
      borderColor: ["#0099cc", "#0088b3", "#0077a1", "#006699"], // Warna biru gelap
      borderWidth: 1,
    },
  ],
};
const config = {
  type: "bar",
  data: datasets,
  options: {
    maintainAspectRatio: true,
    responsive: true,
    legend: {
      display: false,
    },
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
            stepSize: 1,
          },
        },
      ],
    },
  },
};

const datasets2 = {
    labels: labels2,
    datasets: [
      {
        data: dataValue,
        backgroundColor: ["#ffcccc", "#ff9999", "#ff6666", "#ff3333"], // Warna merah dengan transparansi
        borderColor: ["#cc0000", "#b30000", "#990000", "#800000"], // Warna merah gelap
        borderWidth: 1,
      },
    ],
};
const config2 = {
    type: "bar",
    data: datasets2,
    options: {
      maintainAspectRatio: true,
      responsive: true,
      legend: {
        display: false,
      },
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
              stepSize: 1,
            },
          },
        ],
      },
    },
};

chartBar = new Chart(chartDataElement, config)
chartBar2 = new Chart(chartDataElement2, config2)
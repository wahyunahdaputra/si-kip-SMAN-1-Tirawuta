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
      backgroundColor: ["#15803d33", "#22c55e33", "#4ade8033", "#86efac33"],
      borderColor: ["#059669", "#10b981", "#34d399", "#6ee7b7"],
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
        backgroundColor: ["#15803d33", "#22c55e33", "#4ade8033", "#86efac33"],
        borderColor: ["#059669", "#10b981", "#34d399", "#6ee7b7"],
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
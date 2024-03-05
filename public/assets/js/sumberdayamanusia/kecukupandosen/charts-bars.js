const chartDataElement = document.getElementById("chartData");

const dataValue = [1, 2, 3];

const labels = ["Doktor", "Magister", "Profesi"]

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
    maintainAspectRatio: false,
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
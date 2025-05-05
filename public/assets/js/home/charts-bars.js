const chartDataElement = document.getElementById("chartData");

const dataValue = [600, 750, 800, 550, 620, 700, 580, 640, 720, 690, 530, 610, 680, 560, 750];

const labels = ["FPT", "FKM", "FH", "FT", "Fk", "FEB", "FISIP", "FPK", "FKIP", "FIB", "FPIK", "FHIL", "FF", "FMIPA", "PASCA"]

const datasets = {
  labels: labels,
  datasets: [
    {
      data: dataValue,
      backgroundColor: ["#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98", "#98ff98"], // Warna hijau mint
      borderColor: ["#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f", "#007f5f"], // Warna hijau gelap
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
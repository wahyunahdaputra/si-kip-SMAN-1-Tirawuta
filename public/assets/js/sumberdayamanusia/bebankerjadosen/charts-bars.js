const chartDataElement = document.getElementById("chartData");

const dataValue = [1, 2, 3];

const labels = ["Dosen", "Mahasiswa", "Mahasiswa TA"]

const datasets = {
  labels: labels,
  datasets: [
    {
      data: dataValue,
      backgroundColor: ["#add8e6", "#90ee90", "#ffcccb"], // Warna biru muda, hijau muda, dan merah
      borderColor: ["#007bff", "#28a745", "#dc3545"], // Warna border yang lebih gelap untuk kontras
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
          },
        },
      ],
    },
  },
};

chartBar = new Chart(chartDataElement, config)
// Ambil objek dari array 
var objectChartData = chartDataArray

const objectGroupChartDataByAcademiYear = {};

// Iterasi setiap entri dalam objectChartData
objectChartData.forEach(entry => {
    const tahun_akademik = entry.tahun_akademik;

    // Menyalin entry tanpa kunci 'tahun_akademik'
    const { tahun_akademik: _, ...entryWithoutYear } = entry;

    // Membuat objek untuk tahun akademik jika belum ada
    if (!objectGroupChartDataByAcademiYear[tahun_akademik]) {
        objectGroupChartDataByAcademiYear[tahun_akademik] = {
            totalPeminat: 0,
            totalLulusSeleksi: 0,
            totalDayaTampung: 0,
            totalRegistrasiUlang: 0,
            data: [] // Array untuk menyimpan data pada tahun akademik tersebut
        };
    }

    // Menambahkan entry ke dalam array data untuk tahun akademik tersebut
    objectGroupChartDataByAcademiYear[tahun_akademik].data.push(entryWithoutYear);

    // Menambahkan nilai peminat, lulus seleksi, daya tampung, dan registrasi ulang
    // untuk tahun akademik tersebut
    objectGroupChartDataByAcademiYear[tahun_akademik].totalPeminat += parseInt(entryWithoutYear.peminat);
    objectGroupChartDataByAcademiYear[tahun_akademik].totalLulusSeleksi += parseInt(entryWithoutYear.lulus_seleksi);
    objectGroupChartDataByAcademiYear[tahun_akademik].totalDayaTampung += parseInt(entryWithoutYear.daya_tampung);
    objectGroupChartDataByAcademiYear[tahun_akademik].totalRegistrasiUlang += parseInt(entryWithoutYear.registrasi_ulang);
});

console.log(objectGroupChartDataByAcademiYear)

// Simpan nilai data, diambil berdasarkan id_jalur_masuk
var chartData1 = objectGroupChartDataByAcademiYear["2018/2019"].data[1-1]
var chartData2 = objectGroupChartDataByAcademiYear["2018/2019"].data[2-1]
var chartData3 = objectGroupChartDataByAcademiYear["2018/2019"].data[3-1]
var chartDataTotal = objectGroupChartDataByAcademiYear["2018/2019"]

// Hapus properti id_jalur_masuk dari chartData
delete chartData1.id_jalur_masuk
delete chartData2.id_jalur_masuk
delete chartData3.id_jalur_masuk
delete chartDataTotal.data

// Inisialisasi variabel array data
var valueData1 = []
var valueData2 = []
var valueData3 = []
var valueTotal = []

// Simpan data ke dalam array
for (let key in chartData1) {
    valueData1.push(chartData1[key])
}
for (let key in chartData2) {
    valueData2.push(chartData2[key])
}
for (let key in chartData3) {
    valueData3.push(chartData3[key])
}
for (let key in chartDataTotal) {
    valueTotal.push(chartDataTotal[key])
}

// Perbarui nilai data chart
chartBarSN.data.datasets[0].data = valueData1
chartBarSN.update()

chartBarSB.data.datasets[0].data = valueData2
chartBarSB.update()

chartBarSM.data.datasets[0].data = valueData3
chartBarSM.update()

chartBarTotal.data.datasets[0].data = valueTotal
chartBarTotal.update()
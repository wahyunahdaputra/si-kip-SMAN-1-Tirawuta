function filterData() {
    var inputs = document.querySelectorAll('.filter-input');
    var table, tr, td, i, j, txtValue, filter;

    table = document.getElementById("listApsStatus");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        if (!tr[i].classList.contains('always-visible')) { // Periksa apakah baris memiliki kelas always-visible
            tr[i].style.display = ""; // Jika tidak, tampilkan barisnya
        }

        for (j = 0; j < inputs.length; j++) {
            filter = inputs[j].value.toUpperCase();
            td = tr[i].getElementsByTagName("td")[j + 1]; // Kolom input dimulai dari indeks ke-1

            if (td) {
                txtValue = td.textContent || td.innerText;

                if (txtValue.toUpperCase().indexOf(filter) === -1 && !tr[i].classList.contains('always-visible')) {
                    tr[i].style.display = "none"; // Sembunyikan baris jika tidak cocok dengan salah satu input, kecuali jika memiliki kelas always-visible
                }
            }
        }
    }

}

//Tanda untuk tanggal kadaluarsa
var tanggalKadaluarsa = new Date(document.querySelector('.tanggal-kadaluarsa').innerText);
var tanggalHariIni = new Date(document.querySelector('.tanggal-hari-ini').innerText);

var selisih = Math.ceil((tanggalKadaluarsa - tanggalHariIni) / (1000 * 60 * 60 * 24));

if (selisih < 0) {
    document.querySelector('.selisih').classList.add('kadaluarsa');
    document.querySelector('.selisih').classList.add('text-bg-600', 'dark:text-bg-600');
} else {
    document.querySelector('.selisih').classList.remove('kadaluarsa');
    document.querySelector('.selisih').classList.remove('text-bg-600', 'dark:text-bg-600');
}
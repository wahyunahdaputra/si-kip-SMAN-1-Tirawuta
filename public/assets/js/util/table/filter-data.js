function filterData(tableId) {
    var inputs = document.querySelectorAll('.filter-input'+"-"+tableId);
    var table, tr, td, i, j, txtValue, filter;

    table = document.getElementById(tableId);
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

    generateDatalistOption(tableId);

}
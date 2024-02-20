window.onload = (event) => {
    generateDatalistOption();
}

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

    generateDatalistOption();

}

function generateDatalistOption() {
    var table = document.getElementById("listApsStatus");
    var datalistArray = getDatalistArray('listApsStatus');
    var datalists = {}

    var columnName = []
    for (var column = 1; column < table.rows[0].cells.length; column++) {
        var value = table.rows[1].cells[column].textContent.trim();
        columnName[column-1] = value;
    }

    for (var columnIndex = 0; columnIndex < columnName.length; columnIndex++) {
        datalists[columnName[columnIndex]] = document.getElementById(columnName[columnIndex]);
    }

    datalists["Fakultas"].innerHTML = '';
    datalists["Program"].innerHTML = '';
    datalists["Program Studi"].innerHTML = '';
    datalists["Peringkat Akreditasi"].innerHTML = '';
    datalists["Tanggal SK"].innerHTML = '';
    datalists["Tanggal Kadaluarsa"].innerHTML = '';
    datalists["No. SK"].innerHTML = '';
    datalists["Status Kadaluarsa"].innerHTML = '';
    datalists["Diakreditasi oleh"].innerHTML = '';

    Object.keys(datalistArray).forEach(key => {

        function renderOptionList(datalistId){
            if (datalistArray[key].columnName === datalistId) {
                var value = datalistArray[key].value;
                if(!datalists[datalistId].querySelector('option[value="' + value + '"]')) {
                    var option = document.createElement(`option`);
                    option.value = value;
                    datalists[datalistId].appendChild(option);
                    // console.log(value)
                }
            }
        }

        renderOptionList("Fakultas");
        renderOptionList("Program");
        renderOptionList("Program Studi");
        renderOptionList("Peringkat Akreditasi");
        renderOptionList("Tanggal SK");
        renderOptionList("Tanggal Kadaluarsa");
        renderOptionList("No. SK");
        renderOptionList("Status Kadaluarsa");
        renderOptionList("Diakreditasi oleh");
        
    });
}

function getDatalistArray(tableId) {
    var table = document.getElementById(tableId);
    
    var dataMap = {};
    
    for (var column = 1; column < table.rows[0].cells.length; column++) {
        var columnName = table.rows[1].cells[column].textContent.trim();
        dataMap[columnName] = {};
    }
    
    for (var column = 1; column < table.rows[0].cells.length; column++) {
        var columnName = table.rows[1].cells[column].textContent.trim();
        
        for (var row = 2; row < table.rows.length; row++ ) {

            var tr = table.querySelector(`tr.text-gray-700:nth-child(${row-1})`)
            var cellValue = table.rows[row].cells[column].textContent.trim();

            if (!dataMap[columnName][cellValue] && tr.style.display !== 'none') {
                dataMap[columnName][cellValue] = true;
            }

        }

    }

    var dataArray = []
    for (var columnName in dataMap) {
        for (var value in dataMap[columnName]) {
            dataArray.push({ columnName: columnName, value: value});
        }
    }

    return dataArray;
}
function generateDatalistOption(tableId) {
    var datalistArray = getDatalistArray(tableId);
    var datalists = {}

    var columnName = []
    columnName = getColumnName(tableId);

    for (var columnIndex = 0; columnIndex < columnName.length; columnIndex++) {
        datalists[columnName[columnIndex]] = document.getElementById(tableId+"."+columnName[columnIndex]);
    }

    for (var index = 0; index < columnName.length; index++) {
        var datalistElement = document.getElementById(tableId+"."+columnName[index])
        try {
            datalistElement.innerHTML = '';
        } catch (error) {
            console.warn(error);
            console.warn("generateDatalistOption: datalistElement is not declareted on column name: " + columnName[index])
        }
    }

    Object.keys(datalistArray).forEach(key => {
        function renderOptionList(datalistId){
            if (tableId+"."+datalistArray[key].columnName === tableId+"."+datalistId) {
                var value = datalistArray[key].value;
                if(!datalists[datalistId].querySelector('option[value="' + value + '"]') && value !== '') {
                    var option = document.createElement(`option`);
                    option.value = value;
                    datalists[datalistId].appendChild(option);
                }
            }
        }

        for (var i = 0; i <= columnName.length; i++) {
            try {
                renderOptionList(columnName[i]);
            } catch (error) {
                // console.warn(error)
            }
        }
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

function getColumnName(tableId) {
    var table = document.getElementById(tableId);
    var columnName = []
    for (var column = 1; column < table.rows[0].cells.length; column++) {
        var value = table.rows[1].cells[column].textContent.trim();
        columnName[column-1] = value;
    }
    return columnName;
}


window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const myTable = document.getElementById('myTable');
    if (myTable) {
        new myTable.DataTable(myTable);
    }
});

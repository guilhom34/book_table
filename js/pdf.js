
function save() {
	var pdf = new jsPDF();
	pdf.text(100,200,"Hello World!");
	pdf.save('helloworld.pdf');
}

function saveAutotable() {

	var doc = new jsPDF('p', 'pt');
    var elem = document.getElementById("auClic");
    var res = doc.autoTableHtmlToJson(elem);
    doc.autoTable(res.columns, res.data);
    doc.save("table.pdf");
}
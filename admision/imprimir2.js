function printTable() {
  var tableToPrint = document.getElementsByClassName("tabla");
  newWin = window.open("");
  newWin.document.write(tableToPrint.outerHTML);
  newWin.print();
  newWin.close();
}

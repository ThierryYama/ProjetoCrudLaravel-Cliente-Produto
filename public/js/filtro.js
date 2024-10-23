function filtrar() {
  // Declaração das variaves (pegando os elementos html)
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  table = document.getElementById("myTable");
  filter = input.value.toUpperCase();
  
  tr = table.getElementsByTagName("tr");

  //Percorrer os "tr"
  for (i = 0; i < tr.length; i++) {
    //Pegar a tag td (pegando o 1° link da tag td)
    td = tr[i].getElementsByTagName("td")[0];
    //Pegar o texto da tag td
    if (td) {
      txtValue = td.textContent || td.innerText;
      //Verificação do texto com o que foi digitado
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //Valor é igual
        tr[i].style.display = "";
      } else {
        //Valor é diferente;
        tr[i].style.display = "none";
      }
    }
  }

}

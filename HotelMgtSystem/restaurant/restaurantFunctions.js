//function to search for food items from the table
function searchItem() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("itemInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("foodItemsTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function getBalance(e){
        if(e.keyCode === 13){
            e.preventDefault(); // Ensure it is only this code that runs
            var amount=document.getElementById("totalAmount").value;
            var paid=document.getElementById("paidAmount").value;
            document.getElementById("balanceAmount").value=paid-amount+".00";

            //alert(e.keyCode);
        }
    }



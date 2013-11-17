function run_ajax(identification, person){
var xmlhttp;

  xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    }
  }
xmlhttp.open("GET","Killit.php?usera="+person+"&WID="+identification,true);
xmlhttp.send();
}

 $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('js/ajax.php', function(){
           setTimeout(refreshTable, 5000);
        });
    }





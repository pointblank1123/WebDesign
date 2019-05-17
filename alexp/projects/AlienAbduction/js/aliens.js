function expand(clickedId){
    var id = clickedId;
    window.alert("entered");
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../php/expandPerson.php?id="+id, true);
    xhttp.send();
}
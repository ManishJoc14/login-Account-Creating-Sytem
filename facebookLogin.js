
function check()
{
var empt1 = document.forms["form1"]["name"].value;
var empt2 = document.forms["form1"]["pass"].value;

var submi=document.getElementById("sub");
const cssObj = getComputedStyle(submi,null)
let left=cssObj.getPropertyValue("margin-left");

if (empt1== ""||empt2=="")
{   

    if(left=='15px'){
    
submi.style.marginLeft="45px";
}else{
submi.style.marginLeft="15px";
}
return false;
}
}

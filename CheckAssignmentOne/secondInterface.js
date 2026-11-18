function total(){
    let num1=parseInt(document.getElementById("x").value);
    let num2=parseInt(document.getElementById("y").value);
    let num3=parseInt(document.getElementById("z").value);
    let sum=num1+num2+num3;
    document.getElementById("xyz").innerHTML=sum;
}

function average(){
    let num1=parseInt(document.getElementById("x").value);
    let num2=parseInt(document.getElementById("y").value);
    let num3=parseInt(document.getElementById("z").value);
    let sum=num1+num2+num3;
    let average=sum/3;
    document.getElementById("yzx").innerHTML=average;
}
function erase(){
    document.getElementById("aaa").value="";
    document.getElementById("aab").value="";
    document.getElementById("aac").value="";
    document.getElementById("x").value="";
    document.getElementById("y").value="";
    document.getElementById("z").value="";

    document.getElementById("xyz").innerHTML="...";
    document.getElementById("yzx").innerHTML="...";
    

}
function printPage(){
    window.print();
}
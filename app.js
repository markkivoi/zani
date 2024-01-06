
function both(){
    var width = parseFloat(document.getElementById("width").value);
    var length = parseFloat(document.getElementById("length").value);

    area = length * width;
    price = area * 300;
     
    

    document.getElementById("area").value = area;
    document.getElementById("price").value = price;
   
}

function displayPrevious(){
    let present = document.getElementById("plotno").value;
    let next=document.getElementById("plotno").value;
    present.style.display="none";
    next.style.display="block";
}

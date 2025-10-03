
//Desde aqui le damos datos a los id de nuestro documento HTML mediante
//una llamada al js desde el HTML

let producto ={
    descripcion:"Lenovo 17",
    precio:"450 euros",
    stock:"12 unidades",
    imagen:"https://p3-ofp.static.pub//fes/cms/2024/10/30/jgk7dzjrmpbetak9f7npfzqyc6b9y0555541.png"
}

let nombre=document.getElementById("descripcion");
nombre.innerText=producto.descripcion;
//document.getElementById("descripcion").innerText=producto.descripcion;
let precio=document.getElementById("precio");
precio.innerText=producto.precio;
//document.getElementById("precio").innerText=producto.precio;

document.getElementById("stock").innerText=producto.stock;


document.getElementById("imagen").src =producto.imagen;

//se puede escribir de las dos formas anteriores
//en 2 lineas con let o en una lina con document.getElementById()
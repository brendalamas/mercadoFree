function add_carrito(id_prod, cant) {

  var datos = {agregar : [id_prod, cant]};

  var Ajax;

    Ajax=new XMLHttpRequest();

    Ajax.onreadystatechange = function() {
        
        if (Ajax.readyState==4 && Ajax.status==200) {

            console.log(Ajax.responseText);
            document.getElementById("mensaje_Modal").textContent = Ajax.responseText;
            //document.getElementById("staticBackdrop").modal("show");
            
            $("#staticBackdrop").modal("show");
        }

    }

    let datos2 = JSON.stringify(  datos );
    //console.log(datos);
    Ajax.open("POST","./carrito.php",true);
    Ajax.setRequestHeader("Content-Type","application/json");
    Ajax.send( datos2 );
  
}

function del_carrito(id_carro) {

    var datos = {eliminar : [id_carro]};
  
    var Ajax;
  
      Ajax=new XMLHttpRequest();
  
      Ajax.onreadystatechange = function() {
          
          if (Ajax.readyState==4 && Ajax.status==200) {
  
            let mensaje = Ajax.responseText;
              console.log(Ajax.responseText);
              if (mensaje == "Borrado Exitoso") {
                location.reload();
              }
          }
  
      }
  
      let datos2 = JSON.stringify(  datos );
      //console.log(datos);
      Ajax.open("POST","./carrito.php",true);
      Ajax.setRequestHeader("Content-Type","application/json");
      Ajax.send( datos2 );
    
  }

function add_cart_detail(id_prod) {
    var cantidad = parseInt(document.getElementById("cart_quantity").value);

    add_carrito(id_prod, cantidad);
}
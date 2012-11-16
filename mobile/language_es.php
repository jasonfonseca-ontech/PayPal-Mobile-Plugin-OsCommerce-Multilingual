<?php
$_['Products'] = "Productos";
$_['Featured Products'] = "Productos destacados";
$_['Oops'] = "Error";
$_['Total'] = "Total";
$_['Sorry the page you visited does not exist'] = "La p�gina que ha visitado no existe.";
$_['Cart'] = $_['cart'] = "Carro";
$_['Name'] = "Nombre";
$_['Price']= "Precio";
$_['Delete'] = "Eliminar";
$_['TITLE'] = "T�TULO"; NOT PRESENT
$_['Qty'] = $_['qty'] =  "Cant.";
$_['Thank You! We Appreciate your Business!'] = "�Gracias! Valoramos que utilice nuestro servicio.";
$_['OsCommerce'] = "OsCommerce";
$_['cookies'] = "El navegador no tiene activadas las cookies, que son necesarias para comprar en este sitio web; si lo desea, encontrar� una preferencia en el navegador del tel�fono para volver a activarlas. Una vez activadas de nuevo, puede empezar a comprar.";
$_['You can click here once you have enabled them again to start shopping.'] = 'Usted puede <a href="./">click here</a>una vez que se les ha permitido volver a empezar a comprar.'; NOT PRESENT
$_['Done'] = "Hecho";
$_['Home'] = "Inicio";
$_['Your search has produced no results'] = "La b�squeda no produjo resultados.";
$_['Categories'] = "Categor�as";
$_['Search'] = "Buscar";
$_['OR'] = "O";
 $_['Cookies are not enabled'] = "Las cookies no est�n activadas.";
$_['Your customer id:'] = "Su Id. de cliente:";
$_['Cookies are not enabled'] = "Las cookies no est�n activadas.";
$_['Results'] = "Resultados";
$_['More info...'] = "M�s informaci�n�";
$_['You can'] = "Usted puede"; NOT PRESENT
$_['click here'] = "haga clic aqu�"; NOT PRESENT
$_['once you have enabled them again to start shopping.'] = "Una vez activadas de nuevo, puede empezar a comprar.";
$_['Your cart is empty'] =$_L['Your cart is empty']= "El carro est� vac�o.";
$_['Shopping Cart'] = "Carro de la compra";
$_['Edit...'] = "Modificar� ";
$_['Product'] = "Producto";
$_['OR'] = "O";
$_['Gallery'] = "Galer�a"; NOT PRESENT
$_['Continue Shopping'] = "Continuar compra";
$_['clear text'] = "borrar texto";
$_['Return to Desktop site']  = "Volver al sitio del escritorio";
$_['Search Results'] = "Resultados de la b�squeda"; NOT PRESENT
$_['Add to Cart'] = "A�adir al carro";
$_['Update Cart'] = "Actualizar carro";
$_['Edit Cart'] = "Modificar carro";
$_['There is no description for this product'] = 'No hay ninguna descripci�n de este producto'; NOT PRESENT
$_['You have x items in your cart the total is y'] = 'Art�culos en el carro: <span class="itemcount">{count}</span>.<br/>Total:<span class="total">{total}</span>';
$_['Your order number is x'] = "El n�mero de su pedido es:";
$_['You have'] = "Tiene"; NOT PRESENT
$_['items in your cart'] = "art�culos en su carrito"; NOT PRESENT
$_['the total is'] = "el total es"; NOT PRESENT
$_['Product Options'] = "Opciones del producto"; NOT PRESENT
$_['No Products in this category'] = "No hay productos en esta categor�a.";
$_['Go'] = "Ir";

$_['Address'] = "Direcci�n";
$_['Billing Address'] = "Direcci�n de facturaci�n";
$_['Shipping Address'] = "Direcci�n de env�o";
$_['Addresses'] = "Direcciones";
$_['Pay Now'] = "Pagar ahora";

foreach($_ as $k => $v){	
$_[$k] =  iconv("ISO-8859-1//TRANSLIT",CHARSET, $v);
}

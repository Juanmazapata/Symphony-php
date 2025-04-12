


function imprimir(){




var objeto=document.getElementById('dat-per');  //obtenemos el objeto a imprimir

var
objeto2=document.getElementById('pestaña1');

var
objeto3=document.getElementById('pestaña2');

var
objeto4=document.getElementById('pestaña3');

var ventana=window.open('../formulario/frmperfil-ver.php');  //abrimos una ventana vacía nueva

ventana.document.header = 'Impresión  -  Symphony';

ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana

ventana.document.header = 'Impresión  -  Symphony';

ventana.document.write(objeto2.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana

ventana.document.write(objeto3.innerHTML);

ventana.document.write(objeto4.innerHTML);

ventana.document.close();  //cerramos el documento
ventana.print();  //imprimimos la ventana
ventana.close();  //cerramos la ventana



}

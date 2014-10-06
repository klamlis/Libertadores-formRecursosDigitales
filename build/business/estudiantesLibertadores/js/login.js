$(document).ready(function()
{
	//alert("hola");
	var index;
	 $("#dataError").hide();
   
	
	$(".clicDescargar").click(function()
	{
		index = $( ".clicDescargar" ).index( this );
    $("#dataError").hide();
    $("#ocultarLogin").show();

	});

	$('#btn_registro').click(function()
	{
		alert('HacerRegistro');

	});
	
	$("#btn_login").click(function()
	{
		//
		var data_Documento = $("#documento").val();
		$.post("php/loginAjax.php",{ data_Documento : data_Documento, index : index},function(respuesta){
            if (respuesta == true) {
            	switch(index) 
            	{
            		case 0:
            			$.mobile.changePage('html/abrir_pdf1.html',{transition: 'flow'});
        				break;
    				case 1:
        				$.mobile.changePage('html/abrir_pdf2.html',{transition: 'flow'});
       					 break;
       				case 2:
        				$.mobile.changePage('html/abrir_pdf3.html',{transition: 'flow'});
       					 break;
       			    case 3:
        				$.mobile.changePage('html/abrir_pdf4.html',{transition: 'flow'});
       					 break;
       			    case 4:
        				$.mobile.changePage('html/abrir_pdf5.html',{transition: 'flow'});
       					 break;
       			    case 5:
        				$.mobile.changePage('html/abrir_pdf6.html',{transition: 'flow'});
       					 break;
				      }
            }
            else{
              
              $("#dataError").show();
              $("#ocultarLogin").hide();
              
            }
        });
	});


});
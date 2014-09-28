$(document).ready(function()
{
	//alert("hola");
	 $("#dataError").hide();
	
	$(".clicDescargar").click(function()
	{
		var index = $( ".clicDescargar" ).index( this );
		alert(index);
	});

	$("#btn_login").click(function()
	{
		//

		var data_Documento = $("#documento").val();
		$.post("php/loginAjax.php",{ data_Documento : data_Documento},function(respuesta){
            if (respuesta == true) {

            	$.mobile.changePage('html/abrir_pdf1.html',{transition: 'flow'});
            }
            else{
            	$("#dataError").show();
            }
        });
	});

	function f_abrir()
	{
		window.open("https://www.google.com.co");
	}

});
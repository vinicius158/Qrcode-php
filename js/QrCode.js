$("#dados").submit(function(e){

e.preventDefault();       

let txt = $("#txt").val();         

if(txt.length === 0){

$(".message").html("<p class = 'alert'>O texto não foi inserido !!!!</p>");    

}else{

$.ajax({

url:"http://localhost/PHP/Conversor_Qrcode/processar.php",     
method:"POST",   
dataType:"json",     
data:{txt:txt}

}).done(function(response){

if(response != "erro"){   

$(".message").html("<p class = 'alert'>Gerado com sucesso !!!</p>");           

let qr_code = "<img class = 'img' src = '"+response+"'>";       

console.log(response);   

$(".Qr_code").html(qr_code);   

}else{

$(".message").html("<p class = 'alert'>Erro !!!</p>");   

}

});            

}

});    

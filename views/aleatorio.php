<html>
	<head>
		<title>USHUAH</title>
		<meta charset="UTF-8">
		<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

		<script>
			$("span").hide("POOOOOOO MEU");
			function newQuestion(){
				var url = "https://navports-mindsvirtual.c9users.io/";
				$.ajax({
					method: "POST",
					url: url+"Controuser/webServiceRandomSearch",
					dataType: "json",
					data: { 
						parametro: "1,2,3"
					}
				}).done(function( data ){
					var p = $("#pergunta");
					
					$.ajax({
						method: "POST",
						url: url+"Controuser/webServiceGetAnswer/"+data.id_pergunta ,
						dataType: "json"
					}).done(function(data2){
						p.html("");
						p.append("<h1><span class='hide'>"+ data.id_pergunta +"</span>"+ data.nm_pergunta +"</h1>");
					
						for(var r in data2){
							p.append( "<p><span class='hide'>"+ data2[r].id_pergunta +"</span>"+ data2[r].ds_alternativa +"</p>" );
						}
					});
				});
			}
			function saveDados(){
				/* 
					cookies = 	"id_jogador: 1; 
								perguntas: {id_pergunta: id_resposta, 
											id_pergunta: id_resposta}"
				*/
			   	var cookies = 	"id_jogador:1; perguntas:id_pergunta-id_resposta,id_pergunta-id_resposta";
			   	
			   	var id_jogador = cookies.split(";")[0].split(":")[1];
			   	var perguntas = cookies.split(";")[1].split(":")[1].split(",")
			   	
			   	document.cookie
			   	alert(perguntas);
			   	
			}
		</script>
		
		
		<script>
			var tempo = new Number();
			// Tempo em segundos
			tempo = 180;

			function startCountdown(){

    			// Se o tempo não for zerado

    			if((tempo - 1) >= 0){

        			// Pega a parte inteira dos minutos
        			var min = parseInt(tempo/60);

        			// Calcula os segundos restantes
        			var seg = tempo%60;

        			// Formata o número menor que dez, ex: 08, 07, ...
        			if(min < 10){
            			min = "0"+min;
            			min = min.substr(0, 2);
			        }

        			if(seg <=9){
			            seg = "0"+seg;
			        }

        			// Cria a variável para formatar no estilo hora/cronômetro
        			horaImprimivel = '00:' + min + ':' + seg;

        			//JQuery pra setar o valor
        			$("#sessao").html(horaImprimivel);

        			// Define que a função será executada novamente em 1000ms = 1 segundo
			        setTimeout('startCountdown()',1000);

        			// diminui o tempo
			        tempo--;

    				// Quando o contador chegar a zero faz esta ação
			    } else {
			        //window.open('../controllers/logout.php', '_self');
			        document.writeln ('<bgsound src=\"<?php echo base_url(); ?>static/audio/apitodefutebol.mp3\" loop=\"3\" volume=300 hidden=true>');
			        
			        document.writeln("<h1 style='color:red; font-size: 22em; text-decoration: blink;'>PORRA</h1>");
			    	
			    	
			    }
			}

			// Chama a função ao carregar a tela
			startCountdown();
		</script>
		

</script>
		
	</head>
	<body onload="newQuestion()">

		<div id="sessao"></div>
		
		<div id="pergunta"></div>
		<div id="resposta"></div>
		<div id="botoes">
			<button onclick="saveDados();newQuestion();">Enviar</button>
			
		</div>

	</body>
</html>

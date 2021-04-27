<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<script src="scriptheader.js" defer></script>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
     <link rel="stylesheet" href="css/gallery.min.css">
	 <link rel="stylesheet" href="css/gallery.theme.css"> 
	 <link rel="stylesheet" href="estilomobilenav.css">
	<title>Connect Telecom</title>
</head>
<body>
	<div class="cobrir" >
      <header>
      	<h1 class="logo">
      		<a href="index.php">Conecta</a>
      	</h1>
		  <h1 class="logo-1">
      		<a href="index.php">Conecta</a>
      	</h1>
      	  <div class="top">
      	  	<a  href="index.php">HOME</a>
      	  	<a  href="quemsomos.php">QUEM SOMOS</a>
      	  	<a  href="planos.php">PLANOS DE INTERNET</a>
      	  	<a  href="contatos.php">CONTATOS</a>
      	  </div>
      </header>
	  </div>
	  <nav class="mobile">
	  <div class="logo-mob"><h1 class="logo-1">
      		<a href="index.php">Conecta</a>
      	</h1>
       </div>	   
	  <ul id="ul-principal">
			<li class="li-p">
				<a> <img src="imagem/icone.png" width="20px"></a>
				<ul class="ul-ent">
					<li><a href="index.php">HOME</a></li>
					<li><a href="quemsomos.php">QUEM SOMOS</a></li>
					<li><a href="planos.php">PLANOS DE INTERNET</a></li>
					<li><a href="contatos.php">CONTATOS</a></li>
				</ul>
            </li>
		</ul>
      </header>
	  </nav>
	 <div class="galeria">
	  <div class="gallery autoplay items-3">
                    <div id="item-1" class="control-operator"></div>
					<div id="item-2" class="control-operator"></div>
					<div id="item-3" class="control-operator"></div>
					  <figure class="item">
						  <div style="background: linear-gradient(to right, #0044FF, #00FF6C);">
						  <a id="banner" href=""><img src="imagem/img.png"></a>
                         </div>
                      </figure>
					  <figure class="item">
					  <div style="background: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);">
						 <a id="banner" href=""><img src="imagem/cartaz.png"></a>
                      </div>
                      </figure>
					  <figure class="item">
						<div style="background: linear-gradient(to right, #0c7c3b, #beda91);">
						    <a id="banner" href=""><img src="imagem/cartazconnect.png"></a>
                        </div>
                      </figure>
					<div class="controls">
						<a href="#item-1" class="control-button">.</a>
						<a href="#item-2" class="control-button">.</a>
						<a href="#item-3" class="control-button">.</a>

                    </div>
      </div>
</div>
	  <div class="mobile">
	  <div class="slider">
		  <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
					<input type="radio" name="radio-btn" id="radio2">
					<input type="radio" name="radio-btn" id="radio3">
					 <div class="slide first">
					    <div style="background: linear-gradient(to right, #0044FF, #00FF6C);">
						  <a id="banner" href=""><img src="imagem/img.png"></a>
					    </div>
                      </div>
                      <div class="slide">
					    <div style="background: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);">
						  <a id="banner" href=""><img src="imagem/cartaz400.png"></a>
					    </div>
                       </div>    
					   <div class="slide">
					        <div style="background: linear-gradient(to right, #0c7c3b, #beda91);">
						      <a id="banner" href=""><img src="imagem/cartazconnect400.png"></a>
					         </div>	 
                       </div>
					<div class="navigation-auto">
						<div class="auto-btn1"></div>
						<div class="auto-btn2"></div>
						<div class="auto-btn3"></div>
                    </div>
				
				<div class="navigation-manual">
					<label for="radio1"	class="manual-btn"></label>
					<label for="radio2"	class="manual-btn"></label>
					<label for="radio3"	class="manual-btn"></label>
                </div>	
      </div>
   </div>
  </div>       
		 <script type="text/javascript">
		     var counter=1;
			 setInterval(function(){
				 document.getElementById('radio' + counter).checked = true;
				 counter++;
				 if(counter > 3){
					 counter = 1
				 }	
			 }, 5000);
		 </script>
    <div class="container">
            <div class="coluna">
			<a href="centraldoassinante.php"><img class="img" src="imagem/man.png">
			    <p id="cont">Central do Assinante<br>
                   Todas as informações que você precisa em um só lugar.</p></a>
			</div>
               <div class="coluna">
			     <a href=""><img class="img" src="imagem/file-icon.png">
			      <p id="cont">2ª via de Mensalidade<br>
                    Retire a 2ª via da sua mensalidade.</p></a>
                </div>
            <div class="coluna">
			     <a href="https://api.whatsapp.com/send?l=pt-BR"><img class="img" src="imagem/whats.png">
			          <p id="cont">Atendimento via WhatsApp</p>
					  <p style="color: #008c56;font-weight:bold; margin-left: 100px;font-family:'Courier New', Courier, monospace">2688-4334</p></a>
            </div>
    </div>
	<!--essa é a coluna mobile-->
	<div class="coluna-mob"><a href=""><img class="img" src="imagem/man.png">
			    <p id="cont">Central do Assinante<br>
                   Todas as informações que você precisa em um só lugar.</p></a></div>      
	<div class="coluna-mob"><a href=""><img class="img" src="imagem/file-icon.png">
			      <p id="cont">2ª via de Mensalidade<br>
                    Retire a 2ª via da sua mensalidade.</p></a></div>
	<div class="coluna-mob"><a href="https://api.whatsapp.com/send?l=pt-BR"><img class="img" src="imagem/whats.png">
			          <p id="cont">Atendimento via WhatsApp</p>
                        <p style="color: #008c56;">2688-4334</p></a></div>
	<!--fim da coluna mobile-->
<div class="fim">
   <h1 class="logo-1">
      		<a href="index.php">Conecta</a>
      	</h1>
	<div id="fim-link">
      	  	<a  href="index.php">HOME</a>
      	  	<a  href="quemsomos.php">QUEM SOMOS</a>
      	  	<a  href="planos.php">PLANOS DE INTERNET</a>
      	  	<a  href="contatos.php">CONTATOS</a>
    </div>
			<div class="fim-center">
				<div class="fim-atendimento"><p>Atendimento</p>
                    <p id="link-atend"><a href="mailto:atendimento@connectt.net.br" target="_BLANK" rel="noopener">atendimento@connectt.net.br</a></p>
                </div>
            <div>
			 <div class="fim-central">
				<p >Central de Relacionamento</p>
                 <p><a href="mailto:atendimento@connectt.net.br" target="_BLANK" rel="noopener">crc@connectt.net.br</a></p>
             </div>
			</div> 
			 
</div>
    <div class="fim-redes">
	 <p>Siga-nos nas redes</p>
      <i class="link-redes">
            <a id="facebook" href="">Facebook</a>
			<a id="twitter" href="">twitter</a>
			<a id="instagram" href="">instagram</a>
      </i>
    </div>
</div>
<div class="fim-mob"><h1 class="logo-1mob">
      		<a href="index.php">Conecta</a>
      	</h1>
	<div class="fim-link-mob">
      	  	<a  href="index.php">HOME</a>
      	  	<a  href="quemsomos.php">QUEM SOMOS</a>
      	  	<a  href="planos.php">PLANOS DE INTERNET</a>
      	  	<a  href="contatos.php">CONTATOS</a>
      	  </div>
			
				<div class="fim-atendimento-mob"><p>Atendimento</p>
                    <p id="link-atend"><a href="mailto:atendimento@connectt.net.br" target="_BLANK" rel="noopener">atendimento@connectt.net.br</a></p>
                </div>
			 <div class="fim-center-mob">
				<p >Central de Relacionamento</p>
                 <a href="mailto:atendimento@connectt.net.br" target="_BLANK" rel="noopener">crc@connectt.net.br</a></p>
             </div>
		   
		
    <div class="fim-redes-mob">
	 <p>Siga-nos nas redes</p>
	  <div class="link-redes-mob">
         <i>
            <a id="facebook" href="">Facebook</a>
			<a id="twitter" href="">twitter</a>
			<a id="instagram" href="">instagram</a>
         </i>
      </div>
    </div>
</div>
</body>
</html>
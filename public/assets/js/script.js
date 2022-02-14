$(document).ready(function(){
    $('#SalvarCadastroRapido').click(function() {
        nome        = $('#NomeClienteModal').val();
        telefone    = $('#TelefoneClienteModal').val();

        $.ajax({
            type:'POST',
            url:$('meta[name="urlBase"]').attr('content')+'cadastro-rapido',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'),nome,telefone},
            success:function(data){
                if(data == true){
                    $('.close').trigger('click');
                    alert('Cadastro realizado');
                }else{
                    $('.close').trigger('click');
                    alert('Cliente já tem cadastro!');
                }
                
            }
        });

    });

    $c = $('#cadastrado').val();
    if($c == 'Sim'){
        alert('Cliente Cadastrado');
    }
    $('#EnviarWhatsLoc').click(function() {
        id              = $('#NomeClienteModalLoc').val();
        valor           = $('#valorLoc').val();
        telefone        = $('#TelefoneClienteModalLoc').val();
        endereco        = $('#enderecoLoc').val();
        bairro          = $('#bairroLoc').val();
        numero          = $('#numeroLoc').val();
        municipio       = $('#municipioLoc').val();
        complemento     = $('#complementoLoc').val();
        condominio      = $('#condominioLoc').val();
        andar           = $('#andarLoc').val();
        quartos         = $('#quartosLoc').val();
        suites          = $('#suitesLoc').val();
        banheiros       = $('#banheirosLoc').val();
        salas_de_estar  = $('#salaEstarLoc').val();
        salas_de_jantar = $('#salaJantarLoc').val();
        cozinha         = $('#cozinhaLoc').val();
        lavanderia      = $('#lavanderiaLoc').val();
        escritorio      = $('#escritorioLoc').val();
        jardim          = $('#jardimLoc').val();
        varanda         = $('#varandaLoc').val();
        
        var texto ="Olá! Estou lhe enviando as informações sobre o imóvel que lhe interessou!\n" +
        "Lembrando que este imóvel é para locação \n"
                 +"Id: "+id+"\n" +
                 "Os custos desse imóvel são os seguintes: \n"            
                 + "Valor: " +valor+"\n"
                 + "Condomínio: "+condominio+"\n" +
                 "Seguem alguns detalhes mais específicos: \n"
                 + "Endereço: "+endereco+"\n"
                 + "Número: "+numero+"\n"
                 + "Bairro: "+bairro+"\n"
                 + "Município: "+municipio+"\n"
                 + "Complemento: "+complemento+"\n"
                 + "Andar: "+andar+"\n"
                 + "Quarto(s): "+quartos+"\n"
                 + "Suite(s): "+suites+"\n" 
                 + "Banheiro(s): "+banheiros+"\n"         
                 + "Sala(s) de estar: "+salas_de_estar+"\n" 
                 + "Sala(s) de Jantar: "+salas_de_jantar+"\n" 
                 + "Cozinha(s): "+cozinha+"\n" 
                 + "Lavanderia(s): "+lavanderia+"\n" 
                 + "Escritório(s): "+escritorio+"\n" 
                 + "Jardim(s): "+jardim+"\n" 
                 + "Varanda(s): "+varanda+"\n";
            texto = window.encodeURIComponent(texto);

        window.open("https://api.whatsapp.com/send?phone=" + telefone + "&text=" + texto, "_blank");

    });


    $('#EnviarWhatsVen').click(function() {
        id              = $('#NomeClienteModalVen').val();
        valor           = $('#valorVen').val();
        telefone        = $('#TelefoneClienteModalVen').val();
        endereco        = $('#enderecoVen').val();
        bairro          = $('#bairroVen').val();
        numero          = $('#numeroVen').val();
        municipio       = $('#municipioVen').val();
        complemento     = $('#complementoVen').val();
        condominio      = $('#condominioVen').val();
        andar           = $('#andarVen').val();
        quartos         = $('#quartosVen').val();
        suites          = $('#suitesVen').val();
        banheiros       = $('#banheirosVen').val();
        salas_de_estar  = $('#salaEstarVen').val();
        salas_de_jantar = $('#salaJantarVen').val();
        cozinha         = $('#cozinhaVen').val();
        lavanderia      = $('#lavanderiaVen').val();
        escritorio      = $('#escritorioVen').val();
        jardim          = $('#jardimVen').val();
        varanda         = $('#varandaVen').val();
        
        var texto ="Olá! Estou lhe enviando as informações sobre o imóvel que lhe interessou!\n" +
        "Lembrando que este imóvel é para locação \n"
                 +"Id: "+id+"\n" + 
                 "Os custos desse imóvel são os seguintes: \n"
                 + "Valor: " +valor+"\n"
                 + "Condomínio: "+condominio+"\n" +
                 "Seguem alguns detalhes mais específicos: \n"
                 + "Endereço: "+endereco+"\n"
                 + "Bairro: "+bairro+"\n"
                 + "Número: "+numero+"\n"
                 + "Município: "+municipio+"\n"
                 + "Complemento: "+complemento+"\n"
                 + "Andar: "+andar+"\n"
                 + "Quarto(s): "+quartos+"\n"
                 + "Suite(s): "+suites+"\n" 
                 + "Banheiro(s): "+banheiros+"\n"         
                 + "Sala(s) de estar: "+salas_de_estar+"\n" 
                 + "Sala(s) de Jantar: "+salas_de_jantar+"\n" 
                 + "Cozinha(s): "+cozinha+"\n" 
                 + "Lavanderia(s): "+lavanderia+"\n" 
                 + "Escritório(s): "+escritorio+"\n" 
                 + "Jardim(s): "+jardim+"\n" 
                 + "Varanda(s): "+varanda+"\n";
            texto = window.encodeURIComponent(texto);

        window.open("https://api.whatsapp.com/send?phone=" + telefone + "&text=" + texto, "_blank");

    });

    $('#btnInteressadosLoc').click(function() {

        $.ajax({
            type:'POST',
            url:$('meta[name="urlBase"]').attr('content')+'interessados',
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            beforeSend:function(){
				$('#interessadosLoc').html('<option>Carregando clientes...</option>');
			},
			success:function(json){
				
				$('#interessadosLoc').html('<option>Selecione o cliente...</option>');
				if (json != '') {
					$.each(json, function(key,value){
						$('#interessadosLoc').append('<option value="'+value['nome']+'">'+value['nome']+'</option>');
					})
				}else{
                    $('#interessadosLoc').html('<option>Sem clientes cadastrados...</option>');
                }

			},
			error:function(){
				alert('Algo deu errado!');
			}
        });

    });


    $('#btnInteressados').click(function() {


        $.ajax({
            type:'POST',
            url:$('meta[name="urlBase"]').attr('content')+'interessados',
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            beforeSend:function(){
				$('#interessadosVen').html('<option>Carregando clientes...</option>');
			},
			success:function(json){
				
				$('#interessadosVen').html('<option>Selecione o cliente...</option>');
				if (json) {
					$.each(json, function(key,value){
						$('#interessadosVen').append('<option>'+value['nome']+'</option>');
					})
				}

			},
			error:function(){
				alert('Algo deu errado!');
			}
        });

    });

});

$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("Você precisa marcar um tipo!");
        return false;
      }

    });
});
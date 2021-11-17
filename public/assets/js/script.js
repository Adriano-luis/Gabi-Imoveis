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

    $('#EnviarWhats').click(function() {
        id          = $('#NomeClienteModal').val();
        metragem    = $('#TelefoneClienteModal').val();
        quartos     =
        banheiros   =
        vagas       =
        pet         =
        condominio  =
        aluguel     =
        tipo        =

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
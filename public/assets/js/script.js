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

   /* $('#EnviarWhats').click(function() {
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

    });*/
});
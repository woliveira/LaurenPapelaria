var rua = '#billing_address_1';
var bairro = '#billing_neighborhood';
var cidade = '#billing_city';
var uf = '#billing_state';
var cep = '#billing_postcode';
//-------------------------------------------			

/* CODIGO BRUTO */
var $jq = jQuery.noConflict();
$jq(document).ready(function() {

    function limpa_formulario_cep() {
        // Limpa valores do formul�rio de cep.
        $jq(rua).val('');
        $jq(bairro).val('');
        $jq(cidade).val('');
        $jq(uf).val('');
    }

    //Quando o campo cep perde o foco.
    $jq(cep).blur(function() {
        //Nova vari�vel "cep" somente com d�gitos.
        var cepx = $jq(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cepx != '') {
            //Express�o regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            //Valida o formato do CEP.
            if (validacep.test(cepx)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                // $jq(rua).val('');
                // $jq(bairro).val('');
                // $jq(cidade).val('');
                // $jq(uf).val('');

                //Consulta o webservice viacep.com.br/
                $jq.getJSON('https://viacep.com.br/ws/' + cepx + '/json/?callback=?', function(dados) {
                    if (!('erro' in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $jq(rua).val(dados.logradouro);
                        $jq(bairro).val(dados.bairro);
                        $jq(cidade).val(dados.localidade);
                        $jq(uf).val(dados.uf);
                        $jq(uf).val(dados.uf).trigger('change');
                    } //end if.
                    else {
                        //CEP pesquisado n�o foi encontrado.
                        limpa_formulario_cep();
                        alert('CEP nao encontrado.');
                    }
                });
            } //end if.
            else {
                //cep � inv�lido.
                limpa_formulario_cep();
                alert('Formato de CEP invalido.');
            }
        } //end if.
        else {
            //cep sem valor, limpa formul�rio.
            limpa_formulario_cep();
        }
    });
});
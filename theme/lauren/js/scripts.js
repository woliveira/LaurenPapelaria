var rua = '#billing_address_1   ';
var bairro = '#billing_neighborhood';
var cidade = '#billing_city';
var uf = '#billing_state';
var cep = '#billing_postcode';

var shipping_rua = '#shipping_address_1   ';
var shipping_bairro = '#shipping_neighborhood';
var shipping_cidade = '#shipping_city';
var shipping_uf = '#shipping_state';
var shipping_cep = '#shipping_postcode';
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

    $jq(shipping_cep).blur(function() {
        var cepx = $jq(this).val().replace(/\D/g, '');

        if (cepx != '') {
            var validacep = /^[0-9]{8}$/;
            if (validacep.test(cepx)) {

                //Consulta o webservice viacep.com.br/
                $jq.getJSON('https://viacep.com.br/ws/' + cepx + '/json/?callback=?', function(dados) {
                    if (!('erro' in dados)) {
                        //Atualiza os campos com os valores da consulta.

                        $jq(shipping_rua).val(dados.logradouro);
                        $jq(shipping_bairro).val(dados.bairro);
                        $jq(shipping_cidade).val(dados.localidade);
                        $jq(shipping_uf).val(dados.uf);
                        $jq(shipping_uf).val(dados.uf).trigger('change');
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
                alert('Formato de CEP inválido.');
            }
        } //end if.
        else {
            //cep sem valor, limpa formul�rio.
            limpa_formulario_cep();
        }
    });

    $jq(cep).blur(function() {
        var cepx = $jq(this).val().replace(/\D/g, '');

        if (cepx != '') {
            var validacep = /^[0-9]{8}$/;
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
                alert('Formato de CEP inválido.');
            }
        } //end if.
        else {
            //cep sem valor, limpa formul�rio.
            limpa_formulario_cep();
        }
    });

    const address_field = document.getElementById('billing_address_1');
    const neighborhood_field = document.getElementById('billing_neighborhood');
    const city_field = document.getElementById('billing_city');
    const state_field = document.getElementById('billing_state');

    address_field.setAttribute('disabled', '');
    neighborhood_field.setAttribute('disabled', '');
    city_field.setAttribute('disabled', '');
    state_field.setAttribute('disabled', '');
    
});
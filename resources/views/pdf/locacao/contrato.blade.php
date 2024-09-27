<!DOCTYPE html>
<html>
<head>

<style>
    .retangulo {
        width: 100%;
        height: 2.5%;
        background-color: rgb(222, 225, 226);
        display: flex;
        align-items: center;
        text-align: center;
    }
    .texto {
        margin: auto;
        font-weight: bold;
        font-size: 20px;

    }
    .tabelas {
        border: 1px;
        border-style: solid;
        border-color: grey;
        width: 100%;
        border-collapse: collapse;
    }


    #ficha td {
    border: 1px solid rgb(160 160 160);
    padding: 0px 10px;
    }

    .tx {
        line-height:1.5;
    }
    img {
        width: 8rem;
        height: 4rem;
    }

</style>

<style>
    .tela {
        width: 50%;
        height: 100px;
        border: 0px solid black;
        float: left;

    }
</style>

</head>
<body>

<table style="width: 100%">
  <tr>
    <td><img src="{{ asset('img/logo.png') }}" alt="Logo"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">JPS VEÍCULOS LTDA</p>
         <p style="font-size:16px;" align="center">Rua Benjamin Gerlach, 584 – Fazenda Santo Antônio – São José/SC.<br>
                                                  Contato: (21)98788-6892<br>
                                                  Email: vendas.jpsveiculos@gmail.com - CNPJ: 43.354.322/0001-41</p>
    </td>
</tr>
</table>
    <div class="retangulo">
        <span class="texto">FICHA DE LOCAÇÃO</span>
    </div>
<table>
</table>
<div class="retangulo">
    <span class="texto">LOCATÁRIO</span>
</div>

<table class="tabelas" width="100%" id='ficha' >
    <tr>
        <td colspan="2">
            <b class="tx">Nome:</b> {{$locacao->Cliente->nome}}</p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <b class="tx">Endereço:</b>  {{$locacao->Cliente->endereco}}
        </td>
    <tr>
        <td>
            <b class="tx">Cidade:</b> {{$locacao->Cliente->Cidade->nome}}
        </td>
        <td>
            <b class="tx">UF:</b> {{$locacao->Cliente->Estado->nome}}
        </td>
    </tr>
    <tr>
        <td>
            <b class="tx">Rg:</b> {{$locacao->Cliente->rg}}
        </td>
        <td>
            <b class="tx">Org Exp:</b> {{$locacao->Cliente->exp_rg}}
        </td>

    </tr>
    <tr>
        <td>
            <b class="tx">Telefones:</b>  {{$tel_1.' - '.$tel_2}}
        </td>
        <td>
            <b class="tx">CPF/CNPJ:</b> {{$cpfCnpj}}
        </td>
    </tr>

</table>
</table>
<div class="retangulo">
    <span class="texto">VEÍCULO</span>
</div>
<table class="tabelas" id='ficha'>
    <tr>
        <td>
            <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
        </td>
        <td>
            <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
        </td>
        <td>
            <b class="tx">Chassi/Renavan:</b> {{$locacao->Veiculo->chassi}}
        </td>
    </tr>
    <tr>
        <td>
            <b class="tx">Ano:</b>  {{$locacao->Veiculo->ano}}
        </td>
        <td>
            <b class="tx">Cor:</b>  {{$locacao->Veiculo->cor}}
        </td>
        <td>
            <b class="tx">Placa:</b>  {{$locacao->Veiculo->placa}}
        </td>
    </tr>
</table>
<div class="retangulo">
    <span class="texto">LOCAÇÃO</span>
</div>
<table class="tabelas" id='ficha'>
    <tr>
        <td>
            <b class="tx">Data da Saída:</b> {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}}
        </td>
        <td>
            <b class="tx">Hora da Saída:</b> {{$locacao->hora_saida}}
        </td>

        <td>
            <b class="tx">Data do Retorno:</b> {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}
        </td>
        <td>
            <b class="tx">Hora do Retorno:</b> {{$locacao->hora_retorno}}
        </td>
    </tr>
        <td>
            <b class="tx">Km de Saída:</b>  {{$locacao->km_saida}}
        </td>
        <td>
            <b class="tx">Qtd de Diárias:</b> {{$locacao->qtd_diarias}}
        </td>
        <td colspan="2">
            <b class="tx">Valor da Diária R$:</b> {{$locacao->Veiculo->valor_diaria}}
        </td>

    </tr>
    <tr>
        <td >
            <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
        </td>
        <td >
            <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
        </td>
        <td colspan="2">
            <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
        </td>

    </tr>

</table>

<table class="tabelas" id='ficha'>
    <tr>
        <td>
            <b class="tx">Observações: </b> {{$locacao->obs}}
        </td>
    </tr>
</table>

<div class="container">
    <div class="tela">
        <table>
            <tr>
                <td>
                    <h3>Inspeção de Veículo</h3>
                    <tr>
                        <td>() Documento</td>
                    </tr>
                    <tr>
                        <td>( ) Calota</td>
                    </tr>
                    <tr>
                        <td>( ) Macaco</td>
                    </tr>
                    <tr>
                        <td>( ) Estepe</td>
                    </tr>
                    <tr>
                        <td>( ) Trava</td>
                    </tr>
                    <tr>
                        <td>( ) Triângulo</td>
                    </tr>
                    <tr>
                        <td>( ) Tapetes</td>
                    </tr>
                    <tr>
                        <td>( ) Ar Condicionado</td>
                    </tr>
                    <tr>
                        <td>( ) Radio CD</td>
                    </tr>
                    <tr>
                        <td>( ) Retrovisores</td>
                    </tr>
                    <tr>
                        <td>( ) Antena</td>
                    </tr>
                    <tr>
                        <td>( ) Pen Driver</td>
                    </tr>
                </td>
            </tr>
        </table>

    </div>

    <div class="tela">

       <table style="width: 100%">

        <tr>
            <td>
                <p style="margin: 54px">São José / SC, {{ $dataAtual->isoFormat('DD MMMM YYYY') }} </p>
            </td>
        </tr>

        <tr>


                    <td><img style="width: 10rem; height: 5rem; margin-left: 70px; margin-bottom: -10px" src="{{ asset('img/assinatura.png') }}" alt="Logo">
                        _________________________________________<br>
                                    <center>Locador</center>
                    <p style = "font-size:10px; text-align: center">Proprietário ou representante legal da Empresa</p>
                    </td>
        </tr>

            </td>
        </tr>

        <tr>
            <td>
                <tr>
                    <td>
                        <div>
                            _________________________________________<br>
                                    <center>Locatário</center>
                                    <p style = "font-size:10px; text-align: justify">Pelo Presente termo, o LOATÁRIO autoriza a LOCADORA a
                                    encaminhar ao Depatarmento de Trânsito, em nome do(s) motorista(s) que utilizar(em)
                                    o(s) veículo acima, a(s) decorrente(s) de infrações eventualmente cometidas,
                                    no período de locação. </p>
                        </div>
                    </td>
                </tr>

            </td>
        </tr>
       </table>
    </div>
</div>


<!-- PÁGINA 2 -->

<style>
    .break {
        page-break-before: always;
         }
    .parag {
        text-align: justify;
        font-size: 10.7;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
      <td><img src="{{ asset('img/logo.png') }}" alt="Logo"></td>
      

      </td>
  </tr>
  </table>
</div>
<div>
    <p style="text-align: center;"><strong>CONTRATO DE LOCA&Ccedil;&Atilde;O DE VE&Iacute;CULO</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: justify;"><strong>LOCADOR(A): JPS VE&Iacute;CULOS LTDA</strong>, empresa de direito privado inscrita no CNPJ sob N&ordm; 43.354.322/0001-41, com sede em Rua Benjamin Gerlach, 584 &ndash; Fazenda Santo Ant&ocirc;nio &ndash; S&atilde;o Jos&eacute;/SC.&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>LOCAT&Aacute;RIO(A): {{$locacao->Cliente->nome}}, motorista de aplicativo, inscrita no CPF {{$cpfCnpj}}, portador do RG {{$locacao->Cliente->rg}} - {{$locacao->Cliente->exp_rg}}, CNH {{$locacao->Cliente->cnh}}, residente e domiciliado {{$locacao->Cliente->endereco}} - {{$locacao->Cliente->Cidade->nome}} - {{$locacao->Cliente->Estado->uf}}</strong></p>
<p style="text-align: justify;">As partes acima identificadas t&ecirc;m ente si, justo e acertado o presente Contrato de Loca&ccedil;&atilde;o de Ve&iacute;culo por Prazo Determinado, que se reger&aacute; pelas cl&aacute;usulas seguintes e pelas condi&ccedil;&otilde;es descritas no presente.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DO OBJETO DO CONTRATO</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 1&ordf;. </strong>O presente contrato tem como OBJETO a loca&ccedil;&atilde;o do ve&iacute;culo: {{$locacao->Veiculo->modelo}} - {{$locacao->Veiculo->Marca->nome}}, cor {{$locacao->Veiculo->cor}}, combust&iacute;vel &aacute;lcool/gasolina com placas {{$locacao->Veiculo->placa}}.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> O ve&iacute;culo, como dito, &eacute; de propriedade ou sob administra&ccedil;&atilde;o do LOCADOR e entregue com todos os equipamentos exigidos pelo C&oacute;digo de Tr&acirc;nsito Brasileiro e em perfeitas condi&ccedil;&otilde;es de uso e seguran&ccedil;a, conforme checklist anexo 1, devidamente assinado pelo LOCAT&Aacute;RIO.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> No ve&iacute;culo objeto do presente contrato haver&aacute; publicidade da empresa locadora.</p>
<p style="text-align: justify;">Par&aacute;grafo terceiro: &Eacute; de <span style="text-decoration: underline;">obrigatoriedade</span> do locat&aacute;rio sempre manter o n&iacute;vel do combust&iacute;vel com pelo menos &frac14; do tanque, principalmente em ve&iacute;culos a g&aacute;s, pois caso venha queimar a bomba do combust&iacute;vel o preju&iacute;zo ser&aacute; por parte do LOCAT&Aacute;RIO.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DO VALOR DO ALUGUEL</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 2&ordf;. </strong>Pela presente loca&ccedil;&atilde;o, obriga o LOCAT&Aacute;RIO a pagar o valor semanal de R$ 650,00 (seiscentos e cinquenta reais), sendo o primeiro pagamento no ato da assinatura do presente termo, e os demais com frequ&ecirc;ncia de 07 dias em cada pagamento at&eacute; o termino do contrato.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> O LOCAT&Aacute;RIO dever&aacute; efetuar o pagamento do valor acordado mediante dinheiro (esp&eacute;cie), PIX (TELEFONE): 48 98832-8626 ou dep&oacute;sito banc&aacute;rio na&nbsp;Conta Corrente n. 31294092-0, ag&ecirc;ncia n. 0001, Banco 336 C6 BANK, de titularidade de JPS Ve&iacute;culos, inscrito no CNPJ n&ordm; 43.354.322/0001-41, comprometendo-se o Locat&aacute;rio a encaminhar o respectivo comprovante de dep&oacute;sito por WhatsApp n&uacute;mero <strong><em>21 98788-</em></strong> <strong><em>6892</em></strong></p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> O LOCAT&Aacute;RIO poder&aacute; utilizar o ve&iacute;culo at&eacute; 10.000km (dez mil quil&ocirc;metros) por m&ecirc;s, o que ultrapassar condicionar&aacute; o LOCAT&Aacute;RIO ao pagamento de R$ 0,35 (trinta e cinco centavos) a cada KM ultrapassado, devendo ser pago a cada 1.000km (hum mil quil&ocirc;metros) rodados.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Terceiro:</span> Em caso de inadimplemento, ser&aacute; aplicada multa de 10% (dez por cento), bem como incidir&atilde;o juros de mora de 1% (um por cento) ao m&ecirc;s sob o valor devido e corre&ccedil;&atilde;o monet&aacute;ria, e ensejar&aacute; a sua cobran&ccedil;a atrav&eacute;s de advogado. Ficam desde j&aacute;, fixados os honor&aacute;rios advocat&iacute;cios em 10% (dez por cento), se amig&aacute;vel a cobran&ccedil;a, e de 20% (vinte por cento), se judicial.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Quarto:</span> O valor do aluguel firmado neste contrato ser&aacute; reajustado a cada 12 (doze) meses, tendo como base o &iacute;ndice IGP-M. E, em caso de falta desse &iacute;ndice, o reajuste se dar&aacute; com base na m&eacute;dia da varia&ccedil;&atilde;o dos &iacute;ndices inflacion&aacute;rios do ano corrente ao da execu&ccedil;&atilde;o da loca&ccedil;&atilde;o, ou ainda, caso ocorra altera&ccedil;&otilde;es que justifiquem o aumento do valor do aluguel.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Quinto:</span> Em caso de inadimplemento, incidir&atilde;o juros de mora de 1% (um por cento) ao m&ecirc;s sob o valor devido e corre&ccedil;&atilde;o monet&aacute;ria, e ensejar&aacute; a sua cobran&ccedil;a atrav&eacute;s de advogado. Ficam desde j&aacute;, fixados os honor&aacute;rios advocat&iacute;cios em 10% (dez por cento), se amig&aacute;vel a cobran&ccedil;a, e de 20% (vinte por cento), se judicial.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Sexto:</span> O LOCAT&Aacute;RIO n&atilde;o vindo a efetuar o pagamento do aluguel, a partir do primeiro dia de atraso, fica sujeito a ter a posse do ve&iacute;culo configurada como apropria&ccedil;&atilde;o ind&eacute;bita, concedendo a LOCADORA &agrave; retomada da posse do ve&iacute;culo imediatamente e a rescis&atilde;o do presente contrato sem a necessidade de aviso pr&eacute;vio incidindo em desfavor do LOCATARIO todas as multas e penalidades legais, conferindo tamb&eacute;m ao locador a possibilidade da a&ccedil;&atilde;o de todas as medidas judiciais cab&iacute;veis no intuito de reaver o ve&iacute;culo e cobrar os valores em abertos e eventuais ressarcimentos decorrentes de mau uso ou deprecia&ccedil;&atilde;o do ve&iacute;culo.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo S&eacute;timo:</span> O ve&iacute;culo objeto deste contrato, possui rastreador com possibilidade de bloqueio para locomo&ccedil;&atilde;o, podendo o LOCADOR, face o descumprimento do pagamento ou de qualquer cl&aacute;usula deste contrato utilizar o bloqueador do ve&iacute;culo impedindo em que, caso n&atilde;o seja poss&iacute;vel a retirada do ve&iacute;culo pelo LOCADOR.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Oitavo:</span> Ser&aacute; de responsabilidade do LOCAT&Aacute;RIO todas as despesas referentes &agrave; utiliza&ccedil;&atilde;o do ve&iacute;culo, desde que n&atilde;o seja causado por imprud&ecirc;ncia do LOCAT&Aacute;RIO direta e indiretamente, exemplo: batidas, amassados superficiais, super aquecimento por falta de aten&ccedil;&atilde;o, pneus rasgados, etc.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA GARANTIA</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 3&ordf;. </strong>O LOCAT&Aacute;RIO concorda desde j&aacute; em pagar, a t&iacute;tulo de fian&ccedil;a no caso de sinistro ou danos, a sinal cau&ccedil;&atilde;o no valor de R$ 1000,00 (hum mil reais), sendo pagos no ato da assinatura.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> A cau&ccedil;&atilde;o ser&aacute; devolvida caso entregue na retirada do ve&iacute;culo ao final do per&iacute;odo 30 dias ap&oacute;s termino da loca&ccedil;&atilde;o ao LOCAT&Aacute;RIO, salvo, em casos de danos identificados na vistoria ou multa por quebra de contrato, bem como a t&iacute;tulo de compensa&ccedil;&atilde;o de alugu&eacute;is.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> Em caso de n&atilde;o pagamento das obriga&ccedil;&otilde;es, nos termos definidos neste instrumento, poder&aacute; o LOCADOR realizar a execu&ccedil;&atilde;o do referido t&iacute;tulo de cr&eacute;dito, utilizando-se dos meios judiciais e extrajudiciais.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA</strong> <strong>LIMPEZA,</strong> <strong>CONSERVA&Ccedil;&Atilde;O, MANUTEN&Ccedil;&Atilde;O</strong> <strong>E</strong> <strong>BENFEITORIAS NECESS&Aacute;RIAS</strong></span></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 4&ordf;. </strong>O ve&iacute;culo ser&aacute; entregue ao LOCAT&Aacute;RIO limpo e dever&aacute; ser devolvido ao LOCADOR nas mesmas condi&ccedil;&otilde;es em que foi retirado.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 5&ordf;. </strong>Sobre o LOCAT&Aacute;RIO recai a responsabilidade por zelar pela conserva&ccedil;&atilde;o, limpeza do bem, seguran&ccedil;a, efetuando as manuten&ccedil;&otilde;es necess&aacute;rias para sua conserva&ccedil;&atilde;o, sendo que os gastos e pagamentos decorrentes da mesma, correr&atilde;o por conta do LOCADOR.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 6&ordf;. </strong>O LOCAT&Aacute;RIO declara receber o bem em perfeito estado de conserva&ccedil;&atilde;o e perfeito funcionamento, devendo observar o que consta no termo de vistoria, devidamente assinado pelo LOCAT&Aacute;RIO.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Caso o ve&iacute;culo seja devolvido sujo, seja interna ou externamente, ser&aacute; cobrada uma taxa de lavagem simples, especial ou higieniza&ccedil;&atilde;o, dependendo do estado do ve&iacute;culo na devolu&ccedil;&atilde;o da retirada do LOCADOR.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> Caso haja a necessidade de lavagem especial, ser&aacute; cobrada, al&eacute;m da taxa de lavagem, o valor m&iacute;nimo de 1 (uma) di&aacute;ria de loca&ccedil;&atilde;o, ou quantas di&aacute;rias forem necess&aacute;rias at&eacute; a disponibiliza&ccedil;&atilde;o do ve&iacute;culo para loca&ccedil;&atilde;o, limitado a 5 (cinco) di&aacute;rias do ve&iacute;culo com base na tarifa vigente.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DO PRAZO DO ALUGUEL</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 7&ordf;. </strong>O prazo de loca&ccedil;&atilde;o do referido ve&iacute;culo &eacute; de 60 (sessenta) dias, prorrogando-se automaticamente a partir do termo, se n&atilde;o houver manifesta&ccedil;&atilde;o em contr&aacute;rio.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo &Uacute;nico:</span> Se ap&oacute;s o fim da loca&ccedil;&atilde;o, caso a LOCADORA n&atilde;o queira prorrogar a loca&ccedil;&atilde;o, e o referido ve&iacute;culo n&atilde;o for devolvido, ser&aacute; cobrado o valor do aluguel proporcional aos dias de atraso, acumulado de multa di&aacute;ria de R$ 150,00 (cento e cinquenta reais).</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA UTILIZA&Ccedil;&Atilde;O</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 8&ordf;. </strong>O ve&iacute;culo dever&aacute; ser utilizado pelo LOCAT&Aacute;RIO exclusivamente da seguinte maneira: exclusivamente para transporte por aplicativo <strong>UBER, 99 e POP</strong>, <strong>EXCETO &ldquo;BLABLACAR&rdquo;, salvo acordo pr&eacute;vio entre as partes.</strong></p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Qualquer modifica&ccedil;&atilde;o no ve&iacute;culo s&oacute; poder&aacute; ser feita com a autoriza&ccedil;&atilde;o expressa da LOCADORA.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> O locat&aacute;rio dever&aacute; obedecer a dist&acirc;ncia m&aacute;xima permitida do Munic&iacute;pio do presente contrato em um raio de 200 km, devendo o locat&aacute;rio solicitar autoriza&ccedil;&atilde;o expressa da locadora para deslocar-se a dist&acirc;ncia superior &agrave;quela pr&eacute;- determinada, sob pena de rescis&atilde;o contratual.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA VEDA&Ccedil;&Atilde;O &Agrave; SUBLOCA&Ccedil;&Atilde;O E EMPR&Eacute;STIMO DO VE&Iacute;CULO</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 9&ordf;. </strong>Ser&aacute; permitido o uso do ve&iacute;culo objeto do presente contrato, apenas pelo LOCAT&Aacute;RIO, sendo vedada, no todo ou em parte, a subloca&ccedil;&atilde;o, transfer&ecirc;ncia, empr&eacute;stimo, comodato ou cess&atilde;o da loca&ccedil;&atilde;o, seja a qualquer t&iacute;tulo, sem expressa anu&ecirc;ncia da LOCADORA, sob pena de imediata rescis&atilde;o.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DAS MULTAS E INFRA&Ccedil;&Otilde;ES DE TR&Acirc;NSITO</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 10&ordf;. </strong>O LOCAT&Aacute;RIO se obriga a pagar todas as multas e penalidades decorrentes de infra&ccedil;&otilde;es &agrave;s leis e regulamentos de tr&acirc;nsito, que ser&atilde;o de sua inteira e exclusiva responsabilidade, durante o per&iacute;odo em que estiver de posse do ve&iacute;culo.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> O LOCAT&Aacute;RIO declara-se ciente e concorda que se ocorrer qualquer multa ou infra&ccedil;&atilde;o de tr&acirc;nsito no per&iacute;odo em que o ve&iacute;culo estiver alugado, seu nome poder&aacute; ser indicado pela LOCADORA junto ao &Oacute;rg&atilde;o de Tr&acirc;nsito atuante, na qualidade de condutor do ve&iacute;culo.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> O LOCAT&Aacute;RIO dever&aacute; entregar &agrave; LOCADORA, c&oacute;pia da notifica&ccedil;&atilde;o/autua&ccedil;&atilde;o de tr&acirc;nsito, caso seja autuado por autoridade policial ou de tr&acirc;nsito, antes do vencimento do prazo para recurso.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 11&ordf;. </strong>Caso as multas sejam pagas pela LOCADORA, dever&atilde;o ser reembolsadas, devidamente corrigidas, mediante a apresenta&ccedil;&atilde;o dos comprovantes, sem renunciando o LOCAT&Aacute;RIO seu direito a recursos.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 12&ordf;. </strong>Multas lan&ccedil;adas ou comunicadas ap&oacute;s o termino do presente contrato relativas ao per&iacute;odo da loca&ccedil;&atilde;o dever&atilde;o ser pagas pelo LOCAT&Aacute;RIO, salvo se tais multas forem imput&aacute;veis &agrave; LOCADORA, por irregularidade na documenta&ccedil;&atilde;o do ve&iacute;culo.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Em raz&atilde;o das multas porventura aplicadas pelos agentes e/ou policiais de tr&acirc;nsito em todo o territ&oacute;rio nacional ou internacional, durante o per&iacute;odo em que estiver de posse do ve&iacute;culo locado, a pontua&ccedil;&atilde;o na Carteira de habita&ccedil;&atilde;o e outras penalidades previstas na Lei n. 9.503/97 e regulamentos, s&atilde;o de responsabilidade &uacute;nica e exclusiva do LOCATARIO, obrigando-se este a transferir tais pontos de imediato.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> Em caso de apreens&atilde;o do ve&iacute;culo, ser&atilde;o cobradas do LOCAT&Aacute;RIO todas as despesas de servi&ccedil;o dos profissionais envolvidos para libera&ccedil;&atilde;o do ve&iacute;culo alugado, assim como todas as taxas cobradas pelos &oacute;rg&atilde;os competentes, e tamb&eacute;m quantas di&aacute;rias forem necess&aacute;rias at&eacute; a disponibiliza&ccedil;&atilde;o do ve&iacute;culo para loca&ccedil;&atilde;o.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Terceiro:</span> Cabe ao LOCAT&Aacute;RIO, no ato da assinatura do presente contrato, assinar tamb&eacute;m TERMO DE RESPONSABILIDADE, o qual consiste no instrumento apto a eximir a LOCADORA de quaisquer multas, acidentes ou ocorr&ecirc;ncias ocasionadas com o ve&iacute;culo objeto do presente ajuste, bem como se comprometendo a receber as pontua&ccedil;&otilde;es correspondentes em sua CNH (Carteira Nacional de Habilita&ccedil;&atilde;o).</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA MANUTEN&Ccedil;&Atilde;O</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 13&ordf;. </strong>Correr&atilde;o por conta da LOCADORA &agrave;s despesas de manuten&ccedil;&atilde;o preventiva e corretiva, excetuando-se combust&iacute;vel, troca de l&acirc;mpadas queimadas, consertos de acess&oacute;rios e pneum&aacute;ticos, vidros, lavagens, lubrifica&ccedil;&atilde;o e despesas decorrentes de colis&atilde;o e/ou as ocasionadas por mau uso ou utiliza&ccedil;&atilde;o inadequada do VE&Iacute;CULO.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Se durante o per&iacute;odo da manuten&ccedil;&atilde;o, a LOCADORA n&atilde;o dispuser do bem ou outro de categoria igual ou similar, conceder&aacute; desconto na loca&ccedil;&atilde;o, proporcionalmente ao tempo da manuten&ccedil;&atilde;o.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> A manuten&ccedil;&atilde;o e troca das pe&ccedil;as decorrentes do mau uso do ve&iacute;culo, assim entendido como a sua utiliza&ccedil;&atilde;o em desacordo com as instru&ccedil;&otilde;es de uso, ser&atilde;o de responsabilidade do LOCAT&Aacute;RIO.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Terceiro:</span> Se durante o per&iacute;odo de loca&ccedil;&atilde;o o ve&iacute;culo apresentar defeito cujo conserto demore tempo superior a 3 (tr&ecirc;s) dias, o LOCAT&Aacute;RIO poder&aacute; optar pela rescis&atilde;o do contrato ou aguardar pelo prazo estipulado para a corre&ccedil;&atilde;o do defeito.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Quarto:</span> O LOCAT&Aacute;RIO dever&aacute; realizar a troca do &oacute;leo e filtros, devendo ser realizada a cada 9.000km (nove mil quil&ocirc;metros), caso n&atilde;o seja feito a manuten&ccedil;&atilde;o dentro do Km estipulado, ser&aacute; cobrado multa di&aacute;ria de R$ 50,00 (cinquenta reais).</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>AVARIAS E INDENIZA&Ccedil;&Otilde;ES</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 14&ordf;. </strong>Caso sejam constatadas avarias no ve&iacute;culo locado, no ato da sua devolu&ccedil;&atilde;o, ser&atilde;o cobrados do Locat&aacute;rio os valores das respectivas avarias.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo &Uacute;nico:</span> Caso o Locat&aacute;rio cause danos a terceiros, dever&aacute; ressarcir a integralmente ao LOCADOR ou ao terceiro de fora direta mediante comprovantes.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 15&ordf;. </strong>Ser&atilde;o cobradas em caso de perda, roubo ou furto, as despesas para a reposi&ccedil;&atilde;o das chaves e/ou documentos do ve&iacute;culo locado.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 16&ordf;. </strong>O LOCAT&Aacute;RIO dever&aacute; ressarcir as despesas com ve&iacute;culo apreendido, suportadas pelo LOCADOR caso o ve&iacute;culo locado seja apreendido em p&aacute;tios e dep&oacute;sitos de &oacute;rg&atilde;os de tr&acirc;nsito, incluindo di&aacute;rias e taxas dos referidos locais, assim como servi&ccedil;os profissionais de advogados e/ou despachantes para libera&ccedil;&atilde;o do ve&iacute;culo, c&oacute;pias autenticadas e reconhecimento de firmas, nos casos em que der causa o Locat&aacute;rio.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 17&ordf;. </strong>Dever&aacute; o LOCAT&Aacute;RIO indenizar a t&iacute;tulo de lucros cessantes, quando a LOCADORA deixar de auferir com o ve&iacute;culo locado, em raz&atilde;o de conduta do LOCAT&Aacute;RIO, inclusive furto, roubo, acidente, calculado &agrave; base do pre&ccedil;o da di&aacute;ria contratada. Tais valores ser&atilde;o cobrados caso n&atilde;o tenha sido contratada a respectiva prote&ccedil;&atilde;o ou em casos em que houver a perda desta prote&ccedil;&atilde;o.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA UTILIZA&Ccedil;&Atilde;O DO SEGURO</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 18&ordf;. </strong>Em caso de sinistro/colis&atilde;o, furto ou roubo, fica acertado que o LOCATARIO pagar&aacute; o valor da franquia do seguro/associa&ccedil;&atilde;o do ve&iacute;culo na data do</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">ocorrido a t&iacute;tulo de participa&ccedil;&atilde;o para compor o valor do dano do ve&iacute;culo locado, independentemente de quem for a culpa.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Sendo a culpa da colis&atilde;o do terceiro, e este cobrirem integralmente o valor dos reparos, o LOCATARIO ficar&aacute; isento do pagamento do valor estabelecido a t&iacute;tulo de participa&ccedil;&atilde;o.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> Fica acordado e esclarecido entre as partes contratantes que o LOCATARIO responder&aacute; pessoalmente por danos causados a terceiros, quando o valor destes danos for superior aos cobertos pela prote&ccedil;&atilde;o mencionada no <em>caput</em>, seja por for&ccedil;a de ordem judicial ou extrajudicial.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Terceiro:</span> Responde o LOCATARIO, diretamente, pelos acidentes em que o ve&iacute;culo locado se envolver independentemente da culpa ou de quem estiver conduzindo o ve&iacute;culo, sendo no &acirc;mbito civil e criminal.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 19&ordf;. </strong>Em caso de acidente, furto, roubo ou inc&ecirc;ndio envolvendo o carro locado, deve o LOCAT&Aacute;RIO:</p>
<ul style="text-align: justify;">
<li>Comunicar imediatamente, o ocorrido &agrave; LOCADORA por meio</li>
</ul>
<p style="text-align: justify;">comprovadamente eficaz;</p>
<ul style="text-align: justify;">
<li>Providenciar, em caso de furto ou roubo do carro, no prazo m&aacute;ximo de 24 (vinte e quatro) horas a contar do evento, ou de que dele tenha conhecimento, o registro de ocorr&ecirc;ncia perante reparti&ccedil;&atilde;o policial competente, requerendo respectiva certid&atilde;o, que dever&aacute; ser entregue &agrave; LOCADORA para preval&ecirc;ncia da prote&ccedil;&atilde;o contratada;</li>
</ul>
<ul style="text-align: justify;">
<li>Requerer, em caso de acidente de tr&acirc;nsito, a realiza&ccedil;&atilde;o de per&iacute;cia &ndash; Danos ou Pericia &ndash; Crime (est&aacute; existindo vitima), ao DETRAN ou autoridade policial competente. Inexistindo condi&ccedil;&otilde;es para a realiza&ccedil;&atilde;o da per&iacute;cia, torna-se obrigat&oacute;ria a emiss&atilde;o de boletim de ocorr&ecirc;ncia;</li>
</ul>
<ul style="text-align: justify;">
<li>No caso de inexist&ecirc;ncia de autoridade policial local, o LOCATARIO ficar&aacute; obrigado a fazer o registro da ocorr&ecirc;ncia na reparti&ccedil;&atilde;o policial mais pr&oacute;xima, obtendo respectiva certid&atilde;o, para imediata entrega &agrave; LOCADORA, sob pena de perda da prote&ccedil;&atilde;o contratada.</li>
</ul>
<ul style="text-align: justify;">
<li>Anotar, sempre que existentes, nomes, dados pessoais e endere&ccedil;os completos de testemunhas presenciais de acidentes envolvendo o carro alugado.</li>
</ul>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DOS DEVERES DO LOCAT&Aacute;RIO</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 20&ordf;. </strong>S&atilde;o obriga&ccedil;&otilde;es do LOCAT&Aacute;RIO:</p>
<ul style="text-align: justify;">
<li>Pagar o aluguel e os encargos da loca&ccedil;&atilde;o, legal ou contratualmente exig&iacute;veis, no prazo estipulado sob pena de rescis&atilde;o contratual ap&oacute;s o primeiro dia de atraso;</li>
</ul>
<ul style="text-align: justify;">
<li>Responsabilizar-se pela guarda e correto uso do ve&iacute;culo enquanto durar a loca&ccedil;&atilde;o;</li>
</ul>
<ul style="text-align: justify;">
<li>Estar devidamente habilitado e autorizado, que dever&aacute; seguir expressamente as disposi&ccedil;&otilde;es do C&oacute;digo Nacional de Tr&acirc;nsito, sob pena de ter o presente contrato imediatamente rescindido, perdendo a validade a forma de prote&ccedil;&atilde;o contratada, e ainda vencendo-se antecipadamente a d&iacute;vida;</li>
</ul>
<ul style="text-align: justify;">
<li>Responsabilizar-se pelo pagamento das multas decorrentes de infra&ccedil;&atilde;o de tr&acirc;nsito no per&iacute;odo em que o ve&iacute;culo esteve sob a sua responsabilidade.</li>
</ul>
<ul style="text-align: justify;">
<li>Arcar com despesas de combust&iacute;vel, troca de l&acirc;mpadas queimadas, conserto de avarias causadas pelo mesmo em toda dimens&atilde;o do ve&iacute;culo;</li>
</ul>
<ul style="text-align: justify;">
<li>Manuten&ccedil;&atilde;o peri&oacute;dica do ve&iacute;culo locado, conforme manual de f&aacute;brica, tais como: Verificar o n&iacute;vel de &oacute;leo, n&iacute;vel de &aacute;gua dos reservat&oacute;rios, etc.;</li>
</ul>
<ul style="text-align: justify;">
<li>Usar o ve&iacute;culo como foi convencionado, de acordo com a sua natureza e com o objetivo a que se destina. Cuidar e zelar do ve&iacute;culo como se fosse sua propriedade;</li>
</ul>
<ul style="text-align: justify;">
<li>Restituir o ve&iacute;culo, no final da loca&ccedil;&atilde;o, no estado em que o recebeu, salvo as deteriora&ccedil;&otilde;es decorrentes do seu uso normal e com o tanque de combust&iacute;vel cheio, da mesma maneira que recebeu;</li>
</ul>
<ul style="text-align: justify;">
<li>Levar imediatamente ao conhecimento da LOCADORA o surgimento de qualquer dano ou ocorr&ecirc;ncia cuja repara&ccedil;&atilde;o e ou indeniza&ccedil;&atilde;o a esta enquadre;</li>
</ul>
<ul style="text-align: justify;">
<li>Reparar rapidamente os danos sob sua responsabilidade;</li>
</ul>
<ul style="text-align: justify;">
<li>N&atilde;o modificar a forma interna ou externa do ve&iacute;culo sem o consentimento pr&eacute;vio e por escrito da LOCADORA;</li>
</ul>
<ul style="text-align: justify;">
<li>Vistoriar o ve&iacute;culo no ato de sua devolu&ccedil;&atilde;o vista restar, desde j&aacute;, certo e ajustado entre as partes que o Locat&aacute;rio o entregou desocupado de qualquer pertence ou valores, renunciando expressamente a qualquer reclama&ccedil;&atilde;o a respeito</li>
</ul>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>OBRIGA&Ccedil;&Otilde;ES DO LOCADOR</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 21&ordf;. </strong>S&atilde;o obriga&ccedil;&otilde;es do LOCADOR:</p>
<ul style="text-align: justify;">
<li>Conceder ao Locat&aacute;rio a posse prec&aacute;ria do ve&iacute;culo durante o per&iacute;odo contratado, enquanto houver a adimpl&ecirc;ncia dos valores da loca&ccedil;&atilde;o ora contratada para o uso a que se destina;</li>
</ul>
<ul style="text-align: justify;">
<li>Ser integralmente respons&aacute;vel pelos problemas, defeitos e v&iacute;cios anteriores &agrave; loca&ccedil;&atilde;o;</li>
</ul>
<ul style="text-align: justify;">
<li>Arcar com pagamento das despesas com o ve&iacute;culo que locar por meio deste contrato tais como: impostos federais, estaduais e manuten&ccedil;&otilde;es preventivas;</li>
</ul>
<ul style="text-align: justify;">
<li>Efetuar a manuten&ccedil;&atilde;o corretiva e preventiva do ve&iacute;culo, cabendo a essa o rod&iacute;zio de pneus.</li>
</ul>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA RESCIS&Atilde;O</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 22&ordf;</strong>. Ap&oacute;s o prazo de 60 (sessenta) dias, as partes poder&atilde;o rescindir o contrato unilateralmente, sem apresenta&ccedil;&atilde;o de justificativa, mediante simples notifica&ccedil;&atilde;o escrita via WhatsApp ou e-mail, a ser realizada com anteced&ecirc;ncia m&iacute;nima de</p>
<p style="text-align: justify;">7 (sete) dias.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 23&ordf;</strong>. Acaso o aviso n&atilde;o seja observado, o LOCAT&Aacute;RIO dever&aacute; efetuar o pagamento do correspondente a 07 (sete) di&aacute;rias. Todavia, se o prazo de 30 (trinta) dias n&atilde;o tiver transcorrido, o LOCAT&Aacute;RIO estar&aacute; obrigado ao pagamento de multa contratual no valor correspondente a 15 (quinze) di&aacute;rias, ou o prazo remanescente da loca&ccedil;&atilde;o, se passados 15 (quinze) dias.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo &Uacute;nico:</span> Em cumprimento ao princ&iacute;pio da boa-f&eacute;, as partes se comprometem a informar uma &agrave; outra qualquer fato que possa porventura intervir na rela&ccedil;&atilde;o jur&iacute;dica formalizada atrav&eacute;s do presente contrato.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 24&ordf;</strong>. O Contrato tamb&eacute;m ser&aacute; rescindido nos casos de descumprimento, por qualquer das partes, das obriga&ccedil;&otilde;es contratuais aqui assumidas, sem preju&iacute;zo da reclama&ccedil;&atilde;o de eventuais perdas e danos.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 25&ordf;</strong>. O Contrato poder&aacute; ser rescindido em caso de suspeita de atividades il&iacute;citas ou mesmo que esteja em desacordo com as pr&aacute;ticas do LOCADOR, podendo, inclusive, ocorrer a retoma do ve&iacute;culo locado, situa&ccedil;&atilde;o que n&atilde;o caber&aacute;, ao LOCAT&Aacute;RIO, qualquer pedido por eventuais perdas e danos.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DAS PENALIDADES</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 26&ordf;. </strong>Caso ocorra uma viola&ccedil;&atilde;o, este contrato poder&aacute; ser rescindido de pleno direito pela parte prejudicada, sem a necessidade de aviso pr&eacute;vio.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Primeiro:</span> Ocorrendo uma toler&acirc;ncia de uma das partes em rela&ccedil;&atilde;o ao descumprimento das cl&aacute;usulas contidas neste instrumento n&atilde;o se configura em ren&uacute;ncia ou altera&ccedil;&atilde;o da norma infringida.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo Segundo:</span> O LOCATARIO reconhece expressamente que a LOCADORA torna-se credora de d&iacute;vida liquida certa e exig&iacute;vel dos valores devidos a t&iacute;tulo de loca&ccedil;&atilde;o e demais valores que integram o presente contrato, como, por exemplo, multas de transito, avarias na dimens&atilde;o do ve&iacute;culo, quando n&atilde;o quitados pelo LOCATARIO.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DA OBSERV&Acirc;NCIA DA PROTE&Ccedil;&Atilde;O DE DADOS</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 27&ordf;. </strong>As PARTES se obrigam a atuar em conformidade com as normas vigentes sobre a Prote&ccedil;&atilde;o de Dados e demais Leis que asseguram a prote&ccedil;&atilde;o e compartilhamento de dados, seguindo as determina&ccedil;&otilde;es impostas pelos &oacute;rg&atilde;os reguladores e fiscalizadores sobre tal, especialmente sobre a Lei Geral de Prote&ccedil;&atilde;o de Dados (LGPD), sob pena de arcar com os preju&iacute;zos que eventualmente possam causar.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="text-decoration: underline;"><strong>DISPOSI&Ccedil;&Otilde;ES GERAIS</strong></span></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 28&ordf;. </strong>Nos termos do art. 265 do C&oacute;digo Civil Brasileiro, inexistem solidariedade, seja contratual ou legal entre a Locadora e o Locat&aacute;rio, raz&atilde;o pela qual, com a loca&ccedil;&atilde;o e a efetiva retirada do ve&iacute;culo alugado, o Locat&aacute;rio assume sua posse aut&ocirc;noma para todos os fins de direito, responsabilizando-se por eventuais indeniza&ccedil;&otilde;es decorrentes do uso e circula&ccedil;&atilde;o do ve&iacute;culo, cuja responsabilidade perdurar&aacute; at&eacute; a efetiva devolu&ccedil;&atilde;o do ve&iacute;culo alugado.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 29&ordf;. </strong>Concorda o LOCAT&Aacute;RIO que a Locadora promova, pelos meios processuais de que venha a dispor. O seu chamamento aos feitos judiciais promovidos por terceiros decorrentes de eventos com o ve&iacute;culo alugado, cabendo-lhe assumir o p&oacute;lo passivo nas demandas, inclusive quanto aos valores que excedam as coberturas previstas para assun&ccedil;&atilde;o de responsabilidades financeiras e/ou para assegurar os direitos regressivos da Locadora.</p>
<p style="text-align: justify;"><span style="text-decoration: underline;">Par&aacute;grafo &Uacute;nico:</span> O Locat&aacute;rio ser&aacute; respons&aacute;vel pelo pagamento de lucros cessantes que terceiros possam pleitear judicialmente em raz&atilde;o de sua conduta il&iacute;cita;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 30&ordf;. </strong>O Locat&aacute;rio deve abster-se, terminantemente, de conduzir/utilizar o ve&iacute;culo alugado sob efeito de &aacute;lcool, narc&oacute;ticos, entorpecentes ou medicamentos que possam afetar a capacidade de condu&ccedil;&atilde;o do ve&iacute;culo, sob pena de rescis&atilde;o imediata do contrato.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 31&ordf;. </strong>&Eacute; de responsabilidade exclusiva do Locat&aacute;rio o transporte de quaisquer passageiros que vier a transportar, bem como a utiliza&ccedil;&atilde;o dos equipamentos de seguran&ccedil;a pertinentes a cada faixa et&aacute;ria.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 32&ordf;. </strong>O presente contrato obriga o Locat&aacute;rio e seus herdeiros e sucessores ao integral cumprimento.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 33&ordf;. </strong>A Locadora n&atilde;o se responsabiliza por valores e objetos deixados no ve&iacute;culo alugado e nas suas depend&ecirc;ncias. Da mesma forma, a Locadora tamb&eacute;m n&atilde;o se responsabiliza pelos acess&oacute;rios e equipamentos que tenham sido instalados no ve&iacute;culo locado sem a sua pr&eacute;via autoriza&ccedil;&atilde;o expressa e por escrito, os quais passam a incorporar o ve&iacute;culo e n&atilde;o ser&atilde;o pass&iacute;veis de reembolso e indeniza&ccedil;&atilde;o.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 34&ordf;. </strong>Todos os valores, despesas e encargos da loca&ccedil;&atilde;o constituem d&iacute;vidas l&iacute;quidas e certas para pagamento &agrave; vista, pass&iacute;veis de cobran&ccedil;a judicial.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 35&ordf;. </strong>Eventuais toler&acirc;ncias da Locadora para com o Locat&aacute;rio no cumprimento das obriga&ccedil;&otilde;es ajustadas neste Contrato constituem mera liberalidade, n&atilde;o configurando em hip&oacute;tese alguma qualquer nova&ccedil;&atilde;o, permanecendo &iacute;ntegras as cl&aacute;usulas e condi&ccedil;&otilde;es aqui contratadas.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>DO FORO</strong></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA 36&ordf;. </strong>Fica desde j&aacute; eleito o foro da comarca de Florian&oacute;polis/SC, para serem resolvidas quaisquer pend&ecirc;ncias decorrentes deste contrato, com a ren&uacute;ncia expressa de qualquer outro foro por mais privilegiado que seja. E, por estarem assim certos e ajustados, firmam os signat&aacute;rios este instrumento em 02 (duas) vias de igual teor e forma, e para &uacute;nico fim de Direito.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>


</div>

        <div style="text-align: center; font-size: 12"> Florianópolis, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br>


            <div style="margin-bottom: -50px"><img style="width: 20rem; height: 10rem;" src="{{ asset('img/assinatura.png') }}" alt="Logo"></div>
            ___________________________________________________________<br>
            LOCADOR: JPS VEÍCULOS LTDA.



        </div>











</body>
</html>

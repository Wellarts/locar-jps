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

<table class="tabelas" width="100%" >
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
<table class="tabelas">
    <tr>
        <td>
            <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
        </td>
        <td>
            <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
        </td>
        <td>
            <b class="tx">Chassi:</b> {{$locacao->Veiculo->chassi}}
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
<table class="tabelas">
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
        <td colspan="2">
            <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
        </td>
        <td colspan="2">
            <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
        </td>
        <td colspan="2">
            <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
        </td>
    </tr>
</p>
</table>

<table class="tabelas">
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
            <td><p style="margin: 10%">São José / SC,

                {{ $dataAtual->formatLocalized('%d de %B de %Y') }}
            </p></td>
        </tr>
        <tr>
            <td>
                <tr>
                    <td>_________________________________________<br>
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
        font-size: 11;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
      <td><img src="{{ asset('img/logo.png') }}" alt="Logo"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <p class="parag">
        <b>LOCADOR(A): JPS VEÍCULOS LTDA</b>, empresa de direito privado inscrita no CNPJ sob Nº 43.354.322/0001-41, com sede em Rua Benjamin Gerlach, 584 – Fazenda Santo Antônio – São José/SC.<br><br>
        <b>LOCATÁRIO(A): {{$locacao->Cliente->nome}}</b> ,inscrita no CPF {{$cpfCnpj}}, portador do RG {{$locacao->Cliente->rg}} -  {{$locacao->Cliente->exp_rg}}, CNH {{$locacao->Cliente->cnh}}   residente e domiciliado {{$locacao->Cliente->endereco}} - {{$locacao->Cliente->cidade->nome}} - {{$locacao->Cliente->estado->uf}}.<br><br>


        As partes acima identificadas têm ente si, justo e acertado o presente Contrato de Locação de Veículo por Prazo Determinado, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.<br><br>

        <b>DO OBJETO DO CONTRATO</b><br>
        <b>CLÁUSULA 1ª</b>. O presente contrato tem como OBJETO a locação do veículo: <b>{{$locacao->Veiculo->modelo}} - {{$locacao->Veiculo->modelo}}</b> cor <b>{{$locacao->Veiculo->cor}}</b>, combustível álcool/gasolina\gás natural com placas <b>{{$locacao->Veiculo->placa}}.</b><br>
        <u>Parágrafo Primeiro:</u> O veículo, como dito, é de propriedade ou sob administração do LOCADOR e entregue com todos os equipamentos exigidos pelo Código de Trânsito Brasileiro e em perfeitas condições de uso e segurança, conforme checklist anexo, devidamente assinado pelo LOCATÁRIO.<br>

        <u>Parágrafo Segundo:</u> No veículo objeto do presente contrato haverá publicidade da empresa locadora.<br>
        <u>Parágrafo terceiro:</u> É de obrigatoriedade do locatário sempre manter o nível do combustível com pelo menos ¼ do tanque, principalmente em veículos a gás, pois caso venha queimar a bomba do combustível o prejuízo será por parte do LOCATÁRIO.<br><br>

        <b>DO VALOR DO ALUGUEL</b><br>
        <b>CLÁUSULA 2ª</b>. Pela presente locação, obriga o LOCATÁRIO a pagar o valor semanal descrito na observações da ficha de locação anexa a este contrato, sendo o primeiro pagamento no ato da assinatura do presente termo, e os demais com frequência de 07 dias em cada pagamento até o termino do contrato.<br>
       <u>Parágrafo Primeiro:</u> O LOCATÁRIO deverá efetuar o pagamento do valor acordado mediante dinheiro (espécie), PIX (TELEFONE): 48 98832-8626 ou depósito bancário na Conta Corrente n. 31294092-0, agência n. 0001, Banco 336 C6 BANK, de titularidade de JPS Veículos, inscrito no CNPJ nº 43.354.322/0001-41, comprometendo-se o Locatário a encaminhar o respectivo comprovante de depósito por WhatsApp número 21 98788-6892<br>
       <u>Parágrafo Segundo:</u> O LOCATÁRIO poderá utilizar o veículo até 8.000km (oito mil quilômetros) por mês, o que ultrapassar condicionará o LOCATÁRIO ao pagamento de R$ 0,35 (trinta e cinco centavos) a cada KM ultrapassado, devendo ser pago a cada 1.000km (hum mil quilômetros) rodados.<br>
       <u>Parágrafo Terceiro:</u> Em caso de inadimplemento, será aplicada multa de 10% (dez por cento), bem como incidirão juros de mora de 1% (um por cento) ao mês sob o valor devido e correção monetária, e ensejará a sua cobrança através de advogado. Ficam desde já, fixados os honorários advocatícios em 10% (dez por cento), se amigável a cobrança, e de 20% (vinte por cento), se judicial.<br>
       <u>Parágrafo Quarto:</u> O valor do aluguel firmado neste contrato será reajustado a cada 12 (doze) meses, tendo como base o índice IGP-M. E, em caso de falta desse índice, o reajuste se dará com base na média da variação dos índices inflacionários do ano corrente ao da execução da locação, ou ainda, caso ocorra alterações que justifiquem o aumento do valor do aluguel.
       <u>Parágrafo Quinto:</u> Em caso de inadimplemento, incidirão juros de mora de 1% (um por cento) ao mês sob o valor devido e correção monetária, e ensejará a sua cobrança através de advogado. Ficam desde já, fixados os honorários advocatícios em 10% (dez por cento), se amigável a cobrança, e de 20% (vinte por cento), se judicial.<br>
       <u>Parágrafo Sexto:</u> O LOCATÁRIO não vindo a efetuar o pagamento do aluguel, a partir do primeiro dia de atraso, fica sujeito a ter a posse do veículo configurada como apropriação indébita, concedendo a LOCADORA à retomada da posse do veículo imediatamente e a rescisão do presente contrato sem a necessidade de aviso prévio incidindo em desfavor do LOCATARIO todas as multas e penalidades legais, conferindo também ao locador a possibilidade da ação de todas as medidas judiciais cabíveis no intuito de reaver o veículo e cobrar os valores em abertos e eventuais ressarcimentos decorrentes de mau uso ou depreciação do veículo.<br>
       <u> Parágrafo Sétimo:</u> O veículo objeto deste contrato, possui rastreador com possibilidade de bloqueio para locomoção, podendo o LOCADOR, face o descumprimento do pagamento ou de qualquer cláusula deste contrato utilizar o bloqueador do veículo impedindo em que, caso não seja possível a retirada do veículo pelo LOCADOR.<br>
       <u> Parágrafo Oitavo:</u> Será de responsabilidade do LOCATÁRIO todas as despesas referentes à utilização do veículo, desde que não seja causado por imprudência do LOCATÁRIO direta e indiretamente, exemplo: batidas, amassados superficiais, super aquecimento por falta de atenção, pneus rasgados, etc.<br><br>

        <b>DA GARANTIA</b><br>
        <b>CLÁUSULA 3ª</b>. O LOCATÁRIO concorda desde já em pagar, a título de fiança no caso de sinistro ou danos, a sinal caução no valor de R$ 1000,00 (hum mil reais). sendo pago por toda semana R$50,00 (cinquenta reais) até completar os R$ 1.000,00 (hum mil reais).<br>

        <u>Parágrafo Primeiro:</u> A caução será devolvida caso entregue na retirada do veículo ao final do período 30 dias após termino da locação ao LOCATÁRIO, salvo, em casos de danos identificados na vistoria ou multa por quebra de contrato, bem como a título de compensação de aluguéis.<br>
        <u>Parágrafo Segundo:</u> Em caso de não pagamento das obrigações, nos termos definidos neste instrumento, poderá o LOCADOR realizar a execução do referido título de crédito, utilizando-se dos meios judiciais e extrajudiciais.<br><br>

        <b>DA 	LIMPEZA, 	CONSERVAÇÃO, 	MANUTENÇÃO 	E 	BENFEITORIAS NECESSÁRIAS</b><br><br>

        <b>CLÁUSULA 4ª</b>. O veículo será entregue ao LOCATÁRIO limpo e deverá ser devolvido ao LOCADOR nas mesmas condições em que foi retirado.<br>
        <b>CLÁUSULA 5ª.</b> Sobre o LOCATÁRIO recai a responsabilidade por zelar pela conservação, limpeza do bem, segurança, efetuando as manutenções necessárias para sua conservação, sendo que os gastos e pagamentos decorrentes da mesma, correrão por conta do LOCADOR.<br>
        CLÁUSULA 6ª. O LOCATÁRIO declara receber o bem em perfeito estado de conservação e perfeito funcionamento, devendo observar o que consta no termo de vistoria, devidamente assinado pelo LOCATÁRIO.<br>
        <u>Parágrafo Primeiro:</u> Caso o veículo seja devolvido sujo, seja interna ou externamente, será cobrada uma taxa de lavagem simples, especial ou higienização, dependendo do estado do veículo na devolução da retirada do LOCADOR.<br>
        <u>Parágrafo Segundo:</u> Caso haja a necessidade de lavagem especial, será cobrada, além da taxa de lavagem, o valor mínimo de 1 (uma) diária de locação, ou quantas diárias forem necessárias até a disponibilização do veículo para locação, limitado a 5 (cinco) diárias do veículo com base na tarifa vigente.<br><br>
        <b>PRAZO DO ALUGUEL</b><br>
        <b>CLÁUSULA 7ª</b>. O prazo de locação do referido veículo é de 60 (sessenta) dias, prorrogando-se automaticamente a partir do termo, se não houver manifestação em contrário.<br>
        <u>Parágrafo Único:</u> Se após o fim da locação, caso a LOCADORA não queira prorrogar a locação, e o referido veículo não for devolvido, será cobrado o valor do aluguel proporcional aos dias de atraso, acumulado de multa diária de R$ 150,00 (cento e cinquenta reais).<br><br>
        <b>DA UTILIZAÇÃO</b><br>
        <br>CLÁUSULA 8ª</p>. O veículo deverá ser utilizado pelo LOCATÁRIO exclusivamente da seguinte maneira: exclusivamente para transporte por aplicativo UBER, 99 e POP, EXCETO “BLABLACAR”.<br>
        <u>Parágrafo Primeiro:</u> Qualquer modificação no veículo só poderá ser feita com a autorização expressa da LOCADORA.<br>
        <u>Parágrafo Segundo:</u> O locatário deverá obedecer a distância máxima permitida do Município do presente contrato em um raio de 200 km, devendo o locatário solicitar autorização expressa da locadora para deslocar-se a distância superior àquela pré-determinada, sob pena de rescisão contratual.
        DA VEDAÇÃO À SUBLOCAÇÃO E EMPRÉSTIMO DO VEÍCULO
        CLÁUSULA 9ª. Será permitido o uso do veículo objeto do presente contrato, apenas pelo LOCATÁRIO, sendo vedada, no todo ou em parte, a sublocação, transferência, empréstimo, comodato ou cessão da locação, seja a qualquer título, sem expressa anuência da LOCADORA, sob pena de imediata rescisão.
        DAS MULTAS E INFRAÇÕES DE TRÂNSITO
        CLÁUSULA 10ª. O LOCATÁRIO se obriga a pagar todas as multas e penalidades
        decorrentes de infrações às leis e regulamentos de trânsito, que serão de sua inteira e exclusiva responsabilidade, durante o período em que estiver de posse do veículo.
        Parágrafo Primeiro: O LOCATÁRIO declara-se ciente e concorda que se ocorrer qualquer multa ou infração de trânsito no período em que o veículo estiver alugado, seu nome poderá ser indicado pela LOCADORA junto ao Órgão de Trânsito atuante, na qualidade de condutor do veículo.
        Parágrafo Segundo: O LOCATÁRIO deverá entregar à LOCADORA, cópia da
        notificação/autuação de trânsito, caso seja autuado por autoridade policial ou de trânsito, antes do vencimento do prazo para recurso.
        CLÁUSULA 11ª. Caso as multas sejam pagas pela LOCADORA, deverão ser
        reembolsadas, devidamente corrigidas, mediante a apresentação dos comprovantes, sem renunciando o LOCATÁRIO seu direito a recursos.
        CLÁUSULA 12ª. Multas lançadas ou comunicadas após o termino do presente contrato relativas ao período da locação deverão ser pagas pelo LOCATÁRIO, salvo se tais multas forem imputáveis à LOCADORA, por irregularidade na documentação do veículo.
        Parágrafo Primeiro: Em razão das multas porventura aplicadas pelos agentes e/ou policiais de trânsito em todo o território nacional ou internacional, durante o período em que estiver de posse do veículo locado, a pontuação na Carteira de habitação e outras penalidades previstas na Lei n. 9.503/97 e regulamentos, são de responsabilidade única e exclusiva do LOCATARIO, obrigando-se este a transferir tais pontos de imediato. Parágrafo Segundo: Em caso de apreensão do veículo, serão cobradas do LOCATÁRIO todas as despesas de serviço dos profissionais envolvidos para liberação do veículo alugado, assim como todas as taxas cobradas pelos órgãos competentes, e também quantas diárias forem necessárias até a disponibilização do veículo para locação.
        Parágrafo Terceiro: Cabe ao LOCATÁRIO, no ato da assinatura do presente contrato, assinar também TERMO DE RESPONSABILIDADE, o qual consiste no instrumento apto a eximir a LOCADORA de quaisquer multas, acidentes ou ocorrências ocasionadas com o veículo objeto do presente ajuste, bem como se comprometendo a receber as pontuações correspondentes em sua CNH (Carteira Nacional de Habilitação).
        DA MANUTENÇÃO
        CLÁUSULA 13ª. Correrão por conta da LOCADORA às despesas de manutenção preventiva e corretiva, excetuando-se combustível, consertos de acessórios e pneumáticos, vidros, lavagens, lubrificação e despesas decorrentes de colisão e/ou as ocasionadas por mau uso ou utilização inadequada do VEÍCULO.
        Parágrafo Primeiro: Se durante o período da manutenção, a LOCADORA não dispuser do bem ou outro de categoria igual ou similar, concederá desconto na locação, proporcionalmente ao tempo da manutenção.
        Parágrafo Segundo: A manutenção e troca das peças decorrentes do mau uso do veículo, assim entendido como a sua utilização em desacordo com as instruções de uso, serão de responsabilidade do LOCATÁRIO.
        Parágrafo Terceiro: Se durante o período de locação o veículo apresentar defeito cujo conserto demore tempo superior a 3 (três) dias, o LOCATÁRIO poderá optar pela rescisão do contrato ou aguardar pelo prazo estipulado para a correção do defeito.
        Parágrafo Quarto: O LOCATÁRIO deverá realizar a troca do óleo e filtros, devendo ser realizada a cada 9.000km (nove mil quilômetros), caso não seja feito a manutenção dentro do Km estipulado, será cobrado multa diária de R$ 50,00 (cinquenta reais).
        AVARIAS E INDENIZAÇÕES
        CLÁUSULA 14ª. Caso sejam constatadas avarias no veículo locado, no ato da sua devolução, serão cobrados do Locatário os valores das respectivas avarias.
        Parágrafo Único: Caso o Locatário cause danos a terceiros, deverá ressarcir a integralmente ao LOCADOR ou ao terceiro de fora direta mediante comprovantes.
        CLÁUSULA 15ª. Serão cobradas em caso de perda, roubo ou furto, as despesas para a reposição das chaves e/ou documentos do veículo locado.
        CLÁUSULA 16ª. O LOCATÁRIO deverá ressarcir as despesas com veículo apreendido, suportadas pelo LOCADOR caso o veículo locado seja apreendido em pátios e depósitos de órgãos de trânsito, incluindo diárias e taxas dos referidos locais, assim como serviços profissionais de advogados e/ou despachantes para liberação do veículo, cópias autenticadas e reconhecimento de firmas, nos casos em que der causa o Locatário.
        CLÁUSULA 17ª. Deverá o LOCATÁRIO indenizar a título de lucros cessantes, quando a LOCADORA deixar de auferir com o veículo locado, em razão de conduta do LOCATÁRIO, inclusive furto, roubo, acidente, calculado à base do preço da diária contratada. Tais valores serão cobrados caso não tenha sido contratada a respectiva proteção ou em casos em que houver a perda desta proteção.
        DA UTILIZAÇÃO DO SEGURO
        CLÁUSULA 18ª. Em caso de sinistro/colisão, furto ou roubo, fica acertado que o LOCATARIO pagará o valor da franquia do seguro/associação do veículo na data do ocorrido a título de participação para compor o valor do dano do veículo locado, independentemente de quem for a culpa.
        Parágrafo Primeiro: Sendo a culpa da colisão do terceiro, e este cobrirem integralmente o valor dos reparos, o LOCATARIO ficará isento do pagamento do valor estabelecido a título de participação.
        Parágrafo Segundo: Fica acordado e esclarecido entre as partes contratantes que o LOCATARIO responderá pessoalmente por danos causados a terceiros, quando o valor destes danos for superior aos cobertos pela proteção mencionada no caput, seja por força de ordem judicial ou extrajudicial.
        Parágrafo Terceiro: Responde o LOCATARIO, diretamente, pelos acidentes em que o veículo locado se envolver independentemente da culpa ou de quem estiver conduzindo o veículo, sendo no âmbito civil e criminal.
        CLÁUSULA 19ª. Em caso de acidente, furto, roubo ou incêndio envolvendo o carro locado, deve o LOCATÁRIO:
        •	Comunicar 	imediatamente, 	o 	ocorrido 	à 	LOCADORA 	por 	meio
        comprovadamente eficaz;
        •	Providenciar, em caso de furto ou roubo do carro, no prazo máximo de 24 (vinte e quatro) horas a contar do evento, ou de que dele tenha conhecimento, o registro de ocorrência perante repartição policial competente, requerendo respectiva certidão, que deverá ser entregue à LOCADORA para prevalência da proteção contratada;
        •	Requerer, em caso de acidente de trânsito, a realização de perícia – Danos ou
        Pericia – Crime (está existindo vitima), ao DETRAN ou autoridade policial competente. Inexistindo condições para a realização da perícia, torna-se obrigatória a emissão de boletim de ocorrência;
        •	No caso de inexistência de autoridade policial local, o LOCATARIO ficará obrigado a fazer o registro da ocorrência na repartição policial mais próxima, obtendo respectiva certidão, para imediata entrega à LOCADORA, sob pena de perda da proteção contratada.
        •	Anotar, sempre que existentes, nomes, dados pessoais e endereços completos de
        testemunhas presenciais de acidentes envolvendo o carro alugado.
        DOS DEVERES DO LOCATÁRIO
        CLÁUSULA 20ª.  São obrigações do LOCATÁRIO:
        •	Pagar o aluguel e os encargos da locação, legal ou contratualmente exigíveis, no prazo estipulado sob pena de rescisão contratual após o primeiro dia de
        atraso;
        •	Responsabilizar-se pela guarda e correto uso do veículo enquanto durar a locação;
        •	Estar devidamente habilitado e autorizado, que deverá seguir expressamente as disposições do Código Nacional de Trânsito, sob pena de ter o presente contrato imediatamente rescindido, perdendo a validade a forma de proteção contratada, e ainda vencendo-se antecipadamente a dívida;
        •	Responsabilizar-se pelo pagamento das multas decorrentes de infração de trânsito no período em que o veículo esteve sob a sua responsabilidade.
        •	Arcar com despesas de combustível, troca do óleo do motor, conserto de avarias causadas pelo mesmo em toda dimensão do veículo;
        •	Manutenção periódica do veículo locado, conforme manual de fábrica, tais como: Verificar o nível de óleo, nível de água dos reservatórios, etc.;
        •	Usar o veículo como foi convencionado, de acordo com a sua natureza e com o objetivo a que se destina. Cuidar e zelar do veículo como se fosse sua
        propriedade;
        •	Restituir o veículo, no final da locação, no estado em que o recebeu, salvo as deteriorações decorrentes do seu uso normal e com o tanque de combustível cheio, da mesma maneira que recebeu;
        •	Levar imediatamente ao conhecimento da LOCADORA o surgimento de qualquer dano ou ocorrência cuja reparação e ou indenização a esta enquadre;
        •	Reparar rapidamente os danos sob sua responsabilidade;
        •	Não modificar a forma interna ou externa do veículo sem o consentimento prévio e por escrito da LOCADORA;
        •	Vistoriar o veículo no ato de sua devolução vista restar, desde já, certo e ajustado entre as partes que o Locatário o entregou desocupado de qualquer pertence ou valores, renunciando expressamente a qualquer reclamação a
        respeito
        OBRIGAÇÕES DO LOCADOR
        CLÁUSULA 21ª.  São obrigações do LOCADOR:
        •	Conceder ao Locatário a posse precária do veículo durante o período contratado, enquanto houver a adimplência dos valores da locação ora contratada para o uso a que se destina;
        •	Ser integralmente responsável pelos problemas, defeitos e vícios anteriores à locação;
        •	Arcar com pagamento das despesas com o veículo que locar por meio deste contrato tais como: impostos federais, estaduais e manutenções preventivas;
        •	Efetuar a manutenção corretiva e preventiva do veículo, cabendo a essa o rodízio de pneus.
        DA RESCISÃO
        CLÁUSULA 22ª. Após o prazo de 60 (sessenta) dias, as partes poderão rescindir o contrato unilateralmente, sem apresentação de justificativa, mediante simples notificação escrita via WhatsApp ou e-mail, a ser realizada com antecedência mínima de
        7 (sete) dias.
        CLÁUSULA 23ª. Acaso o aviso não seja observado, o LOCATÁRIO deverá efetuar o pagamento do correspondente a 07 (sete) diárias. Todavia, se o prazo de 30 (trinta) dias não tiver transcorrido, o LOCATÁRIO estará obrigado ao pagamento de multa
        contratual no valor correspondente a 15 (quinze) diárias, ou o prazo remanescente da locação, se passados 15 (quinze) dias.
        Parágrafo Único: Em cumprimento ao princípio da boa-fé, as partes se comprometem a informar uma à outra qualquer fato que possa porventura intervir na relação jurídica formalizada através do presente contrato.
        CLÁUSULA 24ª. O Contrato também será rescindido nos casos de descumprimento, por qualquer das partes, das obrigações contratuais aqui assumidas, sem prejuízo da reclamação de eventuais perdas e danos.
        CLÁUSULA 25ª. O Contrato poderá ser rescindido em caso de suspeita de atividades ilícitas ou mesmo que esteja em desacordo com as práticas do LOCADOR, podendo, inclusive, ocorrer a retoma do veículo locado, situação que não caberá, ao LOCATÁRIO, qualquer pedido por eventuais perdas e danos.
        DAS PENALIDADES
        CLÁUSULA 26ª. Caso ocorra uma violação, este contrato poderá ser rescindido de pleno direito pela parte prejudicada, sem a necessidade de aviso prévio.
        Parágrafo Primeiro: Ocorrendo uma tolerância de uma das partes em relação ao descumprimento das cláusulas contidas neste instrumento não se configura em renúncia ou alteração da norma infringida.
        Parágrafo Segundo: O LOCATARIO reconhece expressamente que a LOCADORA torna-se credora de dívida liquida certa e exigível dos valores devidos a título de locação e demais valores que integram o presente contrato, como, por exemplo, multas de transito, avarias na dimensão do veículo, quando não quitados pelo LOCATARIO.
        DA OBSERVÂNCIA DA PROTEÇÃO DE DADOS
        CLÁUSULA 27ª. As PARTES se obrigam a atuar em conformidade com as normas vigentes sobre a Proteção de Dados e demais Leis que asseguram a proteção e compartilhamento de dados, seguindo as determinações impostas pelos órgãos
        reguladores e fiscalizadores sobre tal, especialmente sobre a Lei Geral de Proteção de Dados (LGPD), sob pena de arcar com os prejuízos que eventualmente possam causar.
        DISPOSIÇÕES GERAIS
        CLÁUSULA 28ª. Nos termos do art. 265 do Código Civil Brasileiro, inexistem
        solidariedade, seja contratual ou legal entre a Locadora e o Locatário, razão pela qual, com a locação e a efetiva retirada do veículo alugado, o Locatário assume sua posse autônoma para todos os fins de direito, responsabilizando-se por eventuais indenizações decorrentes do uso e circulação do veículo, cuja responsabilidade perdurará até a efetiva devolução do veículo alugado.
        CLÁUSULA 29ª. Concorda o LOCATÁRIO que a Locadora promova, pelos meios processuais de que venha a dispor. O seu chamamento aos feitos judiciais promovidos por terceiros decorrentes de eventos com o veículo alugado, cabendo-lhe assumir o pólo passivo nas demandas, inclusive quanto aos valores que excedam as coberturas previstas para assunção de responsabilidades financeiras e/ou para assegurar os direitos regressivos da Locadora.
        Parágrafo Único: O Locatário será responsável pelo pagamento de lucros cessantes que terceiros possam pleitear judicialmente em razão de sua conduta ilícita;
        CLÁUSULA 30ª. O Locatário deve abster-se, terminantemente, de conduzir/utilizar o veículo alugado sob efeito de álcool, narcóticos, entorpecentes ou medicamentos que possam afetar a capacidade de condução do veículo, sob pena de rescisão imediata do contrato.
        CLÁUSULA 31ª. É de responsabilidade exclusiva do Locatário o transporte de quaisquer passageiros que vier a transportar, bem como a utilização dos equipamentos de segurança pertinentes a cada faixa etária.
        CLÁUSULA 32ª. O presente contrato obriga o Locatário e seus herdeiros e sucessores ao integral cumprimento.
        CLÁUSULA 33ª. A Locadora não se responsabiliza por valores e objetos deixados no veículo alugado e nas suas dependências. Da mesma forma, a Locadora também não se responsabiliza pelos acessórios e equipamentos que tenham sido instalados no veículo locado sem a sua prévia autorização expressa e por escrito, os quais passam a incorporar o veículo e não serão passíveis de reembolso e indenização.
        CLÁUSULA 34ª. Todos os valores, despesas e encargos da locação constituem dívidas líquidas e certas para pagamento à vista, passíveis de cobrança judicial.
        CLÁUSULA 35ª. Eventuais tolerâncias da Locadora para com o Locatário no cumprimento das obrigações ajustadas neste Contrato constituem mera liberalidade, não configurando em hipótese alguma qualquer novação, permanecendo íntegras as cláusulas e condições aqui contratadas.
        DO FORO
        CLÁUSULA 36ª. Fica desde já eleito o foro da comarca de Florianópolis/SC, para serem resolvidas quaisquer pendências decorrentes deste contrato, com a renúncia expressa de qualquer outro foro por mais privilegiado que seja. E, por estarem assim certos e ajustados, firmam os signatários este instrumento em 02 (duas) vias de igual teor e forma, e para único fim de Direito.




</p>
</div><br><br>

        <div style="text-align: center; font-size: 12">Rio de Janeiro, {{ $dataAtual->formatLocalized('%d de %B de %Y') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br><br><br>

            ___________________________________________________________<br>
            LOCADOR: MOTOMASTER CAMPO GRANDE LTDA.



        </div>











</body>
</html>

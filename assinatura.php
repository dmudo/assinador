<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
  <title>Assinatura de E-mail Tropicalpneus</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="#">
  <link href="assinatura.min.css" rel="stylesheet" type='text/css'> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
</head>
<body>

<h2>GERADOR DE ASSINATURA DE E-MAIL</h2>
<h2>TROPICAL PNEUS</h2>
<p>Manual para configurar a assinatura no seu email, <a href="pdf/tutorial.pdf" target="_blank">clique aqui.</a> </p>

<div id="container" style="width:60%;">                                   
<div id="left" style="float:left; width:37%;">


<?php
$nome = isset( $_POST['nome'])? $_POST['nome']: "Seu Nome...";
$celular = isset( $_POST['celular'])? $_POST['celular']:"(00)0000-0000";
$departamento0 = isset( $_POST['departamento0'])? $_POST['departamento0']:"";
$departamento = isset( $_POST['departamento'])? $_POST['departamento']:"";
$departamento1 = isset( $_POST['departamento1'])? $_POST['departamento1']:"";
$departamento2 = isset( $_POST['departamento2'])? $_POST['departamento2']:"";
$departamento3 = isset( $_POST['departamento3'])? $_POST['departamento3']:"";
$departamento4 = isset( $_POST['departamento4'])? $_POST['departamento4']:"";
$departamento5 = isset( $_POST['departamento5'])? $_POST['departamento5']:"";
$departamento6 = isset( $_POST['departamento5'])? $_POST['departamento6']:"";
$departamento7 = isset( $_POST['departamento5'])? $_POST['departamento7']:"";
$departamento8 = isset( $_POST['departamento8'])? $_POST['departamento8']:"";
?>


<form action="assinaturapost.php" method="post" id="assineForm">

<label for="nome"><h3>Nome completo:<h3></label>
<input name="nome" type="text" value="<?php echo $nome ?>" size="30" maxlength="30">

<label for="celular">Celular Corporativo:</label>
<input name="celular" type="text" value="<?php echo $celular ?>" size="18" maxlength="13" />

  <script type="text/javascript">
    var inputs = $("form#assineForm input, form#assineForm textarea");
    var validateInputs = function validateInputs(inputs) {
    var validForm = true;
    inputs.each(function(index) {
    var input = $(this);
    if (!input.val() || (input.type === "radio" && !input.is(':checked'))) {
      $("#submit").attr("disabled", "disabled");
      validForm = false;
        }
          });
              return validForm;
                  }
    inputs.change(function() {
        if (validateInputs(inputs)) {
            $("#submit").removeAttr("disabled");
                  }
                  });
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
      $('#fixolojas').hide();
      $('#totaltel').change(function() {
      if ($('#totaltel').val() == 'fixolojas*') {
      $('#fixolojas').show();
      } else {
      $('#fixolojas').hide();
          }
      });
      });
    
  </script>

<label for="telefone">Telefones:</label>
<select id="totaltel" name="totaltel">
      <option style="display:none">
      <option value="fixolojas*">Fixo Lojas*</option>
</select>

<div id="fixolojas">
  <label for="Fixoslojas">Região:</label>
    <select id="departamento0" name="departamento0">
          <option style="display:none">
          <option value="(62)3243-5000">Goias</option>
          <option value="(65) 3319-6000">Mato Grosso</option>
    </select>   
</div>
       
    <script type="text/javascript">
      $(document).ready(function() {
      $('#Analista').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Analistas*') {
      $('#Analista').show();
      } else {
      $('#Analista').hide();
          }
      });
      });
    </script>
    
    <script type="text/javascript">
      $(document).ready(function() {
      $('#Assistente').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Assistente*') {
      $('#Assistente').show();
      } else {
      $('#Assistente').hide();
          }
      });
      });
    </script>  

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Auxiliar').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Auxiliar*') {
      $('#Auxiliar').show();
      } else {
      $('#Auxiliar').hide();
          }
      });
      });
    </script>  

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Gerente').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Gerente*') {
      $('#Gerente').show();
      } else {
      $('#Gerente').hide();
          }
      });
      });
    </script> 

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Tecnico').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Tecnico*') {
      $('#Tecnico').show();
      } else {
      $('#Tecnico').hide();
          }
      });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Supervisor').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Supervisor*') {
      $('#Supervisor').show();
      } else {
      $('#Supervisor').hide();
          }
      });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Vendas').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Vendas*') {
      $('#Vendas').show();
      } else {
      $('#Vendas').hide();
          }
      });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Estoquista').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Estoquista*') {
      $('#Estoquista').show();
      } else {
      $('#Estoquista').hide();
          }
      });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
      $('#Diretor').hide();
      $('#totaldep').change(function() {
      if ($('#totaldep').val() == 'Diretor*') {
      $('#Diretor').show();
      } else {
      $('#Diretor').hide();
          }
      });
      });
    </script>

<label for="Hierarquia">Hierarquia:</label>
<select id="totaldep" name="totaldep">
      <option style="display:none">
      <option value="Analistas*">Analistas</option>
      <option value="Assistente*">Assistente</option>
      <option value="Auxiliar*">Auxiliar</option>
      <option value="Diretor*">Diretor</option>
      <option value="Estoquista*">Estoquista</option>
      <option value="Supervisor*">Supervisor</option>
      <option value="Tecnico*">Técnico</option>
      <option value="Vendas*">Vendas</option>
      <option value="Gerente*">Gerente</option>
</select>

<div id="Analista">
  <label for="Cargo">Cargo:</label>
    <select id="departamento" name="departamento">
          <option style="display:none">
          <option value="Analista Administrativo">Analista Administrativo</option>
          <option value="Analista Cobrança">Analista Cobrança</option>
          <option value="Analista Comercial">Analista Comercial</option>
          <option value="Analista Contabil">Analista Contabil</option>
          <option value="Analista Controladoria">Analista Controladoria</option>
          <option value="Analista Credito/Cobrança">Analista Credito/Cobrança</option>A
          <option value="Analista de Auditoria">Analista de Auditoria</option>
          <option value="Analista de Compras">Analista de Compras</option>
          <option value="Analista de Consultoria">Analista de Consultoria</option>
          <option value="Analista de Convênio">Analista de Convênio</option>
          <option value="Analista de Crédito">Analista de Crédito</option>
          <option value="Analista de Custo">Analista de Custo</option>
          <option value="Analista de D.P Senior">Analista de D.P Senior</option>
          <option value="Analista de D.P">Analista de D.P</option>
          <option value="Analista de Faturamento">Analista de Faturamento</option>
          <option value="Analista de Marketing">Analista de Marketing</option>
          <option value="Analista de Pneus">Analista de Pneus</option>
          <option value="Analista de Processos">Analista de Processos</option>
          <option value="Analista de RH">Analista de RH</option>
          <option value="Analista de Sistemas">Analista de Sistemas</option>
          <option value="Analista de T.I">Analista de T.I</option>
          <option value="Analista de Transporte">Analista de Transporte</option>
          <option value="Analista Ecommerce">Analista Ecommerce</option>
          <option value="Analista Escrita Fiscal">Analista Escrita Fiscal</option>
          <option value="Analista Financeiro">Analista Financeiro</option>
      </select>
</div>

<div id="Assistente">
  <label for="Cargo">Cargo:</label>
      <select id="departamento1" name="departamento1" >
          <option style="display:none">
          <option value="Assistente Compras">Assistente Compras</option>
          <option value="Assistente Crédito">Assistente Crédito</option>
          <option value="Assistente Escrita Fiscal">Assistente Escrita Fiscal</option>
          <option value="Assistente Serv. Adm. Aprend">Assistente Serv. Adm. Aprend</option>
          <option value="Assistente Dep. Pessoal">Assistente Dep. Pessoal</option>
          <option value="Assistente Menor Aprendiz">Assistente Menor Aprendiz</option>
          <option value="Assistente de T.I">Assistente de T.I</option>
      </select>
</div>
    
<div id="Auxiliar">
  <label for="Cargo">Cargo:</label>
    <select id="departamento2" name="departamento2" >
          <option style="display:none">
          <option style="Auxiliar Faturamento">Auxiliar Faturamento</option>
          <option style="Auxiliar Financeiro">Auxiliar Financeiro</option>
          <option style="Auxiliar Frota">Auxiliar Frota</option>
          <option style="Auxliar Limpeza">Auxliar Limpeza</option>
          <option style="Auxiliar Manutenção">Auxiliar Manutenção</option>
          <option style="Auxiliar Mecanico">Auxiliar Mecanico</option>
          <option style="Auxiliar Montador">Auxiliar Montador"</option>
          <option style="Auxiliar Produção">Auxiliar Produção</option>
          <option style="Auxiliar de Serviços Gerais">Auxiliar de Serviços Gerais</option>
          <option style="Auxiliar Administrativo">Auxiliar Administrativo</option>
          <option style="Auxiliar de Borracheiro">Auxiliar de Borracheiro</option>
          <option style="Auxiliar de Caixa">Auxiliar de Caixa</option>
          <option style="Auxiliar de Crédito">Auxiliar de Crédito</option>
          <option style="Auxiiliar de Faturamento">Auxiiliar de Faturamento</option>
          <option style="Auxiliar de Limpeza">Auxiliar de Limpeza</option>
          <option style="Auxiliar de Financeiro">Auxiliar de Financeiro</option>
          <option style="Auxiliar de T.I">Auxiliar de T.I</option>
    </select>
</div>

<div id="Diretor">
  <label for="Cargo">Cargo:</label>
    <select id="departamento8" name="departamento8" >
          <option style="display:none">
          <option style="Diretor Comercial">Diretor Comercial</option>
          <option style="Diretor Administrativo">Diretor Administrativo</option>
          <option style="Diretor Financeiro">Diretor Financeiro</option>
          <option style="Diretor Marketing">Diretor Marketing</option>
          <option style="Diretor Reformadoras">Diretor Reformadoras</option>
          <option style="Diretor Transporte">Diretor Transporte</option>
    </select>
</div>

<div id="Estoquista">
  <label for="Cargo">Cargo:</label>
    <select id="departamento6" name="departamento6" >
          <option style="display:none">
          <option style="Estoquista Loja">Estoquista Loja</option>
          <option style="Estoquista C.D">Estoquista C.D</option>
    </select>
</div>

<div id="Supervisor">
  <label for="Cargo">Cargo:</label>
    <select id="departamento5" name="departamento5" >
          <option style="display:none">
          <option style="Supervisor">Supervisor de Informatica</option>
    </select>
</div>

<div id="Tecnico">
 <label for="Cargo">Cargo:</label>
    <select id="departamento4" name="departamento4" >
          <option style="display:none">
          <option style="Tecnico de Informatica">Técnico de Informatica</option>
          <option style="Tecnico Manutenção de Maquinas">Técnico Manutenção de Maquinas</option>
          <option style="Tec.Segurança Trabalho">Técnico Segurança do Trabalho</option>
          <option style="Tecnico de Manutenção">Técnico de Manutenção</option>
          <option style="Tecnico Informatica">Técnico Informática</option>
          <option style="Torneiro Mecanico">Torneiro Mecanico</option>

    </select>
</div>

<div id="Gerente">
  <label for="Cargo">Cargo:</label>
    <select id="departamento3" name="departamento3" >
          <option style="display:none">
          <option style="Gerente de T.I">Gerente de T.I</option>
          <option style="Gerente Administrativo">Gerente Administrativo</option>
          <option style="Gerente de Custo">Gerente de Custo</option>
          <option style="Gerente de C.D">Gerente de C.D</option>
          <option style="Gerente de Crédito">Gerente de Crédito</option>
          <option style="Gerente Comercial">Gerente Comercial</option>
          <option style="Gerente de Markenting">Gerente de Markenting</option>
          <option style="Gerente de Produção">Gerente de Produção</option>
          <option style="Gerente de R.H">Gerente de R.H</option>
          <option style="Gerente Regional">Gerente Regional</option>
          <option style="Gerente Central de Vendas">Gerente Central de Vendas</option>
          <option style="Gerente de transporte">Gerente de transporte</option>
          <option style="Gerente de Contabilidade">Gerente de Contabilidade</option>
          <option style="Gerente Trainee">Gerente Trainee</option>
</select>
</div>

<div id="Vendas">
  <label for="Cargo">Cargo:</label>
    <select id="departamento7" name="departamento7" >
          <option style="display:none">
          <option style="Vendendor">Vendendor</option>
          <option style="Vendedor Atacado">Vendedor Atacado</option>
          <option style="Vendedor Central de Vendas">Vendedor Central de Vendas</option>
          <option style="Vendedor E-comerce">Vendedor E-comerce</option>
          <option style="Vendendor Externo">Vendendor Externo</option>
          <option style="Caixa/Cadastro">Caixa/Cadastro</option>
    </select>
</div>
  
<input id="submit" type="submit" value="GERAR ASSINATURA" disabled="disabled" onclick="return confirm('Conferiu todos os campos?')">

</form>
</div>
</div> 

<div id="right" style="float:right; width:50%;">

<div class="assinatura">
    <img src="vendedor.jpeg">

</div>

<footer id="myFooter">
 <div class="footer">
		<p class="footer-copyright">Assinador v.1.0 - 2022</p>
 </div>
</footer>
</div> 
 
</body>
</html>










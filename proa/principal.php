<!-- Arquivo Principal da Aplicação
Autor: Vinícius Ingracio -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/> <!-- Aqui faço referência ao arquivo .css para definir os estilos -->
    <link rel="icon" href="_css/Cubo.png" type="image/x-icon" /> <!-- Arquivo para Icone no site -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oxygen');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz');
    </style>
    <title>Vídeos PROA</title>
</head>
<body>
<div align="center">
    <video width="550" height="500" controls="controls" autoplay="autoplay">
        <source src="_videos/PROA%20-%20Acesso%20ao%20Sistema.mp4" type="video/mp4">
        <object data="" width="600" height="600">
            <embed src="teste.mp4">
        </object>
    </video>
</div>
<div id="listavideos">
    <h3 align="center">Material de Capacitação PROA</h3>
    <ul id="lista">
        <h4> Primeiro Acesso e Primeiros Passos</h4>
        <li><a href="acessosis.php" target="_self" title="Acessando o Sistema">Acessando o Sistema</a></li>
        <li><a href="incluinovoproc.php" target="_self" title="Criando Novo Processo">Criando Novo Processo</a></li>
        <li><a href="requerentes.php" target="_self" title="Adicionando Requerentes">Adicionando Requerentes</a></li>
        <li><a href="representante.php" target="_self" title="Adicionando Representantes">Adicionando Representantes</a></li>
        <li><a href="palavrachave.php" target="_self" title="Selecionando uma Palavra Chave">Selecionando uma Palavra Chave</a></li>
        <li><a href="finalinclusaonovo.php" target="_self" title="Finalizando Inclusão de Novo Processo">Finalizando Inclusão de Novo Processo</a></li>
        <li><a href="novodoc.php" target="_self" title="Criando Novo Documento">Criando Novo Documento</a></li>
        <li><a href="uploaddoc.php" target="_self" title="Upload de Documentos">Upload de Documentos</a></li>
        <li><a href="descricaodoc.php" target="_self" title="Criando uma Descrição dos Documentos">Criando uma Descrição dos Documentos</a></li>
        <li><a href="anexarexpdigital.php" target="_self" title="Anexando Documentos ao Expediente Digital">Anexando Documentos ao Expediente Digital</a></li>
        <h4> Recebi um Processo, o que faço? </h4>
        <li><a href="adquiriativi.php" target="_self" title="Adquirindo uma Atividade">Adquirindo uma Atividade</a></li>
        <li><a href="distribuiativi.php" target="_self" title="Distribundo uma Atividade">Distribuindo uma Atividade</a></li>
        <li><a href="assinaturacad.php" target="_self" title="Assinatura Cadastrada">Assinatura Cadastrada</a></li>
        <li><a href="grupostarefas.php" target="_self" title="Associação de Grupos e Tarefas">Associação de Grupos e Tarefas</a></li>
        <li><a href="novatarefa.php" target="_self" title="Criando Nova Tarefa">Criando Nova Tarefa</a></li>
        <li><a href="recuperartarefa.php" target="_self" title="Recuperando uma Tarefa">Recuperando uma Tarefa</a></li>
        <li><a href="assdocs.php" target="_self" title="Assinando Documentos">Assinando Documentos</a></li>
        <li><a href="carimbadocs.php" target="_self" title="Tipos de Carimbos para Documentos Anexados">Tipos de Carimbos para Documentos Anexados</a></li>
    </ul>
</div>
</body>
</html>


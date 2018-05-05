
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
       <div class="col-md-12 text-center">

          <div class="form-gerador-rifa">
          <br/>
          <h2>Gerador de rifa</h2>
          <br/>
          <form id="form-gerar-rifa" method="post" action="gerador.php">
          <input id="titulo-rifa" name="titulo" required type="text" class="input-group input-rifa" placeholder="Titulo da rifa"/>
          <br/>
          <input id="premio-rifa" name="premio" required type="text" class="input-group input-rifa" placeholder="Premiação"/>
          <br/>
          <textarea id="descricao-rifa" name="descricao" required class="input-group input-rifa" cols="5" placeholder="Descrição da rifa"></textarea>
          <br/>
          <input id="numero-rifa" name="numero_rifas" required class="input-group input-rifa" type="number" placeholder="N° de Rifas (Nos testes consegui até 400 na media)"/>
          <br/>
          <br/>
          <button type="submit" class="btn btn-group btn-primary">Gerar Rifas</button>
          <br/>
          <br/>
          </form>
          <br/>
        </div>
       </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

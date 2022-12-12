<?php



class Prodotti {
  public $nome;
  public $detagli;
  public $categoria;
  public $prezzo;


  public function __construct(String $nome, String $detagli, String $categoria, int $prezzo) {
    $this->nome = $nome;
    $this->detagli = $detagli;
    $this->categoria = $categoria;
    $this->prezzo = $prezzo;
  }

  public function getNameItem() {
    return "$this->nome, $this->detagli, $this->categoria, $this->prezzo";
  }
}
$Cani = new Prodotti("Ham-Ham", "Detagli della Papa", "Mangiare o Giocare", "Basso per Quello che Offre");
$Gatti = new Prodotti("Miau-Miau", "Detagli della Papa", "Mangiare o Giocare", "Basso per Quello che Offre");

echo $Cani->getNameItem();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container text-center">
    <h3>PRODOTTI PER ANIMALI DOMESTICI!!!</h3>

  </div>
</body>
</html>
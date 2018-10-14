<!DOCTYPE html>
<html lang="es">
  <head>
      <title>Facturas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilo.css">
      <style>
      
          .container {
              
              margin-top:20px;
              
          }
          
          .table {
              
              border: 1px solid black;
          }
          h3 {
              
              text-align: center;
          }
          
          ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
        
          
      </style>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
    <body>
        <ul>
  <li><a class="active" href="<?= base_url()?>index.php/facturas">Facturas</a></li>
  <li><a href="<?= base_url()?>index.php/contratos">Contratos</a></li>
   

</ul>
        
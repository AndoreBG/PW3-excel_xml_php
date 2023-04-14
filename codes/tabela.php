<!DOCTYPE html>
<html>
  <head>
    <title>Dados formatados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Dados formatados</h1>
    <table>
      <tr>
        <th>Código da seção</th>
        <th>Descrição da seção</th>
        <th>Código da subclasse</th>
        <th>Descrição da subclasse</th>
      </tr>
      <?php
        $xml = simplexml_load_file("tabela_pronta.xml");
        foreach ($xml->linha as $linha) {
          echo "<tr>";
          echo "<td>" . $linha->COD_SECAO . "</td>";
          echo "<td>" . $linha->DESC_SECAO . "</td>";
          echo "<td>" . $linha->COD_SUBCLASSE . "</td>";
          echo "<td>" . $linha->DESC_SUBCLASSE . "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
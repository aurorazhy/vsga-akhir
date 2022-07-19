<?php include '../etc/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <style>
      table {
         border: 0px;
      }

      .divider {
         width: 2rem;
      }

      td {
         width: 10rem;
         height: 2rem;
      }

      .container {
         margin-top: 2rem;
      }
   </style>
   <div class="container">

      <center>
         <p>°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>
         <p>RECEIPT</p>
         <p>°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>
         <?php
         $id = $_POST['id'];
         $data = mysqli_query($con, "SELECT * FROM customer INNER JOIN tempat ON tempat = harga WHERE idcus = $id");
         while ($c = mysqli_fetch_array($data)) { ?>
            <table>
               <tr>
                  <td>Nama</td>
                  <td class="divider"> : </td>
                  <td><?= $c['namacus'] ?></td>
               </tr>
               <tr>
                  <td>No Identitas</td>
                  <td class="divider"> : </td>
                  <td><?= $c['no_identitas'] ?></td>
               </tr>
               <tr>
                  <td>No HP</td>
                  <td class="divider"> : </td>
                  <td><?= $c['no_hp'] ?></td>
               </tr>
               <tr>
                  <td>Tempat</td>
                  <td class="divider"> : </td>
                  <td><?= $c['nama'] ?></td>
               </tr>
               <tr>
                  <td>Tanggal</td>
                  <td class="divider"> : </td>
                  <td><?= $c['tanggal'] ?></td>
               </tr>
               <tr>
                  <td>Tiket Dewasa</td>
                  <td class="divider"> : </td>
                  <td><?= $c['dewasa'] ?></td>
               </tr>
               <tr>
                  <td>Tiket Anak-anak</td>
                  <td class="divider"> : </td>
                  <td><?= $c['anak'] ?></td>
               </tr>
               <tr>
                  <td>Total</td>
                  <td class="divider"> : </td>
                  <td><?= $c['total'] ?></td>
               </tr>
            </table>
         <?php } ?>
      </center>
      <script type="text/javascript">
         window.print();
      </script>

   </div>
</body>

</html>
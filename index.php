<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        table, td {
            margin: 0 auto;
            border: 1px solid black;
        }
        
       img {
            width: 150px;;
        }
</style>
</head>
<body>
<!-- <hr>
<marquee scrollamount="15"> -->
     <table>
          <?php
          $getImages = scandir("img"); // сканирование каталога img, изображения расположены по умолчанию, первые два элемента точки(., ..)
          unset ($getImages[0], $getImages[1]); // удаление точки(.) и двух точек(..)

          function name($pic) { //ячека с именем картинки
               echo '<td>'. "$pic" .'</td>';
          }

          foreach ($getImages as $pic) { //перебор массива $getImages
                         echo '<td> <img src="img/' . $pic . '" alt="photo"> </td>';
          }
          
          echo '<tr>';
          foreach ($getImages as $pic) { //перебор массива $getImages
               name($pic);
          }
          echo '</tr>';
          ?>
     </table>
<!-- </marquee>
<hr> -->
<br>
</body>
</html>
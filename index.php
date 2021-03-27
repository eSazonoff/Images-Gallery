<style>
     table, td{
          margin: auto;
          border: 1px solid black;
     }
     body{
          text-align:center;
     }
</style>
<?php
     $images_extensions = ['jpg', 'png', 'bmp']; //разрешенные расширения файлов
     $dir = 'img'; //имя папки, которая находится в том же каталоге, что и скрипт
     $files = array_slice(scandir($dir), 2); //scandir получает имена файлов из папки, array_slice удаляет 2 последних элемента, т.к. это каталоги
     echo '<table><tr>';
     $column = 0;
     foreach($files as $filename) //цикл по массиву $files, переменная $filename = элемент
     { 
          if ($column > 0 && $column % 5 == 0) echo '</tr><tr>'; //если остаток от деления равен 0, переходим на новую строку
          $column++; //увеличиваем счетчик столбцов
          $file_extension = strtolower(substr($filename, strrpos($filename, '.') + 1)); // вырезаем расширение файла (после точки)
          if (!in_array($file_extension, $images_extensions)) continue; //если расширение не входит в список разрешенных пропускаем
          echo '<td>' . $filename . '<br><img src="' . $dir . '/' . $filename . '"></td>';
     }

     echo '</tr></table>';
?>
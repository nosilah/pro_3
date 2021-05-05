

<table border = "1">
<tr>

<th>id</th>
<th>title</th>
<th>content</th>


</tr>
<?php 

foreach($news as $i){
    echo '<tr> '. '<td>';
    print_r($i['id']);
    echo '</td>';
    echo  '<td>';
    print_r($i['title']);
    echo '</td>';
    echo  '<td>';
    print_r($i['content']);
    echo '</td>'.'</tr>';
}
 ?>


</table>
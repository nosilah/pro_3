<?php

/* @var $this yii\web\View */


$this->title = 'My Yii Application';

?>


<table border="1" style="width: 50%;">

    <tr>
        <th>Username</th>
        <th>Emial</th>
    </tr>
<?php  foreach($listUsers as $user):?>
    <tr>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>

    </tr>
<?php endforeach; ?>

</table>
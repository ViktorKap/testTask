<!-- блок отображения задач -->

<?php

include_once ('config.php');
include(LIB_PATH.DS.'db.php');

if ( !(is_null($_REQUEST['page'])) ){
    $page=$_REQUEST['page'];
}else {
    $page=0;
}
$c=0;
$r = $db->query("SELECT * FROM tasks ORDER BY date_end, date_add DESC LIMIT ".($page*NUM_IN_PAGE).", ".NUM_IN_PAGE); // выбор записей из БД
while ($row = $r->fetch_assoc())  // перебор всех записей
{
    ($c%2) ?  $col="class='two'" :  $col="class='one'";	// цвет для четных и нечетных записей
    ?>
    <table  <?=$col; ?> >
        <tr>
            <!-- поля: кнопка, задача, дата добавления -->
            <td width="25">
                <input id="task_btn" type="submit" onclick="onPush(<?=$row['id']?>)" value="<?=( (!is_null( $row['date_end'])) ) ? 'V" disabled="disabled"' : '""';?>>
            </td>
            <td class="<?=( (!is_null( $row['date_end'])) ) ? 'ended"' : 'task"';?>>
                <?php echo $row['task']; ?>
            </td>
            <td class="date">
                <?= date('d-m-Y H:i:s', strtotime($row['date_add'])); ?>
            </td>
        </tr>
    </table>
    <?php
    $c++;
}
if ($c==0) {// если ни одной записи не встретилось
    echo "Задачи отсутствуют!<br>";
}
// Выводим перечень страниц
    $rc = $db->query("SELECT count(*) AS count FROM tasks"); //узнаем количество записей
    $row = $rc->fetch_assoc();
    $count = $row['count'];
    $pages = ceil($count/NUM_IN_PAGE);//определим количество страниц
    if($pages>1){
        for($i=1;$i<=$pages;$i++){
            if ( $page != ($i-1) ){
                echo '<a href="javascript:getPage('.($i-1).');">'.$i.'</a> ';
            }else {
                echo $i;
            }

         }
    }
is_a
?>

<?php
    use \Edu\app\core\File;

    $file = new File();
    $file->loadScript('time');
    $file->loadStyle('time');
?>
<h1>Time</h1>
<div class="content-time">
    <form class="form-time myform" myform>
        <div class = "label-date">Дата:</div>
        <div>
            <input type="text" name = "date" >
        </div>
        <div class = "label-minute">Кол-во минут:</div>
        <div>
            <input type="text" name = "minute">
        </div>
        <div class = "myform-send form-time-send">O</div>
    </div>
    <div class="table">
        <table class="time">
            <tr>
                <th>Дата</th>
                <th>Время, мин</th>
            </tr>
            <?php
                foreach ($data as $key => $value) {
                    // echo "<pre>";
                    // print_r($value->fields);
                    // echo "</pre>";

                    $date = $value->fields['date'];
                    $minute = $value->fields['minute'];
                    $html = <<<_END
                    <tr>
                        <td>$date</td>
                        <td>$minute</td>
                    </tr>
                    _END;
                    // $name->$name2  !!!!!!!!!!
                    echo $html;
                }
            ?>
        </table>
    </div>
    <div class = "add"><span>+</span></div>
    <div class="graph">

    </div>
</div>
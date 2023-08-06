<?php
    use \Edu\app\core\File;

    $file = new File();
    $file->loadScript('time');
    $file->loadStyle('time');
?>
<div class="content-time">
    <div>
        <h1>Time</h1>
    </div>

    <table class="time">
        <tr>
            <th>Дата</th>
            <th>Время, мин</th>
        </tr>
    </table>
</div>
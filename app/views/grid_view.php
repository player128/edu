<?php
    use \Edu\app\core\File;

    $file = new File();
    $file->loadScript('grid');
    $file->loadStyle('grid');
?>
<h1>Hello</h1>

<div class="container">
  <div class="box-1"> A </div>
  <div class="box-2"> B </div>
  <div class="box-3"> C </div>
  <div class="box-4"> D </div>
</div>
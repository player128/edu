<div class="content-info">
    <h1>Hi</h1>
    <ul>
        <?php
            if (empty($data)) return false;
            if (!empty($data['list'])) {
                foreach ($data['info'] as $value) {
                    $name = $value['name'];
                    $href = $value['href'];
                    
                    $html = <<< END
                        <li>
                            <a href="$href">$name</a>
                        </li>
                    END;
                    echo $html;
                }
            }
            else {
                echo $data;
            }

        ?>
    </ul>
</div>

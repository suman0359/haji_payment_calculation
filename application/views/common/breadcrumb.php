<ul class="breadcrumb">
    <?php
    foreach ($bc as $b) {
        if ($b['link'] === '#') {
            echo '<li class="active">' . $b['page'] . '</li>';
        } else {
            echo '<li><a href="' . $b['link'] . '">' . $b['page'] . '</a></li>';
        }
    }
    ?>
   
</ul>
<?php
HTML::macro('bs4_input', function($name, $placeholder, $type="text"){
    ob_start();
    ?>
    <div class="form-group">
        <label for="<?=$name?>">Email address</label>
        <input type="<?=$type?>" class="form-control" id="<?=$name?>" name="<?=$name?>" placeholder="<?=$placeholder?>">
    </div>
    <?php
        $output = ob_get_clean();
        return $output;
});
?>
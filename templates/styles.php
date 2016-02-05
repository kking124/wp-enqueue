<?php
$handle = 'wpenq_styles_handle';
$handle_option = get_option($handle);
$path = 'wpenq_styles_path';
$path_option = get_option($path);
$index = 0; // TODO multiple inputs
?>
<p>Add style:</p>

<?php $handle_value = (isset($handle_option[$index])) ? esc_attr($handle_option[$index]) : '' ?>
<input type="text" name="<?= $handle ?>[]" value="<?= $handle_value ?>" placeholder="Add handle">

<?php $path_value = (isset($path_option[$index])) ? esc_attr($path_option[$index]) : '' ?>
<input type="text" name="<?= $path ?>[]" value="<?= $path_value ?>" placeholder="Add path">
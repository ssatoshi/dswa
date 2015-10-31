<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
if(! mb_check_encoding($name, 'Shift_JIS')){
  die('');
}
$name = mb_convert_encoding($name, 'UTF-8', 'Shift_JIS');
?>
<body>
name is <?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>.
</body

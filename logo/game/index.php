<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo PlayGame';
echo '<h2 class="phdr">'.$key.'</h2>';
echo '<div class="list1"><img src="view.php?text='.(isset($_POST['text']) ? htmlentities($_POST['text']) :'S2VN.TOP').'"><br><a href="view.php?text='.(isset($_POST['text']) ? htmlentities($_POST['text']) :'S2VN.TOP').'">[Tải về]</a>';
echo '<br/><form method="post">Nội dung logo:<br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'" /><br/><input type="submit" value="Tạo ngay" /></form></div>';
?>
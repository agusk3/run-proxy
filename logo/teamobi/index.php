<?php
/**
 * Code by thaibinhvip - https://www.facebook.com/botsim
 * @Copyright S2VN.TOP
 * Website: https://nam.name.vn
 * 
 */
$key='Tạo Logo Teamobi';

echo '<h2 class="phdr">'.$key.'</h2>';
echo ' <div class="menu">
<img src="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&size='.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'50').'&f='.(isset($_POST['f']) ? ''.htmlentities($_POST['f']).'':'1').'" alt="logo" /> <br/> <b> » <a style="color:red!important;" href="view.php?text='.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'&size='.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'&vt='.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'50').'&f='.(isset($_POST['f']) ? ''.htmlentities($_POST['f']).'':'1').'" >Download</a></b> <br/><form action="" method="POST">Tên Logo <br/><input type="text" name="text" value="'.(isset($_POST['text']) ? ''.htmlentities($_POST['text']).'':'S2VN.TOP').'"/>
<br/>
Size:<br/>
<input type="text" name="size" value="'.(isset($_POST['size']) ? ''.htmlentities($_POST['size']).'':'20').'" />
<br/>Vị trí:<br/><input type="text" name="vt" value="'.(isset($_POST['vt']) ? ''.htmlentities($_POST['vt']).'':'35').'" /><br/><input type="submit" value="Tạo"/></form></div>';
?>
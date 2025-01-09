<?php
if (isset($_POST['acc'])) {
    if ($_POST['acc'] == 'admin' && $_POST['pw'] == '1234') {
        $_SESSION['login'] = 1;
    } else {
        echo "帳密錯誤";
    }
}












if (!isset($_SESSION['login'])) {
?>
<form action="?" method="post"></form>
<table></table>




<?php
} else {
?>

<div class="rb tab">
    <h2 class="ct">請選擇所需功能</h2>
</div>

<?php
}
?>
</form>
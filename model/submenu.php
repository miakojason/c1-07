<?php include_once "../api/db.php"; ?>
<h1 class="cent">編輯次選單</h1>
<hr>
<form action="./api/submenu.php" method="post" enctype="multipart/form-data">
    <table class="opt" style="margin: auto;">
        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['menu_id' => $_GET['id']]);
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
                <td><input type="text" name="href[]" value="<?= $row['href']; ?>"></td>
                <td>
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="cent">
        <input type="hidden" name="menu_id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="修改確定"><input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>
<script>
    function more() {
        let opt = `  <tr>
            <td><input type="text" name="add_text[]"></td>
            <td><input type="text" name="add_href[]"></td>
            <td></td>
        </tr>`
        $(".opt").append(opt)
    }
</script>
<!-- <tr>
            <td><input type="text" name="add_text"></td>
            <td><input type="text" name="add_href"></td>
            <td></td>
        </tr> -->
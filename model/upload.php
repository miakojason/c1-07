<?php
switch ($_GET['table']) {
    case "title":
        echo "<h1 class='cent'>更新網站標題區圖片</h1>";
        break;
    case "mvim":
        echo "<h1 class='cent'>更新動畫圖片</h1>";
        break;
    case "image":
        echo "<h1 class='cent'>更新校園映像圖片</h1>";
        break;
}
?>
<hr>
<table style="margin: auto;">
    <tr>
        <?php
        switch ($_GET['table']) {
            case "title":
                echo "<td>網站標題區圖片:</td>";
                break;
            case "mvim":
                echo "<td>動畫圖片:</td>";
                break;
            case "image":
                echo "<td>校園映像圖片:</td>";
                break;
        }
        ?>
        <td><input type="file" name="img" id=""></td>
    </tr>
</table>
<div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
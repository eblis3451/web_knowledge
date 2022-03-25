<?php

require_once 'sql_config.php';

$title = $_POST[title];
$content = $_POST[content];
$date = $_POST[date];
//image的在下面處理
//新增圖片
     //限制圖片型別格式，大小
        if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg"))
            && ($_FILES["file"]["size"] < 200000)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else {
                echo "檔名: " . $_FILES["file"]["name"] . "<br />";
                echo "檔案型別: " . $_FILES["file"]["type"] . "<br />";
                echo "檔案大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "快取檔案: " . $_FILES["file"]["tmp_name"] . "<br />";

            //設定檔案上傳路徑，選擇指定資料夾
                if (file_exists("../rc_images/about/news/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file(
                        $_FILES["file"]["tmp_name"],
                        "../rc_images/about/news/" . $_FILES["file"]["name"]
                    );
                    echo "儲存於: " . "../rc_images/about/news/" . $_FILES["file"]["name"];//上傳成功後提示上傳資訊
                }
            }
        } else {
            echo "上傳失敗！";//上傳失敗後顯示錯誤資訊
        }

        //連結資料庫
        require_once 'sql_config.php';

        //定義變數，儲存檔案上傳路徑，之後將變數寫進資料庫相應欄位即可
        $file = "../rc_images/about/news/" . $_FILES["file"]["name"];
        $sql = "INSERT INTO `news`(`headline`, `content`, `image`, `date`) VALUES ('$title','$content','$file','$date')";

        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "成功新增一條記錄";//成功傳入資料後顯示成功新增一條資料

header( "location:../about.php");  //回index.php

?>


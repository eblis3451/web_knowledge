<?PHP
$DB_NAME = "labweb"; // 資料庫名稱
$DB_USER = "root"; // 資料庫管理帳號
$DB_PASS = ""; // 資料庫管理密碼
$DB_HOST = "localhost"; // 資料庫位址
// 連接 MySQL 資料庫伺服器
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
if (empty($con)) {
    print mysqli_error($con);
    die("資料庫連接失敗！");
    exit;
}
mysqli_select_db($con, $DB_NAME);
mysqli_query($con, "SET NAMES 'UTF-8'");// 設定連線編碼

?>
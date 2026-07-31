<?php
// إعدادات الاتصال بقاعدة البيانات المحلية (XAMPP)
$host     = "localhost";
$username = "root";
$password = ""; // في XAMPP بيكون الباسورد فاضي تلقائياً
$database = "sawaqny_db";

// إنشاء الاتصال
$conn = new mysqli($host, $username, $password, $database);

// ضبط التشفير لدعم اللغة العربية بشكل صحيح
$conn->set_charset("utf8mb4");

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>

<?php
// إعدادات الاتصال بقاعدة البيانات المحلية (XAMPP)
$host     = "localhost";
$username = "root";
$password = ""; // الباسورد فاضي تلقائياً في XAMPP
$database = "sawaqny_db";

// إنشاء الاتصال
$conn = new mysqli($host, $username, $password, $database);

// ضبط التشفير لدعم اللغة العربية بشكل صحيح
$conn->set_charset("utf8mb4");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// رسالة تأكيد مؤقتة للتجربة فقط
echo "تم الاتصال بقاعدة البيانات sawaqny_db بنجاح! 🚀";
?>
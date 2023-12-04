<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy địa chỉ email từ biểu mẫu
    $email = $_POST["email"];

    // Gửi email đến địa chỉ cụ thể (abc@gmail.com)
    $to = "xuanhop18019@gmail.com";
    $subject = "New Newsletter Subscription";
    $message = "A new user has subscribed to the newsletter.\nEmail: $email";

    // Sử dụng hàm mail để gửi email
    mail($to, $subject, $message);

    // Redirect hoặc hiển thị thông báo thành công nếu cần
    header("Location: success_page.html");
    exit();
}
?>

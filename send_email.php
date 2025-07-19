<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت اطلاعات فرم
    $name = trim($_POST['name']);
    $family = trim($_POST['family']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // ایمیل مقصد (ایمیل خودتان را اینجا قرار دهید)
    $to = "hossinparvin555@gmail.com"; // جایگزین کنید با ایمیل خودتان

    // موضوع ایمیل
    $subject = "پیام جدید از فرم تماس";

    // بدنه ایمیل
    $body = "نام: $name
";
    $body .= "فامیل: $family
";
    $body .= "ایمیل: $email
";
    $body .= "تلفن: $phone
";
    $body .= "پیام:\n$message
";

    // هدرهای ایمیل
    $headers = "From: $email\r
";
    $headers .= "Reply-To: $email\r
";

    // ارسال ایمیل
    if (mail($to, $subject, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "خطا در ارسال پیام. لطفاً دوباره سعی کنید.";
    }
} else {
    echo "اطلاعات ارسال نشده است.";
}
?>

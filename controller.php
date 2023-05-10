<?php
    include_once("connection.php");
    // Connection Created Successfully

    session_start();

    // Store All Errors
    $errors = [];

    // When Sign Up Button Clicked
    if (isset($_POST['signup'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

        // check password length if password is less then 8 character so
        if (strlen(trim($_POST['password'])) < 8) {
            $errors['password'] = 'Sử dụng 8 ký tự trở lên bao gồm các chữ cái, số và ký hiệu(@,#,...)';
        } else {
            // if password not matched so
            if ($_POST['password'] != $_POST['confirmPassword']) {
                $errors['password'] = 'Mật khẩu không khớp';
            } else {
                $password = md5($_POST['password']);
            }
        }
        // generate a random Code
        $code = rand(999999, 111111);
        // set Status
        $status = "Chưa xác minh";

        // echo 'first name = ' .$fname . "<br> last name = " .$lname . "<br> email = " .$email . "<br> password = " .$password . "<br> gender = " .$gender . "<br>";

        // check email validation and save information
        $sql = "SELECT * FROM dskh WHERE email = '$email'";
        $res = mysqli_query($conn, $sql) or die('query failed');
        if (mysqli_num_rows($res) > 0) {
            $errors['email'] = 'Email này đã được sử dụng';
        }

        // count erros
        if (count($errors) === 0) {
            $insertQuery = "INSERT INTO dskh (firstName,lastName,email,password,gender,code,status)
            VALUES ('$fname','$lname','$email','$password','$gender',$code,'$status')";
            $insertInfo = mysqli_query($conn, $insertQuery);

            // Send Varification Code In Gmail
            if ($insertInfo) {
                // Configure Your Server To Send Mail From Local Host Link In Video Description (How To Config LocalHost Server)
                $subject = 'Mã xác minh email';
                $message = "Mã xác minh của bạn là $code";
                $sender = 'From: shopbiutyphun@gmail.com';

                if (mail($email, $subject, $message, $sender)) {
                    $message = "Đã gửi mã xác minh đến Email của bạn <br> $email";

                    $_SESSION['message'] = $message;
                    header('location: code.php');
                } else {
                    $errors['otp_errors'] = 'Gửi mã không thành công!';
                }
            } else {
                $errors['db_errors'] = "Chèn dữ liệu không thành công";
            }
        }
    }

    // if Verify Button Clicked
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "";
        $otp = mysqli_real_escape_string($conn, $_POST['otp']);
        $otp_query = "SELECT * FROM dskh WHERE code = $otp";
        $otp_result = mysqli_query($conn, $otp_query);

        if (mysqli_num_rows($otp_result) > 0) {
            $fetch_data = mysqli_fetch_assoc($otp_result);
            $fetch_code = $fetch_data['code'];

            $update_status = "Đã xác minh";
            $update_code = 0;

            $update_query = "UPDATE dskh SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                header('location: dangnhap.php');
            } else {
                $errors['db_error'] = "Không thể kết hợp dữ liệu trong cơ sở dữ liệu!";
            }
        } else {
            $errors['otp_error'] = "Mã xác minh không hợp lệ!";
        }
    }

    // if login Button clicked so

    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $emailQuery = "SELECT * FROM dskh WHERE email = '$email'";
        $email_check = mysqli_query($conn, $emailQuery);

        if (mysqli_num_rows($email_check) > 0) {
            $passwordQuery = "SELECT * FROM dskh WHERE email = '$email' AND password = '$password'";
            $password_check = mysqli_query($conn, $passwordQuery);
            if (mysqli_num_rows($password_check) > 0) {
                $fetchInfo = mysqli_fetch_assoc($password_check);
                $status = $fetchInfo['status'];
                $name = $fetchInfo['firstName'] . " " . $fetchInfo['lastName'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $fetchInfo['email'];
                $_SESSION['password'] = $fetchInfo['password'];
                if ($status === 'Đã xác minh') {
                    header('location: main.php');
                } else {
                    $info = "Bạn vẫn chưa xác minh email của mình $email";
                    $_SESSION['message'] = $info;
                    header('location: code.php');
                }
            } else {
                $errors['email'] = 'Mật khẩu không đúng';
            }
        } else {
            $errors['email'] = 'Địa chỉ email không hợp lệ';
        }
    }

    // if forgot button will clicked
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $emailCheckQuery = "SELECT * FROM dskh WHERE email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        // if query run
        if ($emailCheckResult) {
            // if email matched
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $code = rand(999999, 111111);
                $updateQuery = "UPDATE dskh SET code = $code WHERE email = '$email'";
                $updateResult = mysqli_query($conn, $updateQuery);
                if ($updateResult) {
                    $subject = 'Mã xác minh email';
                    $message = "Mã xác minh của bạn là $code";
                    $sender = 'From: shopbiutyphun@gmail.com';

                    if (mail($email, $subject, $message, $sender)) {
                        $message = "Đã gửi mã xác minh đến Email của bạn <br> $email";

                        $_SESSION['message'] = $message;
                        header('location: email-verify.php');
                    } else {
                        $errors['otp_errors'] = 'Gửi mã không thành công!';
                    }
                } else {
                    $errors['db_errors'] = "Chèn dữ liệu không thành công!";
                }
            }else{
                $errors['invalidEmail'] = "Địa chỉ email không hợp lệ";
            }
        }else {
            $errors['db_error'] = "Kiểm tra email từ cơ sở dữ liệu không thành công!";
        }
    }
if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM dskh WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($conn, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE dskh SET code = 0";
            $run = mysqli_query($conn,$newQuery);
            header("location: changepass.php");
        }else{
            $errors['verification_error'] = "Mã xác minh không hợp lệ";
        }
    }else{
        $errors['db_error'] = "Kiểm tra mã xác minh từ cơ sở dữ liệu không thành công!";
    }
}

// change Password
if(isset($_POST['changePassword'])){
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    
    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = 'Sử dụng 8 ký tự trở lên bao gồm các chữ cái, số và ký hiệu(@,#,...)';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = 'Mật khẩu không khớp';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE dskh SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            session_unset($email);
            session_destroy();
            header('location: dangnhap.php');
        }
    }
}
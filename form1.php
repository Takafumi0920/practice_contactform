<?php 


session_start();

$errors = array();

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['body'];

$name = htmlspecialchars($name, ENT_QUOTES);
$email = htmlspecialchars($email, ENT_QUOTES);
$subject = htmlspecialchars($subject, ENT_QUOTES);
$body = htmlspecialchars($body, ENT_QUOTES);

//if( !empty($_POST) ) {

	//foreach( $_POST as $key => $value ) {
	//	$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
//	} 
//}

if($name === "") {
    $errors['name'] = "お名前が入力されていません。";
}
if($email === "") {
    $errors['email'] = "メールアドレスが入力されていません。";
}
if($body === "") {
    $errors['body'] = "お問合せ内容が入力されていません。";
}

if(count($errors) === 0) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['body'] = $body;

    header('Location: https://itgyet3.xsrv.jp/form2.php');
    exit();
}
}


if(isset($_GET['action']) && $_GET['action'] === 'edit') {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $subject = $_SESSION['subject'];
    $body = $_SESSION['body'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>お問合せ</title>
</head>
<body>
<?php 
    echo "<ul>";
    foreach($errors as $value) {
        echo "<li>";
        echo $value;
        echo "</li>";
    }
    echo "</ul>";
?>
<form action="form1.php" method="post">
<table>
    <tr>
        <th>お名前</th><td><input type="text" name="name" value="<?php if(isset($name)){echo $name;} ?>"></td>
    </tr>
    <tr>
        <th>メールアドレス</th><td><input type="text" name="email" value="<?php if(isset($email)){echo $email;} ?>"></td>
    </tr>
    <tr>
        <th>お問合せの種類</th><td>
        <select name="subject">
            <option value="お仕事に関するお問合せ" <?php if(isset($subject) && $subject === "お仕事に関するお問合せ") { echo "selected" ;} ?>>お仕事に関するお問合せ</option>
            <option value="その他のお問合せ" <?php if(isset($subject) && $subject === "その他のお問合せ") { echo "selected" ;} ?>>その他のお問合せ</option>
        </select>
        </td>
    </tr>
    <tr>
        <th>お問合せ内容</th><td><textarea name="body" cols="40" rows="10"><?php if(isset($body)){echo $body;} ?></textarea></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="submit" value="確認画面へ"></td>
    </tr>
</table>
</form>
</body>
</html>
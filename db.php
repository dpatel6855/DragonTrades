<?php

// require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
// require_once('vendor/phpmailer/phpmailer/src/SMTP.php');
// require_once('vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

session_start();
$servername = "localhost";
$username = "root";
$password = "Devam";
$db = "userregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// register
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $cpassword = $_POST['confirmpassword'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  //escape slashes
  $name = stripslashes($name);
  $username = stripslashes($username);
  $cpassword = stripslashes($cpassword);
  $password = stripslashes($password);
  $email = stripslashes($email);

  if ($password != $cpassword) {
    echo "<script>alert('Password do  not match.'); window.location.href ='DevamLogin.html';</script>";
  } else {

    $sql = "INSERT INTO usertable(username,password,name,email) VALUES ('$username','$password','$name','$email')";

    if (mysqli_query($conn, $sql)) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      echo "<script>alert('Record Added Successfully'); window.location.href ='DevamLogin.html';</script>";
      header('location: index.php');
      exit;
    } else {
      echo "Error: " . $sql . ":- " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
}



// login


if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  //escape slashes
  $username = stripslashes($username);
  $password = stripslashes($password);

  $sql = "SELECT username, password FROM  usertable WHERE username = '$username'  AND password = '$password'";


  if (mysqli_query($conn, $sql)) {
    $results  = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);
    if ($count > 0) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      echo "<script>alert('Login successful.'); window.location.href ='DevamLogin.php';</script>";
      header('location: index.php');
    } else {
      echo "<script>alert('Wrong email or password.'); window.location.href ='DevamLogin.php';</script>";;
    }

    exit;
  } else {
    echo "Error: " . $sql . ":- " . mysqli_error($conn);
  }

  mysqli_close($conn);
}




// save message 

if (isset($_POST['savecontact'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $email = $_POST['email'];

  //escape slashes
  $name = stripslashes($name);
  $phone = stripslashes($phone);
  $message = stripslashes($message);
  $email = stripslashes($email);



  $sql = "INSERT INTO messages(phone,message,name,email) VALUES ('$phone','$message','$name','$email')";

  if (mysqli_query($conn, $sql)) {

     try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "ssl://smtp.gmail.com";                      //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'devamnpatel@gmail.com';                     //SMTP username
    $mail->Password   = 'kzjxtrccqkrxohpc';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dnp68@drexel.edu');
    $mail->addAddress('dnp68@drexel.edu');     //Add a recipient\
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Message';
    // $mail->Body    = 'Hi I am '.$name ."\r\n".'My phone number is '.$phone ."\r\n".'My email is'.$email."\r\n".'My message'.$message;
    
    $mail->Body    = '<p>My name is '.$name.'</p> <br><p>My email is '.$email.'</p> <br> <p>My phone number is'.$phone.'</p> <br><p>My message is '.$message.'</p>';


    $mail->send();
    echo "<script>alert('Record Added Successfully and Message has been sent'); window.location.href ='contact.php';</script>";
     } catch (\Throwable $th) {
      echo 'Message has not been sent';
     }

    exit;
  } else {
    echo "Error: " . $sql . ":- " . mysqli_error($conn);
  }

  mysqli_close($conn);
}




























// file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // REGISTER USER
// if (isset($_POST['register'])) {
//   // receive all input values from the form
//   $username = mysqli_real_escape_string($db, $_POST['username']);
//   $email = mysqli_real_escape_string($db, $_POST['email']);
//   $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
//   $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//   // form validation: ensure that the form is correctly filled ...
//   // by adding (array_push()) corresponding error unto $errors array
//   if (empty($username)) { array_push($errors, "Username is required"); }
//   if (empty($email)) { array_push($errors, "Email is required"); }
//   if (empty($password_1)) { array_push($errors, "Password is required"); }
//   if ($password_1 != $password_2) {
// 	array_push($errors, "The two passwords do not match");
//   }

//   // first check the database to make sure 
//   // a user does not already exist with the same username and/or email
//   $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);

//   if ($user) { // if user exists
//     if ($user['username'] === $username) {
//       array_push($errors, "Username already exists");
//     }

//     if ($user['email'] === $email) {
//       array_push($errors, "email already exists");
//     }
//   }

//   // Finally, register user if there are no errors in the form
//   if (count($errors) == 0) {
//   	$password = md5($password_1);//encrypt the password before saving in the database

//   	$query = "INSERT INTO users (username, email, password) 
//   			  VALUES('$username', '$email', '$password')";
//   	mysqli_query($db, $query);
//   	$_SESSION['username'] = $username;
//   	$_SESSION['success'] = "You are now logged in";
//   	header('location: index.php');
//   }
// }


// // LOGIN USER
// if (isset($_POST['login'])) {
//   $username = mysqli_real_escape_string($db, $_POST['username']);
//   $password = mysqli_real_escape_string($db, $_POST['password']);

//   if (empty($username)) {
//   	array_push($errors, "Username is required");
//   }
//   if (empty($password)) {
//   	array_push($errors, "Password is required");
//   }

//   if (count($errors) == 0) {
//   	$password = md5($password);
//   	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//   	$results = mysqli_query($db, $query);
//   	if (mysqli_num_rows($results) == 1) {
//   	  $_SESSION['username'] = $username;
//   	  $_SESSION['success'] = "You are now logged in";
//   	  header('location: index.php');
//   	}else {
//   		array_push($errors, "Wrong username/password combination");
//   	}
//   }
// }






















// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
















// if(isset($_POST['review'])){
//     $fname = $_POST['name'];
//     $phone = $_POST['phone'];
//     $review = $_POST['message'];
//     $rating = $_POST['rating'];

//     $query = "INSERT INTO reviews (full_name, phone_number, reviews, rating) VALUES ('$fname', '$phone', '$review', '$rating')";
//     if(mysqli_query($conn,$query)){
//         echo "<script>alert('Review Added Successfully'); window.location.href ='index.php';</script>";

//         exit;
//     }else{
//         echo "Error: ".$query.":- ".mysqli_error($conn);
//     } 

//     mysqli_close($conn);

// }

if (isset($_POST['sellBookSave'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $department = $_POST['department'];
  $isbnnumber = $_POST['isbnnumber'];
  $drexelemail = $_POST['drexelemail'];
  $subject = $_POST['subject'];

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $filename =  htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  $sql = "INSERT INTO sellbook (firstname,lastname,department,isbnnumber,drexelemail,details,file_path) VALUES ('$firstname','$lastname','$department','$isbnnumber','$drexelemail','$subject','$filename')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Added Successfully'); window.location.href ='sellbook.html';</script>";

    exit;
  } else {
    echo "Error: " . $sql . ":- " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

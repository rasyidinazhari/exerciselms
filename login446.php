<!-- <header class="shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="navbarkel1 ">
        <div class="brandkel1">
            <a href="preutskel1.php"><h3>Zeus Academy</h3></a>
        </div>
        <div class="authkel1">
            <a href="#">
                <div class="loginkel1 authuserkel1" id="loginkel1">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></p>
                </div>
            </a>
        </div>
    </div>
</header> -->
<!-- <img style="width: 100%;" src="assets/img/maintenance.png" alt=""> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Zeus Academy</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="preutskel1.css">
    <link rel="stylesheet" href="zeusacademy446.css">
</head>
<body>
    <div class="mainlogin446">
        <div class="mainloginform446">
            <div class="formheaderloginform446">
                <div class="loginformkiri446">
                    <a href="preutskel1.php""><img style="width: 100px;" src="assets/img/logo.png" alt="logozeus"></a>
                    <h1>Welcome Back!</h1>
                    <p>Sign-in to Register Zeus Academy Program.</p>
                    <div class="loginformbeneran446">
                        <form action="" method="post">
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="name446" aria-describedby="emailHelp" placeholder="Your Full Name" name="formnim446" required>
                                <label for="name446" class="form-label">NIM</label>
                                <div id="nameHelp" class="form-text">Input your NIM.</div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="password" class="form-control" id="name446" aria-describedby="emailHelp" placeholder="Your Full Name" name="formpass446" required>
                                <label for="name446" class="form-label">Password</label>
                                <div id="nameHelp" class="form-text">Input your password correctly.</div>
                            </div>
                            <div class="rememberforgot446">
                                <div class="remember446">
                                    <input type="checkbox" id="rememberme446">
                                    <label for="rememberme446">Remember me</label>
                                </div>
                                <div class="forgot446">
                                    <a href="#forgotform">Forgot your password?</a>
                                </div>
                            </div>
                            <center>
                            <div class="buttonformlogin446">
                                <button type="submit" class="loginformsubmit446">Login</button>
                            </div></center>
                        </form>
                    </div>
                    <p><center>Don't have an account? <a href="#register">Register Here</a></center></p>
                </div>
                <div class="loginformkanan446">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <?php
        session_start();
        
        class LoginHandler446 {
            private $users;
            private $passwords;
        
            public function __construct() {
                // Dummy data, replace with actual NIMs and passwords
                $this->users = [
                    "2213010446" => ["name" => "Wisnu Rasyidin Azhari", "image" => "assets/img/2213010446.png", "page" => "aclagi446.php"],
                    "2213010460" => ["name" => "Galang Daniar Setya Putra", "image" => "assets/img/2213010460.png", "page" => "cekloloslagi460.php"]
                ];
                $this->passwords = ["2213010446", "2213010460"];
            }
        
            public function proses_login446($username, $password) {
                if (isset($this->users[$username]) && in_array($password, $this->passwords)) {
                    $_SESSION['name'] = $this->users[$username]['name'];
                    $_SESSION['nim'] = $username;
                    $_SESSION['image'] = $this->users[$username]['image'];
                    header("Location: " . $this->users[$username]['page']);
                    exit();
                } else {
                    $_SESSION['error'] = "Username and password do not match";
                    echo 
                    
                    "<div style='color: white;text-align:center;background-color:red;'> {$_SESSION['error']} </div>";
                }
            }
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['formnim446'];
            $password = $_POST['formpass446'];
            $loginHandler446 = new LoginHandler446();
            $loginHandler446->proses_login446($username, $password);
        }
?>

    </div>
</body>
</html>
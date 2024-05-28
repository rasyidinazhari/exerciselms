<?php
session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login446.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Academy - your IT mentors!</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="preutskel1.css">
    <link rel="stylesheet" href="zeusacademy446.css">
    
</head>
<body>
    <header class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="navbarkel1 ">
            <div class="brandkel1">
                <a href="preutskel1.php"><h3>Zeus Academy</h3></a>
            </div>
            <!-- <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div> -->
            <nav class="navbar navbar-expand-lg navbar-primary navform446" >
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img style="width: 50px; " src="<?= $_SESSION['image']; ?>" alt="">
                                </button>
                                <ul class="dropdown-menu dropdown-menu">
                                    <li><center><?= $_SESSION['name'] ?></php></center></li>
                                    <li><center><?= $_SESSION['nim'] ?></php></center></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><hr></li>
                                    <li><a class="dropdown-item" href="logout446.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
            <!-- <div class="authkel1">
                
            </div> -->
        </div>
    </header>
    
    <div class="zeusacademy446">

        <div class="header">
            
            <div class="header-zeusacademy446">
                <div class="header-title446">
                    <h1>ZEUS ACADEMY PROGRAM</h1>
                </div>
                <div class="header-desc446">
                    <P>Thank you for your interest to Zeus Academy program. Please fill in your data and we will contact you for further info. Thank you.</P>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="form446">
                <form method="post">
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" id="name446" aria-describedby="emailHelp" placeholder="Your Full Name" name="name446" required>
                        <label for="name446" class="form-label">Full Name*</label>
                        <div id="nameHelp" class="form-text">Write your full name above.</div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control" id="email446" aria-describedby="emailHelp" placeholder="name@example.com" name="email446" required>
                        <label for="email446" class="form-label">Email address*</label>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <select name="phoneid446" id="phoneid446">
                                <option value="default" selected disabled>+62</option>
                                <option value="62">+62</option>
                                <option value="63">+63</option>
                                <option value="64">+64</option>
                                <option value="67">+67</option>
                            </select>
                        </span>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="phonenumber446" placeholder="phone" name="phonenumber446" required>
                            <label for="phonenumber446">Phone number</label>
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <select class="mb-3 form-select" aria-label="Default select example" placeholder="Choose here" name="status446" required>
                            <option selected></option>
                            <option value="Student">Student</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Employee">Employee</option>
                        </select>
                        <label for="phone446" class="form-label">Status</label>
                        <div id="nameHelp" class="form-text">Your current status.</div>
                    </div>
                    <div class="mb-3 form-floating">
                        <select class="mb-3 form-select" aria-label="Default select example" placeholder="learning path" name="learning446" required>
                            <option selected disabled></option>
                            <option value="AI Engineer">AI Engineering</option>
                            <option value="Mechine Learning">Mechine Learning</option>
                            <option value="Web Development">Web Development</option>
                        </select>
                        <label for="learning446" class="form-label">Learning Path</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cek1" required>
                        <label class="form-check-label" for="cek1">I consent to my information being collected, used and shared in connection with and for purposes related to this Zeus Academy Program, including with Zeus Academy's partners and vendor (Dicoding). I consent to being contacted by Zeus Academy and Zeus Academy partners and vendors in connection with and for the purposes of this Zeus Academy program. If at any time I would like to request for my information to be deleted, I can contact registration@Zeusacademy.ac.id, and I acknowledge this may impact my participation in this Traineeship Program. * I acknowledge that the submission of this form does not guarantee or confirm my participation in the Traineeship Program and that Zeus Academy reserves the right to modify, suspend, discontinue or cancel the Zeus Academy Program (or any part thereof) at any time without notice or liability to me.</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cek2" required>
                        <label class="form-check-label" for="cek2"> I accept Zeus Academy's Terms and Conditions and acknowledge that my information will be used in accordance with Zeus Academy's Privacy Policy.</label>
                    </div>
                    <button type="submit" class="btn btn-primary " id="submitregprogram446" name="submitregprogram446">Submit</button>
                    
                    <br>
                    <br>
                    
                </form>
            </div>
        </div>
        
    </div>

    <div class="statusdaftar446">
    <?php 

        class acProgram446 {
            protected $name446,
                      $email446,
                      $phone446,
                      $status446,
                      $learning446,
                      $arrayname446 = ['Name', 'Wisnu', 'Galang', 'Azhari'],
                      $arrayemail446 = ['Email', 'wisnu@gmail.com', 'galang@gmail.com', 'azhari@gmail.com'],
                      $arrayphone446 = ['Phone','62858','62871','62851'],
                      $arraystatus446 = ['Status','Employee','Students', 'Teachers'],
                      $arraylearning446 = ['Learning Path','Mechine Learning','AI Engineering','Web Development'];

            public function __construct($name446, $email446, $phone446, $status446, $learning446){
                $this->name446 = $name446;
                $this->email446 = $email446;
                $this->phone446 = $phone446;
                $this->status446 = $status446;
                $this->learning446 = $learning446;
            }
        }

        class statusDaftar446 extends acProgram446 {

            public function statusTerdaftar446(){
                $rows = '';
                foreach ($this->arrayname446 as $index => $name) {
                    if ($index === 0) continue; // Skip headers
                    $rows .= "
                    <tr>
                        <td><center>{$name}</center></td>
                        <td><center>{$this->arrayemail446[$index]}</center></td>
                        <td><center>{$this->arrayphone446[$index]}</center></td>
                        <td><center>{$this->arraystatus446[$index]}</center></td>
                        <td><center>{$this->arraylearning446[$index]}</center></td>
                    </tr>
                    ";
                }
                return "
                <div style='margin: 50px;'>
                <center>
                <table class='table table-striped'>
                    <tr>
                        <td><center>Name</center></td>
                        <td><center>Email</center></td>
                        <td><center>Phone</center></td>
                        <td><center>Status</center></td>
                        <td><center>Learning Path</center></td>
                    </tr>
                    {$rows}
                    <tr>
                        <td colspan='5'><center>User {$_POST['email446']}, sorry your email is already registered for this program, try another email!</center></td>
                    </tr>
                </table>
                </center>
                </div>
                ";
            }

            public function statusTidakTerdaftar446(){
                // var_dump($this->arrayemail446);
                // echo "<br>";
                array_push($this->arrayname446, $this->name446);
                array_push($this->arrayemail446, $this->email446);
                array_push($this->arrayphone446, $this->phone446);
                array_push($this->arraystatus446, $this->status446);
                array_push($this->arraylearning446, $this->learning446);
                // var_dump($this->arrayemail446);
                $rows = '';
                foreach ($this->arrayname446 as $index => $name) {
                    if ($index === 0) continue; // Skip headers
                    $rows .= "
                    <tr>
                        <td><center>{$name}</center></td>
                        <td><center>{$this->arrayemail446[$index]}</center></td>
                        <td><center>{$this->arrayphone446[$index]}</center></td>
                        <td><center>{$this->arraystatus446[$index]}</center></td>
                        <td><center>{$this->arraylearning446[$index]}</center></td>
                    </tr>
                    ";
                }

                return "
                <div style='margin: 50px;'>
                <center>
                <table class='table table-striped'>
                    <tr>
                        <td><center>Name</center></td>
                        <td><center>Email</center></td>
                        <td><center>Phone</center></td>
                        <td><center>Status</center></td>
                        <td><center>Learning Path</center></td>
                    </tr>
                    {$rows}
                    <tr>
                        <td colspan='5'><center>User {$_POST['email446']}, congratulations you have successfully registered for this program! Check your email regularly for more information!</center></td>
                    </tr>
                </table>
                </center></div>
                ";
            }

            public function cekStatusDaftar446(){
                if (in_array($this->email446, $this->arrayemail446)){
                    return $this->statusTerdaftar446();
                } else {
                    return $this->statusTidakTerdaftar446();
                }
            }
        }

        if($_POST){
            $daftarProgram446 = new statusDaftar446 ($_POST['name446'], $_POST['email446'], $_POST['phonenumber446'], $_POST['status446'], $_POST['learning446']);
            echo $statusDaftar446 = $daftarProgram446->cekStatusDaftar446();
        }
    ?>
    </div>

    <footer>
        <p class="text-center fs-8">Copyright &copy;ZEUSCORP All Right Reserved</p>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="preutskel1.js"></script>
</body>
</html>

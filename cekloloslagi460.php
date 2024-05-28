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
    
    <div class="pengumumanlolos460">
    <center>

        <div class="kepalaform460">
            <h1>Pengumuman Lolos Program Zeus Academy</h1>
            <p>cek apakah anda lolos Program Zeus Academy Batch 1</p>
        </div>
        <div class="formpengumuman460">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nameform460" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nameform460" aria-describedby="nameHelp" name="nameform460" required>
                    <div id="nameHelp" class="form-text">Enter your full name.</div>
                </div>
                <div class="mb-3">
                    <label for="emailform460" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailform460" name="emailform460" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Enter your email correctly.</div>
                </div>
                <div class="mb-3">
                    <label for="phoneform460" class="form-label">Phone/Whatsapp</label>
                    <input type="number" class="form-control" id="phoneform460" name="phoneform460" aria-describedby="phoneHelp" required>
                    <div id="phoneHelp" class="form-text">Fill formats : 6232494291293. if any wrong while fill the form and did'nt receive the announcement, it is'nt Zeus Academy Team faults.</div>
                </div>
                <div class="mb-3">
                    <label for="pathform460" class="form-label">Learning Path</label>
                    <select class="mb-3 form-select" aria-label="Default select example" placeholder="learning path" name="pathform460" required>
                        <option selected disabled></option>
                        <option value="AI Engineering">AI Engineering</option>
                        <option value="Mechine Learning">Mechine Learning</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Bootcamp ID" class="form-label">Bootcamp ID</label>
                    <input type="text" class="form-control" id="bootcampid460" name="bootcampid460" aria-describedby="bootcampHelp" required>
                    <div id="bootcampHelp" class="form-text">Insert your Bootcamp ID ex: ZAP999 .</div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="submitform460" id="submitform460">Cek Hasil</button>
                </div>
            </form>
        </div>
        <div class="tabelpengumuman460">
        <?php 
        
            class ceklolos460 {
                protected $name460;
                protected $email460;
                protected $phone460;
                protected $path460;
                protected $bootcampid460;
                protected $arrayname460 = array('Galang','Daniar','Setya');
                protected $arrayemail460 = array('galangd@gmail.com','daniars@gmail.com','setyap@gmail.com'); 
                protected $arrayphone460 = array(0211212,2133123,8129183);
                protected $arraypath460 = array('Learning Path','Mechine Learning','AI Engineering','Web Development');
                protected $arraybcid460 = array('ZAP001','ZAP002','ZAP003');

                public function __construct($name460,$email460,$phone460,$path460,$bootcampid460)
                {
                    $this->name460 = $name460;
                    $this->email460 = $email460;
                    $this->phone460 = $phone460;
                    $this->path460 = $path460;
                    $this->bootcampid460 = $bootcampid460;
                }

                protected function get_tidaklolos460()
                {
                    array_push($this->arrayname460, $this->name460);
                    array_push($this->arrayemail460, $this->email460);
                    array_push($this->arrayphone460, $this->phone460);
                    array_push($this->arraypath460, $this->path460);
                    array_push($this->arraybcid460, $this->bootcampid460);
                    echo
                    "<table class='table table-success table-striped'>
                    <tr>
                        <td>Bootcamp ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</>
                        <td>Learning Path</td>
                        <td>Status</td>
                    </tr>
                    <tr>
                        <td>". $this->arraybcid460[0]; echo "</td>
                        <td>". $this->arrayname460[0]; echo "</td>
                        <td>". $this->arrayemail460[0]; echo "</td>
                        <td>". $this->arrayphone460[0]; echo "</td>
                        <td>". $this->arraypath460[0]; echo"</td>
                        <td> Lolos</td>
                    </tr>
                    <tr>
                        <td>". $this->arraybcid460[1]; echo "</td>
                        <td>". $this->arrayname460[1]; echo "</td>
                        <td>". $this->arrayemail460[1]; echo "</td>
                        <td>". $this->arrayphone460[1]; echo "</td>
                        <td>". $this->arraypath460[1]; echo"</td>
                        <td> Lolos</td>
                    </tr>
                    <tr>
                        <td>". $this->arraybcid460[2]; echo "</td>
                        <td>". $this->arrayname460[2]; echo "</td>
                        <td>". $this->arrayemail460[2]; echo "</td>
                        <td>". $this->arrayphone460[2]; echo "</td>
                        <td>". $this->arraypath460[2]; echo"</td>
                        <td> Lolos</td>
                    </tr>
                    <tr>
                        <td>". $this->arraybcid460[3]; echo "</td>
                        <td>". $this->arrayname460[3]; echo "</td>
                        <td>". $this->arrayemail460[3]; echo "</td>
                        <td>". $this->arrayphone460[3]; echo "</td>
                        <td>". $this->arraypath460[3]; echo"</td>
                        <td> Belum Lolos</td>
                    </tr>

                    </table>";

                }

            }
            class alertLolos460 extends ceklolos460
            {
                public function ambil_dataReg460()
                {
                    $bootcampidreg = array("ZAP001","ZAP002","ZAP003");
                    if (in_array($this->bootcampid460,$bootcampidreg)){
                        echo 
                        "
                        <table class='table table-success table-striped'>
                            <tr>
                                <td>Bootcamp ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Learning Path</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td>". $this->arraybcid460[0]; echo"</td>
                                <td>". $this->arrayname460[0]; echo"</td>
                                <td>". $this->arrayemail460[0]; echo"</td>
                                <td>". $this->arrayphone460[0]; echo"</td>
                                <td>". $this->arraypath460[0]; echo"</td>
                                <td>Lolos</td>
                            </tr>
                            <tr>
                                <td>". $this->arraybcid460[1]; echo"</td>
                                <td>". $this->arrayname460[1]; echo"</td>
                                <td>". $this->arrayemail460[1]; echo"</td>
                                <td>". $this->arrayphone460[1]; echo"</td>
                                <td>". $this->arraypath460[1]; echo"</td>
                                <td>Lolos</td>
                            </tr>
                            <tr>
                                <td>". $this->arraybcid460[2]; echo"</td>
                                <td>". $this->arrayname460[2]; echo"</td>
                                <td>". $this->arrayemail460[2]; echo"</td>
                                <td>". $this->arrayphone460[2]; echo"</td>
                                <td>". $this->arraypath460[2]; echo"</td>
                                <td>Lolos</td>
                            </tr>
                            <tr>
                                <td colspan='6'>selamat id pengguna {$_POST['bootcampid460']}, anda lolos</td>
                            </tr>
                            
                        </table>
                        "
                        ;

                    } else {
                        return $this->get_tidaklolos460();
                    }
                }
            }
            if($_POST){
                $akhirlolos460 = new alertLolos460($_POST['nameform460'],$_POST['emailform460'],$_POST['phoneform460'],$_POST['pathform460'],$_POST['bootcampid460']);
                echo $akhirlolos460->ambil_dataReg460();
            }
        
        ?>





                <!-- <table class="table table-success table-striped">
                    <tr>
                        <td>
                            <p>Bootcamp ID</p>
                        </td>
                        <td>
                            <p>Name</p>
                        </td>
                        <td>
                            <p>Email</p>
                        </td>
                        <td>
                            <p>Learning Path</p>
                        </td>
                        <td>
                            <p>Status</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>ZAP001</p>
                        </td>
                        <td>
                            <p>Wisnu</p>
                        </td>
                        <td>
                            <p>wisnu@gmail.com</p>
                        </td>
                        <td>
                            <p>Mechine Learning</p>
                        </td>
                        <td>
                            <p>Lolos</p>
                        </td>
                    </tr>
                </table>
            </div>
    </center> -->
    </div>

    <div class="statusdaftar446">
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
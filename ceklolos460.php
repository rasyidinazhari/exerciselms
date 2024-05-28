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
            <div class="authkel1">
                <a href="#">
                    <div class="loginkel1 authuserkel1"  id="loginkel1">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></p>
                    </div>
                </a>
                <!-- <a href="#">
                    <div class="loginkel1"  id="loginkel1">
                        <p>Login</p>
                    </div>
                </a> -->
                <!-- <a href="#">
                    <div class="signupkel1"  id="signupkel1">
                        <p>Sign Up</p>
                    </div>
                </a> -->
            </div>
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

                public function __construct()
                {
                    $this->name460 = $_POST['nameform460'];
                    $this->email460 = $_POST['emailform460'];
                    $this->phone460 = $_POST['phoneform460'];
                    $this->path460 = $_POST['pathform460'];
                    $this->bootcampid460 = $_POST['bootcampid460'];
                }

                protected function get_lolos()
                {
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
                        <td>". $this->bootcampid460; echo "</td>
                        <td>". $this->name460; echo "</td>
                        <td>". $this->email460; echo "</td>
                        <td>". $this->phone460; echo "</td>
                        <td>". $this->path460; echo"</td>
                        <td> Belum Lolos</td>
                    </tr>

                    </table>";

                }
            }
            class alertLolos extends ceklolos460
            {
                public function ambil_dataReg()
                {
                    $bootcampidreg = array("ZAP001","ZAP002","ZAP003");
                    if (in_array($this->bootcampid460,$bootcampidreg)){
                        echo 
                        "
                        <table class='table table-success table-striped'>
                            <tr>
                                <td>Bootcamp ID<td>
                                <td>Name<td>
                                <td>Email<td>
                                <td>Phone</td>
                                <td>Learning Path<td>
                                <td>Status<td>
                            </tr>
                            <tr>
                                <td>". $this->bootcampid460; echo"<td>
                                <td>". $this->name460; echo"<td>
                                <td>". $this->email460; echo"<td>
                                <td>". $this->phone460; echo"<td>
                                <td>". $this->path460; echo"<td>
                                <td>Lolos</td>
                            </tr>
                        </table>
                        "
                        ;

                    } else {
                        return $this->get_lolos();
                    }
                }
            }
            if($_POST){
                $akhirlolos = new alertLolos;
                echo $akhirlolos->ambil_dataReg();
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
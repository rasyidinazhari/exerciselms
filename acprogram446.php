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
                <a href="login446.html">
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
            <!-- <form action="">
                <label for="name446">Full Name</label><br>
                <input type="text" name="name446" id="name446"  required><br>
                <label for="email446">Email</label><br>
                <input type="email" name="email446" id="email446"  required><br>
                <label for="status446">Current Status</label><br>
                <input type="text" name="status446" id="status446"  required><br>
                <label for="email446">Email</label><br>
                <input type="number" name="email446" id="email446"  required><br>
                <label for="email446">Email</label><br>
                <input type="email" name="email446" id="email446"  required><br>
            </form> -->
            <div class="form446">
                <form method="post" >
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
                    <!-- <div class="mb-3">
                        <label for="phone446" class="form-label">Active Phone Number</label>
                        <input type="number" class="form-control" id="phone446">
                        <div id="numberHelp" class="form-text">Active phone/Whatsapp Number.</div>
                    </div> -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <select name="phoneid446" id="phoneid446" >
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

        class regProgram {
            protected $name446;
            protected $email446;
            protected $phone446;
            protected $status446;
            protected $learning446;

            public function __construct(){
                $this->name446 = $_POST['name446'];
                $this->email446 = $_POST['email446'];
                $this->phone446 = $_POST['phonenumber446'];
                $this->status446 = $_POST['status446'];
                $this->learning446 = $_POST['learning446'];
            }
            
            protected function get_reg(){
                echo
                    "<table class='table table-success table-striped'>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Status</td>
                        <td>Learning Path</td>
                    </tr>
                    <tr>
                        <td> ". $this->name446; echo "</td>
                        <td>". $this->email446; echo "</td>
                        <td>". $this->phone446; echo"</td>
                        <td>". $this->status446; echo"</td>
                        <td>". $this->learning446; echo"</td>
                    </tr>
                    <tr style='background-color: green;'>
                        <td colspan='5' style='color: green;'> <center>Selamat anda telah bergabung Program Zeus Academy berikut ID Bootcamp anda : ZAP003. informasi selengkapnya cek email anda atau klik <a href='ceklolos460.php'>disini</a>!  </center></td>
                    </tr>

                    </table>";
            }
        }
        
        class resultReg extends regProgram {
            public function cek_regProg(){
                $emailReg = [
                    "wisnu@gmail.com",
                    "rasyidin@gmail.com",
                    "azhari@gmail.com"
                ];
                
                if (in_array($this->email446,$emailReg)) { 
                    
                    echo "<div class='tablehasilreg446'><center><table border='3' cellpadding='2' class='table table-bordered tablereg446'>
                        <tr style='background-color: grey;'>
                            <td class='tdtablereg446'>No</td>
                            <td class='tdtablereg446'>Name</td>
                            <td class='tdtablereg446'>Email</td>
                            <td class='tdtablereg446'>Phone</td>
                            <td class='tdtablereg446'>Status</td>
                            <td class='tdtablereg446'>Learning Path</td>
                            <td class='tdtablereg446'>Bootcamp ID</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>".$this->name446; 
                        echo"
                            </td> 
                            <td>" .$this->email446;
                        echo"
                            </td>
                            <td>" .$this->phone446;
                        echo"
                            </td>
                            <td>" .$this->status446;
                        echo"
                            </td>
                            <td>" .$this->learning446;
                        echo"
                            </td>
                            <td>ZAP001</td>
                        </tr>
                        <tr>
                            <td colspan='7' style='background-color:red;'><center><p style='color:white;' >Maaf, email anda telah terdaftar pada program ini. atau coba dengan email yang lain.</p></center></td>
                        </tr>
                    </table></center>";
                }
                    else {
                        return $this->get_reg();
                    }
                }

            }
            if ($_POST){
                $fix_reg = new resultReg();
                
                echo $fix_reg->cek_regProg();
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
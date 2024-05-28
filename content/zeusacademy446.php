<html>
    <!-- <link rel="stylesheet" href="zeusacademy446.css"> -->
    <div class="zeusacademy446">

        <div class="header">
            
            <div class="header-zeusacademy446">
                <div class="header-title446">
                    <h1>ZEUS ACADEMY</h1>
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
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            <option value="employee">Employee</option>
                        </select>
                        <label for="phone446" class="form-label">Status</label>
                        <div id="nameHelp" class="form-text">Your current status.</div>
                    </div>
                    <div class="mb-3 form-floating">
                        <select class="mb-3 form-select" aria-label="Default select example" placeholder="learning path" name="learning446" required>
                            <option selected disabled></option>
                            <option value="ai">AI Engineering</option>
                            <option value="ml">Mechine Learning</option>
                            <option value="webdev">Web Development</option>
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
                $this -> name446 = $_POST['name446'];
                $this -> email446 = $_POST['email446'];
                $this -> phone446 = $_POST['phonenumber446'];
                $this -> status446 = $_POST['status446'];
                $this -> learning446 = $_POST['learning446'];
            }
            
            protected function get_reg(){
                echo
                "Nama : ".
                $this -> name446 . "<br>" .
                "Alamat : ".
                $this -> email446 . "<br>" .
                "Phone : ".
                $this -> phone446 . "<br>" .
                "Status : ".
                $this -> status446 . "<br>" .
                "Learning Path : ".
                $this -> learning446;
            }
        }
        
        class resultReg extends regProgram {
            public function cek_regProg(){
                $emailReg = [
                    "a" => "wisnu@gmail.com",
                    "b" => "rasyidin@gmail.com",
                    "c" => "azhari@gmail.com"
                ];
                
                if (in_array($this->email446,$emailReg)) { 
                    
                    echo "<table border='1' cellspacing='0' >
                    <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                            <td>Status</td>
                            <td>Learning Path</td>
                            </tr>
                        <tr>
                            <td colspan='5'><center>Maaf, email anda telah terdaftar pada program ini. atau coba dengan email yang lain.</center></td>
                            </tr>
                            </table>";
                }
                    else {
                        return $this -> get_reg();
                    }
                }

            }
            if ($_POST){
                $fix_reg = new resultReg;
                
                echo $fix_reg -> cek_regProg();
            }
            
            
            ?>
</div>



</html>
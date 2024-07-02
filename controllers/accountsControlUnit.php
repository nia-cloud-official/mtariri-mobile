<?php 

class UserModel { 
    private $user_email;
    private $user_status;

    private $modal;

    private $url;

    public function __construct() { 
     //
    }
    public function redirect($url) {
        
    }
    public function getUserStatus($email) {
        $this->user_email = $email;
        // Use prepared statements to prevent SQL injection
        $conn = new mysqli('localhost', 'milto', 'lola', 'mtariri');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT user_policy FROM `users` WHERE email = ?");
        $stmt->bind_param("s", $email); // 's' specifies the variable type => 'string'

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $this->user_status = $row["user_policy"];
                echo $this->user_status;
            }
        } else {
            $this->user_status = "Undefined";
            $context =  (
                "
                <iframe src='./form.html' class='frame'></iframe>
                ");
                echo $context; 
                if(isset($_POST['firstName'])) { 
                     echo "candy cane";
                     $conn = mysqli_connect('localhost','milto','lola','mtariri');
                     $policy_user_email = $_POST['email'];
                     $query = "SELECT * FROM `policies` WHERE `policy_user_email` = '$policy_user_email'";
                     $result = mysqli_query($conn, $query);
                            if(mysqli_affected_rows($conn) > 0) {
                                $this->url = "./../panel/index.php";
                                header("Location: " . $this->url);
                                $_SESSION['auth'] = true;
                            }else{
                                $policy_id = strval(random_int(100,10000));
                                $policy_user_firstname = $_POST['firstName'];
                                $policy_user_lastname = $_POST['lastName'];
                                $policy_user_dob = $_POST['dob'];
                                $policy_user_gender = $_POST['gender'];
                                $policy_user_address = $_POST['address'];
                                $policy_user_city = $_POST['city'];
                                $policy_user_state = $_POST['state'];
                                $policy_user_phone = $_POST['phone'];
                                $policy_user_email = $_POST['email'];
                                $policy_user_beneficiary_name = $_POST['beneficiaryName'];
                                $policy_user_beneficiary_relationship = $_POST['relationship'];
                                $policy_user_beneficiary_phone = $_POST['beneficiaryPhone'];
                                $policy_user_beneficiary_email = $_POST['beneficiaryEmail'];
                                $policy_user_cover_amount = $_POST['coverAmount'];
                                $policy_user_payment_frequency = $_POST['paymentFrequency'];
                                $policy_user_start_date = $_POST['startDate'];
                                echo "Nothing found" . var_dump($result);
                                $query2 = "INSERT INTO `policies` (`id`, `policy_id`, `policy_user_age`, `policy_user_firstname`, `policy_user_lastname`, `policy_user_dob`, `policy_user_gender`, `policy_user_address`, `policy_user_city`, `policy_user_state`, `policy_user_phone`, `policy_user_email`, `policy_user_beneficiary_name`, `policy_beneficiary_relationship`, `policy_user_beneficiary_phone`, `policy_user_beneficiary_email`, `policy_user_cover_amount`, `policy_user_payment_frequency`, `policy_user_start_date`) VALUES (NULL, '$policy_id', '0' , '$policy_user_firstname', '$policy_user_lastname', '$policy_user_dob', '$policy_user_gender', '$policy_user_address', '$policy_user_city', '$policy_user_state', '$policy_user_phone', '$policy_user_email', '$policy_user_beneficiary_name', '$policy_user_beneficiary_relationship', '$policy_user_beneficiary_phone', '$policy_user_beneficiary_email', '$policy_user_cover_amount', '$policy_user_payment_frequency', '$policy_user_start_date')";
                                mysqli_query($conn, $query2);
                                       if(mysqli_error_list($conn)){
                                         echo "Successfully Completed";
                                       }else { 
                                        echo "An error occurred while processing the request";
                                       }
                            }
                }else {
                    # do nothing        
                }
        }

        $stmt->close();
        $conn->close();
    }
}
$app = new UserModel();
$app->getUserStatus("james@gmail.com");

?>
<!-- tailwind cdn -->

<script src="https://cdn.tailwindcss.com"></script>

<style>
    .frame { 
        height: 95% !important;
        width: 95% !important;
        justify-content: center !important;
        border:none;
    }
</style>
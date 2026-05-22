<?php
require_once '../app/core/Database.php';

use App\Core\Database;

class Admin extends Database
{
    protected $table = 'admin';

    public function getAdmin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = trim($_POST["name"]);
            $password = $_POST["password"];

            $stmt = $this->prepare("SELECT * FROM admin WHERE name = ?");
            $stmt->bind_param("s", $name);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {

                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {

                    session_regenerate_id(true);

                    $_SESSION['name'] = $user['name'];

                    header("Location: /home");
                    exit();

                } else {
                    $error = "Password salah!";
                }
            } else {
                $error = "Email tidak ditemukan!";
            }
        }
    }
}
?>
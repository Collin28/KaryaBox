<?php
namespace App\Models;

require_once '../app/core/Database.php';

use App\Core\Database;

class Achievement extends Database
{

    protected $table = 'achievements';

    public function getAll()
    {
        $query = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $result = mysqli_query($this->connection, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getAchivementBanners()
    {
        $query = "SELECT * FROM {$this->table} WHERE banner_image IS NOT NULL ORDER BY id DESC";
        $result = mysqli_query($this->connection, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function getAchivementsWithoutBanner()
    {
        $query = "SELECT achievements.*, 
                     unit_sekolah.nama_sekolah,
                     categories.category_name AS category_name
              FROM achievements

              LEFT JOIN unit_sekolah
              ON achievements.unit_sekolah_id = unit_sekolah.id

              LEFT JOIN categories
              ON achievements.category_id = categories.id WHERE achievements.banner_image IS NULL";

        $result = mysqli_query($this->connection, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getAchivement(int $id)
    {

        $query = "SELECT achievements.*, 
                     unit_sekolah.nama_sekolah,
                     categories.category_name AS category_name
              FROM achievements

              LEFT JOIN unit_sekolah
              ON achievements.unit_sekolah_id = unit_sekolah.id

              LEFT JOIN categories
              ON achievements.category_id = categories.id WHERE achievements.id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();


        $result = $stmt->get_result();
        $achievement = $result->fetch_assoc();


        return $achievement;

    }

    



}




?>
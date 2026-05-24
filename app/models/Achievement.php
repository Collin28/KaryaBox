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

    public function insert(array $data, array $file = [])
    {
        $name = htmlspecialchars($data['name']);
        $title = htmlspecialchars($data['title']);
        $desc = htmlspecialchars($data['description']);
        $cate = (int) $data['category_id'];
        $school = (int) $data['unit_sekolah_id'];

        $imageUrl = $this->uploadImage($file);

        if ($imageUrl === false) {
            return false;
        }

        $query = "INSERT INTO {$this->table} 
          (name, title, description, category_id, unit_sekolah_id, image_url) 
          VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('sssiis', $name, $title, $desc, $cate, $school, $imageUrl);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }

    private function uploadImage(array $file): string|null|false
    {
        if (empty($file) || $file['error'] === UPLOAD_ERR_NO_FILE) {
            return null;
        }

        if ($file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mimeType, $allowedTypes)) {
            return false;
        }

        if ($file['size'] > 2 * 1024 * 1024) {
            return false;
        }

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename = uniqid('achievement_', true) . '.' . strtolower($ext);

        $destPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' . $filename;

        if (move_uploaded_file($file['tmp_name'], $destPath)) {
            return 'assets/images/' . $filename;
        }
        return false;
    }

    public function delete(int $id): bool
    {
        $stmt = $this->connection->prepare("DELETE FROM achievements WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();

        return $stmt->errno === 0;
    }

    public function update(int $id, array $data, array $file = []): bool
    {
        $name   = htmlspecialchars($data['name']);
        $title  = htmlspecialchars($data['title']);
        $desc   = htmlspecialchars($data['description']);
        $cate   = (int) $data['category_id'];
        $school = (int) $data['unit_sekolah_id'];

        $imageUrl = $this->uploadImage($file);

        if ($imageUrl === false) {
            return false;
        }

        if ($imageUrl === null) {
            // No new image — keep existing
            $query = "UPDATE {$this->table} 
                      SET name=?, title=?, description=?, category_id=?, unit_sekolah_id=? 
                      WHERE id=?";
            $stmt = $this->connection->prepare($query);
            $stmt->bind_param('sssiii', $name, $title, $desc, $cate, $school, $id);
        } else {
            // New image uploaded
            $query = "UPDATE {$this->table} 
                      SET name=?, title=?, description=?, category_id=?, unit_sekolah_id=?, image_url=? 
                      WHERE id=?";
            $stmt = $this->connection->prepare($query);
            $stmt->bind_param('sssiisi', $name, $title, $desc, $cate, $school, $imageUrl, $id);
        }

        $stmt->execute();
        return $stmt->affected_rows >= 0 && $stmt->errno === 0;
    }

}
?>
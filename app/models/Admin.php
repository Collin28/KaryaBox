<?php
namespace App\Models;

require_once '../app/core/Database.php';

use App\Core\Database;

class Admin extends Database
{
    protected $table = 'admin';

    public function getAdminByName(string $name): array|null
    {
        $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE name = ? LIMIT 1");
        $stmt->bind_param('s', $name);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc() ?: null;
    }
}
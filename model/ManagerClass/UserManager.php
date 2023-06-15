<?php
namespace model\ManagerClass;

use PDO;
use model\InterfaceClass\ManagerInterface;
use model\InterfaceClass\SecurityInterface;
use Exception;

use model\MappingClass\UserMapping;
class UserManager implements ManagerInterface, SecurityInterface
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $prepare = $this->db->prepare("SELECT * FROM user");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $user) {
                $user = new UserMapping($user);
                $users[] = $user;
            }
            return $users;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getOneById(int $id)
    {
        // TODO: Implement getOneById() method.
    }

    public function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
<?php

namespace model\InterfaceClass;

use PDO;
interface ManagerInterface
{
    public function __construct(PDO $db);

    public function getAll();

    public function getOneById(int $id);
}
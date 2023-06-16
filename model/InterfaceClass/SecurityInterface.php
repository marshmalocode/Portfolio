<?php

namespace model\InterfaceClass;

interface SecurityInterface
{
    public function hashPassword(string $password): string;

    public function verifyPassword(string $password, string $hash): bool;
}
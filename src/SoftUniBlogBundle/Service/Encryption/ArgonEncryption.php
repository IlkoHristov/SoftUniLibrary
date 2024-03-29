<?php


namespace SoftUniBlogBundle\Service\Encryption;


class ArgonEncryption implements EncryptionServiceInterface
{

    public function hash($password)
    {
        return password_hash($password,PASSWORD_ARGON2I);
    }

    public function verify($password, $hash)
    {
        return password_verify($password,$hash);
    }
}
<?php

class SocialMedia
{
    public $name;
}
// final class
class Facebook extends SocialMedia
{
    // final function
    public function login(string $username, string $password): bool
    {
        return true;
    }
}
class FakeFacebook extends Facebook
{
    public function login(string $username, string $password): bool
    {
        return false;
    }
}

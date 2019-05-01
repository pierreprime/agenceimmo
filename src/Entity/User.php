<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }

    /**
     * @return string|null
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function eraseCredentials()
    {
    }

    /**
     * User constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    /**
     *
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    /**
     * @return string[]
     */
    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    /**
     *
     */
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    /**
     * @return mixed
     */
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    /**
     * @param array $an_array
     * @return mixed
     */
    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
    }

    /**
     * @return mixed
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

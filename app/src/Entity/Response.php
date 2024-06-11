<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="response")
 **/
class Response
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string", length=40)
     **/
    protected string $name;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected string $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected string $phone;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected string $position;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected string $resume;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): void
    {
        $this->resume = $resume;
    }


}
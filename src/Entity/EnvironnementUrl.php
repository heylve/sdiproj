<?php

namespace App\Entity;

use App\Repository\EnvironnementUrlRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnvironnementUrlRepository::class)
 */
class EnvironnementUrl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $id_env;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEnv(): ?int
    {
        return $this->id_env;
    }

    public function setIdEnv(int $id_env): self
    {
        $this->id_env = $id_env;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

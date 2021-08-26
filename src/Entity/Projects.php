<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;
/**
 * @ORM\Entity(repositoryClass=ProjectsRepository::class)
 */
class Projects
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;



    /**
     * @ORM\Column(type="date")
     */
    private $starting_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ending_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $national;

    /**
     * @ORM\Column(type="text")
     */
    private $MOA;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug() :string
    {
             return  (new Slugify())->slugify($this->title);
        //echo $slugify->slugify('Hello World!'); // hello-world
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

   
    public function getStartingDate(): ?\DateTimeInterface
    {
        return $this->starting_date;
    }

    public function setStartingDate(\DateTimeInterface $starting_date): self
    {
        $this->starting_date = $starting_date;

        return $this;
    }

    public function getEndingDate(): ?\DateTimeInterface
    {
        return $this->ending_date;
    }

    public function setEndingDate(?\DateTimeInterface $ending_date): self
    {
        $this->ending_date = $ending_date;

        return $this;
    }

    public function getNational(): ?bool
    {
        return $this->national;
    }

    public function setNational(bool $national): self
    {
        $this->national = $national;

        return $this;
    }

    public function getMOA(): ?string
    {
        return $this->MOA;
    }

    public function setMOA(string $MOA): self
    {
        $this->MOA = $MOA;

        return $this;
    }
}

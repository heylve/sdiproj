<?php

namespace App\Entity;

use App\Repository\UrlsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UrlsRepository::class)
 */
class Urls
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
    private $type;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $url_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $project_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUrlName(): ?string
    {
        return $this->url_name;
    }

    public function setUrlName(?string $url_name): self
    {
        $this->url_name = $url_name;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->project_id;
    }

    public function setProjectId(int $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }
}

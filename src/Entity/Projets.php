<?php

namespace App\Entity;

use App\Repository\ProjetsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetsRepository::class)
 */
class Projets
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
     * @ORM\Column(type="string", length=255)
     */
    private $domain;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preview;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagetwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagethree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagefour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagefive;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

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

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    public function getImageone(): ?string
    {
        return $this->imageone;
    }

    public function setImageone(string $imageone): self
    {
        $this->imageone = $imageone;

        return $this;
    }

    public function getImagetwo(): ?string
    {
        return $this->imagetwo;
    }

    public function setImagetwo(string $imagetwo): self
    {
        $this->imagetwo = $imagetwo;

        return $this;
    }

    public function getImagethree(): ?string
    {
        return $this->imagethree;
    }

    public function setImagethree(string $imagethree): self
    {
        $this->imagethree = $imagethree;

        return $this;
    }

    public function getImagefour(): ?string
    {
        return $this->imagefour;
    }

    public function setImagefour(string $imagefour): self
    {
        $this->imagefour = $imagefour;

        return $this;
    }

    public function getImagefive(): ?string
    {
        return $this->imagefive;
    }

    public function setImagefive(string $imagefive): self
    {
        $this->imagefive = $imagefive;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

}

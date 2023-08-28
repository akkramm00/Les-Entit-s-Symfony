<?php

namespace App\Entity

use App\Repository\TaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
  class Task
  {
    #[ORM\id]
    #[ORM\GenerateValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column]
    private ?\DateTimeImmutable $creatAt = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?bool $isDone = null;

    public function getId(): ?int
    {
      return $this->id;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
      $this->creatAt = $creatAt;
      return $this;
    }

    public function setCreatAt(\DateTimeImmutable $creatAt): self
    {
      $this->creatAt = $creatAt;
      return $this;
    }

    public function getTitle(): ?string
    {
      return $this -> title;
    }

    public function setTitle(string $title): self
    {
      $this-> title = $title;
      return $this;
    }
    public function getContent(): ?string
    {
      return $this -> content
    }
    public function setContent(strin $content): self
    {
      $this-> content = $content;
      return $this;
    }

    public function getIsDone(): ,bool
    {
      return $this->isDone;
    }

    public function setIsDone(bool $isDone): self
    {
      $this->isDone = $isDone;
      return $this;
    }
  }

?>
<?php

// php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity
// php bin/console make:entity --regenerate App
// php bin/console doctrine:migrations:diff
// php bin/console doctrine:migrations:migrate

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chapter
 *
 * @ORM\Table(name="chapters")
 * @ORM\Entity(repositoryClass="App\Repository\ChapterRepository")
 */
class Chapter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank (message="All chapters must have a name")
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+/",
     *     message="Chapter names can only bear regular letters, with no numbers nor symbols")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primarch", type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+/",
     *     message="No known Primarch had a number on his name")
     */
    private $primarch;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter_master", type="string", length=255, nullable=false)
     * @Assert\NotBlank (message="A chapter must be led by a Chapter Master")
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+/",
     *     message="Chapter Masters only have regular letters on their names")
     */
    private $chapterMaster;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrimarch(): ?string
    {
        return $this->primarch;
    }

    public function setPrimarch(?string $primarch): self
    {
        $this->primarch = $primarch;

        return $this;
    }

    public function getChapterMaster(): ?string
    {
        return $this->chapterMaster;
    }

    public function setChapterMaster(string $chapterMaster): self
    {
        $this->chapterMaster = $chapterMaster;

        return $this;
    }
}

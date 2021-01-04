<?php

// php bin/console doctrine:mapping:import App\\Entity annotation --path=src/Entity
// php bin/console make:entity --regenerate App
// php bin/console doctrine:migrations:diff
// php bin/console doctrine:migrations:migrate

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table(name="chapters")
 * @ORM\Entity
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
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primarch", type="string", length=255, nullable=true)
     */
    private $primarch;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter_master", type="string", length=255, nullable=false)
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

<?php

declare(strict_types=1);

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tests\Mapping\Fixture\Yaml;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class MaterializedPathCategory
{
    /**
     * @var int
     */
    private $id;

    private ?string $title = null;

    private ?string $path = null;

    private ?int $level = null;

    /**
     * @var Collection<int, Category>
     */
    private $children;

    private ?\Gedmo\Tests\Mapping\Fixture\Yaml\MaterializedPathCategory $parent = null;

    private ?\DateTime $lockTime = null;

    public function __construct()
    {
        $this->children = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addChildren(Category $children): void
    {
        $this->children[] = $children;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function setParent(self $parent): void
    {
        $this->parent = $parent;
    }

    public function getParent(): self
    {
        return $this->parent;
    }

    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setLockTime(?\DateTime $lockTime): void
    {
        $this->lockTime = $lockTime;
    }

    public function getLockTime(): ?\DateTime
    {
        return $this->lockTime;
    }
}

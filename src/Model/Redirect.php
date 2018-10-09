<?php

declare(strict_types=1);

namespace Setono\SyliusRedirectPlugin\Model;

class Redirect implements RedirectInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $sourceHash;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var bool
     */
    private $permanent = true;

    /**
     * @var int
     */
    private $count = 0;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastAccessed;

    /**
     * {@inheritdoc}
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * {@inheritdoc}
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * {@inheritdoc}
     */
    public function getSourceHash(): ?string
    {
        return $this->sourceHash;
    }

    /**
     * {@inheritdoc}
     */
    public function setSourceHash(string $sourceHash): void
    {
        $this->sourceHash = $sourceHash;
    }

    /**
     * {@inheritdoc}
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * {@inheritdoc}
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * {@inheritdoc}
     */
    public function isPermanent(): bool
    {
        return $this->permanent;
    }

    /**
     * {@inheritdoc}
     */
    public function setPermanent(bool $permanent): void
    {
        $this->permanent = $permanent;
    }

    /**
     * {@inheritdoc}
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastAccessed(): ?\DateTimeInterface
    {
        return $this->lastAccessed;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastAccessed(\DateTimeInterface $lastAccessed): void
    {
        $this->lastAccessed = $lastAccessed;
    }
}
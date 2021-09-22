<?php

declare(strict_types=1);

namespace KejawenLab\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use KejawenLab\Application\Node\Model\NodeInterface;
use KejawenLab\Application\Repository\ServiceRepository;
use OpenApi\Annotations as OA;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 * @ORM\Table(name="app_services")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class Service
{
    const TYPE_FILE = 'file';
    const TYPE_ELASTICSEARCH = 'elasticsearch';
    const TYPE_DB = 'db';

    use BlameableEntity;
    use SoftDeleteableEntity;
    use TimestampableEntity;

    /**
     * @ORM\Id()
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     *
     * @OA\Property(type="string")
     */
    private ?UuidInterface $id;

    /**
     * @ORM\ManyToOne(targetEntity=Node::class, cascade={"persist"})
     *
     * @Groups({"read"})
     **/
    private ?NodeInterface $node;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Groups({"read"})
     */
    private ?string $identifier;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Groups({"read"})
     */
    private ?string $name;

    /**
     * @ORM\Column(type="string", length=17)
     *
     * @Groups({"read"})
     */
    private ?string $type;

    /**
     * @ORM\Column(type="smallint", length=4)
     *
     * @Groups({"read"})
     */
    private int $port;

    public function __construct()
    {
        $this->id = null;
        $this->identifier = null;
        $this->node = null;
        $this->name = null;
        $this->type = null;
        $this->port = 0;
    }

    public function getId(): string
    {
        return (string) $this->id;
    }

    public function getNode(): ?NodeInterface
    {
        return $this->node;
    }

    public function setNode(?NodeInterface $node): void
    {
        $this->node = $node;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        if (!in_array($type, [self::TYPE_DB, self::TYPE_ELASTICSEARCH, self::TYPE_FILE])) {
            throw new \InvalidArgumentException('Invalid type');
        }

        $this->type = $type;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function setPort(int $port): void
    {
        $this->port = $port;
    }
}
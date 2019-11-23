<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Essai
 *
 * @ORM\Table(name="essai")
 * @ORM\Entity
 */
class Essai
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
     * @ORM\Column(name="product", type="text", length=0, nullable=false)
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }


}

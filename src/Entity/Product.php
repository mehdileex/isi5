<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"product"}},
 *
 * )
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    public function __toString()
    {
        return $this->title;
    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"product"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product"})
     */
    private $title;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product"})
     */
    private $rating;

    /**
     * @ORM\Column(type="text")
     * @Groups({"product"})
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product"})
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"product"})
     */
    private $thumb;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product"})
     */
    private $color;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"product"})
     */
    private $qunatity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"product"})
     */
    private $likes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @Groups({"product"})
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="product" , cascade={"persist"})
     * @Groups({"product"})
     */
    private $images;


    /**
     * @var File
     *
     */
    private $files;

    /**
     * @return array
     *
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * @param array $files
     */
    public function setFiles(array $files): void
    {
        $this->files = $files;
    }

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

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

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getThumb(): ?string
    {
        return $this->thumb;
    }

    public function setThumb(?string $thumb): self
    {
        $this->thumb = $thumb;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getQunatity(): ?int
    {
        return $this->qunatity;
    }

    public function setQunatity(int $qunatity): self
    {
        $this->qunatity = $qunatity;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(?int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setProduct($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->contains($image)) {
            $this->images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getProduct() === $this) {
                $image->setProduct(null);
            }
        }

        return $this;
    }
}

<?php
namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text", length=120)
     */
    private $title;

    /**
     * @ORM\Column(type="text", length=25)
     */
    private $author;

    /**
     * @ORM\Column(type="text", length=15)
     */
    private $department;

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set the value of department
     * @return  self
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }
}

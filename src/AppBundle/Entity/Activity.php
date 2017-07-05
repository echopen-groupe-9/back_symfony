<?php

// src/AppBundle/Entity/Activity.php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An activity.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Activity
{
    /**
     * @var int The id of this activity.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string The title of this activity.
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string The description.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $description;

    /**
     * @var string The author.
     *
     * @ORM\Column
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $author;

    /**
     * @var \DateTimeInterface The publication date.
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotNull
     */
    private $publicationDate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param \DateTimeInterface $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    
    // ...
}
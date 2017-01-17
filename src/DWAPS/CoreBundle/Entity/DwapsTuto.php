<?php

namespace DWAPS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuto
 *
 * @ORM\Table(name="dwaps_tuto")
 * @ORM\Entity(repositoryClass="DWAPS\CoreBundle\Repository\DwapsTutoRepository")
 */
class DwapsTuto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     *
     * @ORM\ManyToMany(targetEntity="DWAPS\CoreBundle\Entity\DwapsCategory", cascade={"persist"})
     */
    private $category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     *
     * @ORM\OneToOne(targetEntity="DWAPS\CoreBundle\Entity\DwapsImage", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     *
     * @ORM\OneToMany(targetEntity="DWAPS\CoreBundle\Entity\DwapsTutoContent", mappedBy="tuto", cascade={"persist","remove"})
     */
    private $tutoContent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Tuto
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tuto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tuto
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsImage $image
     *
     * @return DwapsTuto
     */
    public function setImage(\DWAPS\CoreBundle\Entity\DwapsImage $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \DWAPS\CoreBundle\Entity\DwapsImage
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tutoContent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \Datetime();
    }

    /**
     * Add tutoContent
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsTutoContent $tutoContent
     *
     * @return DwapsTuto
     */
    public function addTutoContent(\DWAPS\CoreBundle\Entity\DwapsTutoContent $tutoContent)
    {
        $this->tutoContent[] = $tutoContent;

        $tutoContent->setTuto( $this );

        return $this;
    }

    /**
     * Remove tutoContent
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsTutoContent $tutoContent
     */
    public function removeTutoContent(\DWAPS\CoreBundle\Entity\DwapsTutoContent $tutoContent)
    {
        $this->tutoContent->removeElement($tutoContent);
        $tutoContent->setTuto( null );
    }

    /**
     * Get tutoContent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTutoContent()
    {
        return $this->tutoContent;
    }

    /**
     * Add category
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsCategory $category
     *
     * @return DwapsTuto
     */
    public function addCategory(\DWAPS\CoreBundle\Entity\DwapsCategory $category)
    {
        $this->category[] = $category;

        $category->addTuto( $this );

        return $this;
    }

    /**
     * Remove category
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsCategory $category
     */
    public function removeCategory(\DWAPS\CoreBundle\Entity\DwapsCategory $category)
    {
        $this->category->removeElement($category);

        $category->removeTuto( $this );
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory()
    {
        return $this->category;
    }
}

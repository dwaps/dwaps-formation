<?php

/*
    IMPORTANT :
    Ne jamais utilisé setNav() car la méthode ne tient compte que de la relation
    navChild possède nav mais pas que nav possède navChild
    --> utiliser uniquement les méthodes du nav parent !
*/

namespace DWAPS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwapsNavChild
 *
 * @ORM\Table(name="dwaps_nav_child")
 * @ORM\Entity(repositoryClass="DWAPS\CoreBundle\Repository\DwapsNavChildRepository")
 */
class DwapsNavChild
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     *
     * @ORM\ManyToOne(targetEntity="DWAPS\CoreBundle\Entity\DwapsNav", inversedBy="navChild")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nav;

    /**
     * @ORM\OneToOne(targetEntity="DWAPS\CoreBundle\Entity\DwapsImage")
     */
    private $image;


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
     * Set name
     *
     * @param string $name
     *
     * @return DwapsNavChild
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return DwapsNavChild
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set nav
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsNav $nav
     *
     * @return DwapsNavChild
     */
    public function setNav(\DWAPS\CoreBundle\Entity\DwapsNav $nav)
    {
        $this->nav = $nav;

        return $this;
    }

    /**
     * Get nav
     *
     * @return \DWAPS\CoreBundle\Entity\DwapsNav
     */
    public function getNav()
    {
        return $this->nav;
    }

    /**
     * Set image
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsImage $image
     *
     * @return DwapsNavChild
     */
    public function setImage(\DWAPS\CoreBundle\Entity\DwapsImage $image = null)
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
}

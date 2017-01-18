<?php

/*
    IMPORTANT :
    Comme nav est parent optionnel d'un navChild,
    si on affecte ou supprime un enfant à nav,
    il faut impérativement utilisé addNavChild() et removeNavChild() de nav uniquement
    car ces méthodes conservent la cohérence !
*/

namespace DWAPS\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwapsNav
 *
 * @ORM\Table(name="dwaps_nav")
 * @ORM\Entity(repositoryClass="DWAPS\ModelBundle\Repository\DwapsNavRepository")
 */
class DwapsNav
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
     * @ORM\Column(name="name", type="string", length=100)
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
     * @ORM\OneToMany(targetEntity="DWAPS\ModelBundle\Entity\DwapsNavChild", mappedBy="nav")
     */
    private $navChild;

    /**
     * @var string
     *
     */
    private $isActive;

    /**
     * Get id
     *
     * @return integer
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
     * @return DwapsNav
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
     * @return DwapsNav
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
     * Set active
     *
     * @param string
     *
     * @return DWAPS_nav
     */
    public function setActive( $yes )
    {
        $this->isActive = $yes;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Is active
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->navChild = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add navChild
     *
     * @param \DWAPS\ModelBundle\Entity\DwapsNavChild $navChild
     *
     * @return DwapsNav
     */
    public function addNavChild(\DWAPS\ModelBundle\Entity\DwapsNavChild $navChild)
    {
        $this->navChild[] = $navChild;

        $navChild->setNav($this); // Le nav enfant doit savoir qu'un parent lui a été affecté !

        return $this;
    }

    /**
     * Remove navChild
     *
     * @param \DWAPS\ModelBundle\Entity\DwapsNavChild $navChild
     */
    public function removeNavChild(\DWAPS\ModelBundle\Entity\DwapsNavChild $navChild)
    {
        $this->navChild->removeElement($navChild);
        $navChild->setNav(null); // Le nav enfant n'a plus de parent !
    }

    /**
     * Get navChild
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNavChild()
    {
        return $this->navChild;
    }
}

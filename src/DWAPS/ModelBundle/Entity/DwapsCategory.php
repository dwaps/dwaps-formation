<?php

namespace DWAPS\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwapsCategory
 *
 * @ORM\Table(name="dwaps_category")
 * @ORM\Entity(repositoryClass="DWAPS\ModelBundle\Repository\DwapsCategoryRepository")
 */
class DwapsCategory
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
     * @ORM\Column(name="route", type="string", length=255)
     */
    private $route;

    /**
     *
     *@ORM\ManyToMany(targetEntity="DWAPS\ModelBundle\Entity\DwapsTuto")
     */
    private $tuto;


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
     * @return DwapsCategory
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
     * Set route
     *
     * @param string $route
     *
     * @return DwapsCategory
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tuto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tuto
     *
     * @param \DWAPS\ModelBundle\Entity\DwapsTuto $tuto
     *
     * @return DwapsCategory
     */
    public function addTuto(\DWAPS\ModelBundle\Entity\DwapsTuto $tuto)
    {
        $this->tuto[] = $tuto;

        return $this;
    }

    /**
     * Remove tuto
     *
     * @param \DWAPS\ModelBundle\Entity\DwapsTuto $tuto
     */
    public function removeTuto(\DWAPS\ModelBundle\Entity\DwapsTuto $tuto)
    {
        $this->tuto->removeElement($tuto);
    }

    /**
     * Get tuto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTuto()
    {
        return $this->tuto;
    }
}

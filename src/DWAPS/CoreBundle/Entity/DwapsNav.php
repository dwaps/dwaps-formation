<?php

namespace DWAPS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwapsNav
 *
 * @ORM\Table(name="dwaps_nav")
 * @ORM\Entity(repositoryClass="DWAPS\CoreBundle\Repository\DWAPS_navRepository")
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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=255, nullable=true)
     */
    private $parent;

    /**
     * @var array
     *
     * @ORM\Column(name="children", type="array", nullable=true)
     */
    private $children;


    /**
     * @var string
     *
     */
    private $isActive;


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
     * Set jsonArray
     *
     * @param string $jsonArray
     *
     * @return DWAPS_nav
     */
    public function setJsonArray($jsonArray)
    {
        $this->jsonArray = $jsonArray;

        return $this;
    }

    /**
     * Get jsonArray
     *
     * @return string
     */
    public function getJsonArray()
    {
        return $this->jsonArray;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DWAPS_nav
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
     * @return DWAPS_nav
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
     * Set image
     *
     * @param string $image
     *
     * @return DWAPS_nav
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set parent
     *
     * @param string $parent
     *
     * @return DWAPS_nav
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set children
     *
     * @param array $children
     *
     * @return DWAPS_nav
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }


    /**
     * Add child
     *
     * @param DWAPS_nav $child
     *
     * @return DWAPS_nav
     */
    public function addChild( $child )
    {
        array_push( $this->children, $child );

        return $this;
    }

    /**
     * Get children
     *
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Has children
     *
     * @return boolean
     */
    public function hasChildren()
    {
        return count( $this->children ) > 0;
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
}


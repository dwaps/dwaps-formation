<?php

namespace DWAPS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwapsTutoContent
 *
 * @ORM\Table(name="dwaps_tuto_content")
 * @ORM\Entity(repositoryClass="DWAPS\CoreBundle\Repository\DwapsTutoContentRepository")
 */
class DwapsTutoContent
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
     * @ORM\Column(name="chapter", type="string", length=255)
     */
    private $chapter;

    /**
     * @var string
     *
     * @ORM\Column(name="paragraph", type="text")
     */
    private $paragraph;

    /**
     *
     * @ORM\ManyToOne(targetEntity="DWAPS\CoreBundle\Entity\DwapsTuto", inversedBy="tutoContent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tuto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notLast", type="boolean")
     * @ORM\JoinColumn(nullable=false)
     */
    private $notLast;

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
     * Set chapter
     *
     * @param string $chapter
     *
     * @return DwapsTutoContent
     */
    public function setChapter($chapter)
    {
        $this->chapter = $chapter;

        return $this;
    }

    /**
     * Get chapter
     *
     * @return string
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Set paragraph
     *
     * @param string $paragraph
     *
     * @return DwapsTutoContent
     */
    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;

        return $this;
    }

    /**
     * Get paragraph
     *
     * @return string
     */
    public function getParagraph()
    {
        return $this->paragraph;
    }

    /**
     * Set tuto
     *
     * @param \DWAPS\CoreBundle\Entity\DwapsTuto $tuto
     *
     * @return DwapsTutoContent
     */
    public function setTuto(\DWAPS\CoreBundle\Entity\DwapsTuto $tuto)
    {
        $this->tuto = $tuto;

        return $this;
    }

    /**
     * Get tuto
     *
     * @return \DWAPS\CoreBundle\Entity\DwapsTuto
     */
    public function getTuto()
    {
        return $this->tuto;
    }

    /**
     * Set notLast
     *
     * @param boolean $notLast
     *
     * @return DwapsTutoContent
     */
    public function setNotLast($notLast)
    {
        $this->notLast = $notLast;

        return $this;
    }

    /**
     * Get notLast
     *
     * @return boolean
     */
    public function getNotLast()
    {
        return $this->notLast;
    }
}

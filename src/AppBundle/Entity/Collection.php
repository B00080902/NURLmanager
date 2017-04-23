<?php


namespace AppBundle\Entity;

use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;

/**
 * Nurl
 *
 * @ORM\Table(name="collection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CollectionRepository")
 */
class Collection
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @var \AppBundle\Entity\User  $user
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="collection")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @var \AppBundle\Entity\Nurl  $nurl
     *
     * @ORM\OneToMany(targetEntity="Nurl", mappedBy="collection")
     * @ORM\JoinColumn(name="nurl_id", referencedColumnName="id")
     *
     */
    private $nurl;


    /**
     * @var string
     *
     * @ORM\Column(name="public", type="string", length=255)
     */
    private $public;


    /**
     * @var string
     *
     * @ORM\Column(name="shared", type="string", length=255)
     */
    private $shared;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nurl = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Collection
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
     * @return Collection
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
     * Set public
     *
     * @param string $public
     *
     * @return Collection
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set shared
     *
     * @param string $shared
     *
     * @return Collection
     */
    public function setShared($shared)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * Get shared
     *
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Collection
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add nurl
     *
     * @param \AppBundle\Entity\Nurl $nurl
     *
     * @return Collection
     */
    public function addNurl(\AppBundle\Entity\Nurl $nurl)
    {
        $this->nurl[] = $nurl;

        return $this;
    }

    /**
     * Remove nurl
     *
     * @param \AppBundle\Entity\Nurl $nurl
     */
    public function removeNurl(\AppBundle\Entity\Nurl $nurl)
    {
        $this->nurl->removeElement($nurl);
    }

    /**
     * Get nurl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNurl()
    {
        return $this->nurl;
    }
}

<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles;


    /**
     * @var \AppBundle\Entity\Collection  $collection
     *
     * @ORM\OneToMany(targetEntity="Collection", mappedBy="user")
     * @ORM\JoinColumn(name="collection_id", referencedColumnName="id")
     *
     */
    private $collection;

    /**
     * @var \AppBundle\Entity\Nurl  $nurl
     *
     * @ORM\OneToMany(targetEntity="Nurl", mappedBy="user")
     * @ORM\JoinColumn(name="nurl_id", referencedColumnName="id")
     *
     */
    private $nurl;


    /**
    * @ORM\OneToMany(targetEntity="Tag", mappedBy="user")
     */
    private $tag;



    /**
     * @var boolean
     *
     * @ORM\Column(name="voted", type="boolean")
     */
    private $voted;

    public function __construct()
    {
        $this->isActive = true;
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roles;
        // $this->salt = md5(uniqid(null, true));
    }



    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    // other methods, including security methods like getRoles()

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     * @return array (Role|string)[] The user roles
     */
    public function getRoles()
    {
        $roles = $this->roles;

        return array_unique($roles);
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this-> password;

    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this-> username;
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add collection
     *
     * @param \AppBundle\Entity\Collection $collection
     *
     * @return User
     */
    public function addCollection(\AppBundle\Entity\Collection $collection)
    {
        $this->collection[] = $collection;

        return $this;
    }

    /**
     * Remove collection
     *
     * @param \AppBundle\Entity\Collection $collection
     */
    public function removeCollection(\AppBundle\Entity\Collection $collection)
    {
        $this->collection->removeElement($collection);
    }

    /**
     * Get collection
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Add nurl
     *
     * @param \AppBundle\Entity\Nurl $nurl
     *
     * @return User
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




    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return User
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTag()
    {
        return $this->tag;
    }



    /**
     * Set voted
     *
     * @param boolean $voted
     *
     * @return User
     */
    public function setVoted($voted)
    {
        $this->voted = $voted;

        return $this;
    }

    /**
     * Get voted
     *
     * @return boolean
     */
    public function getVoted()
    {
        return $this->voted;
    }

    public function __toString()
    {
        return (string) $this->getRoles();
    }
}

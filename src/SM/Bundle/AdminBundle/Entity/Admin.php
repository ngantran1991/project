<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Compte
 *
 * @ORM\Table(name="admin", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_status", columns={"id_status"})})
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\AdminRepository")
 */
class Admin implements AdvancedUserInterface, \Serializable
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="date", nullable=true)
     */
    private $dateModification;

    /**
     * @var \AdminStatus
     *
     * @ORM\ManyToOne(targetEntity="AdminStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id")
     * })
     */
    private $idStatus;

    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="admin")
     *
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->idAdmin,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));

    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->idAdmin,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);

    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->idStatus;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        //return array('ROLE_USER');
        return $this->roles->toArray();

    }

    /**
     * Add roles
     *
     * @param \SM\Bundle\UserBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\SM\Bundle\AdminBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;

    }

    /**
     * Remove roles
     *
     * @param \SM\Bundle\AdminBundle\Entity\Role $roles
     */
    public function removeRole(\SM\Bundle\AdminBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);

    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function eraseCredentials()
    {
    }

    /**
     * Get 
     *
     * @return integer
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;

    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Compte
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;

    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;

    }
    
    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;

    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;

    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;

    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;

    }

    /**
     * Set address
     *
     * @param string $address
     * @return Compte
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;

    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;

    }

    /**
     * Set email
     *
     * @param string $email
     * @return Admin
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
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;

    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;

    }

    /**
     * Set password
     *
     * @param string $password
     * @return Compte
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;

    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;

    }

    /**
     * Set description
     *
     * @param string $description
     * @return Compte
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Admin
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;

    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;

    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Admin
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;

    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;

    }

    /**
     * Set idStatus
     *
     * @param \SM\Bundle\AdminBundle\Entity\AdminStatus $idStatus
     * @return Status
     */
    public function setIdStatus(\SM\Bundle\AdminBundle\Entity\AdminStatus $idStatus = null)
    {
        $this->idStatus = $idStatus;

        return $this;

    }

    /**
     * Get idStatus
     *
     * @return \SM\Bundle\AdminBundle\Entity\AdminStatus
     */
    public function getIdStatus()
    {
        return $this->idStatus;

    }
    
    public function getId()
    {
        return $this->getIdAdmin();
    }
}

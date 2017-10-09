<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SM\Bundle\AdminBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\RoleRepository")
 */
class Role implements RoleInterface
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(name="role", type="string", length=20, unique=true)
     */
    private $role;

    /**
     * @ORM\ManyToMany(targetEntity="Admin")
     * @ORM\JoinTable(name="admin_roles",
     *      joinColumns={@ORM\JoinColumn(name="id_role", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_admin", referencedColumnName="id")}
     *      )
     */
    private $admins;

    public function __construct()
    {
        $this->admins = new ArrayCollection();

    }

    /**
     * @see RoleInterface
     */
    public function getRole()
    {
        return $this->role;

    }

    // ... getters and setters for each property

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
     * @return Role
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
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;

    }

    /**
     * Add Admin
     *
     * @param SM\Bundle\AdminBundle\Entity\Admin $users
     * @return Role
     */
    /*public function addUser(SM\Bundle\AdminBundle\Entity\Admin $users)
    {
        $this->users[] = $users;

        return $this;

    }*/

    /**
     * Remove users
     *
     * @param SM\Bundle\AdminBundle\Entity\Admin $users
     */
    /*public function removeUser(SM\Bundle\AdminBundle\Entity\Admin $users)
    {
        $this->users->removeElement($users);

    }*/

    /**
     * Get Admin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdmin()
    {
        return $this->admin;

    }

}
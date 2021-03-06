<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hall
 *
 * @ORM\Table(name="hall")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HallRepository")
 */
class Hall
{

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $user;

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

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Video", mappedBy="hall")
     */
    private $videos;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return Hall
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
     * Set description
     *
     * @param string $description
     *
     * @return Hall
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
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Hall
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Hall
     */
    public function addVideo(\AppBundle\Entity\Video $video)
    {
        $this->videos[] = $video;

        return $this;
    }

    /**
     * Remove video
     *
     * @param \AppBundle\Entity\Video $video
     */
    public function removeVideo(\AppBundle\Entity\Video $video)
    {
        $this->videos->removeElement($video);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set nbrSubs
     *
     * @param integer $nbrSubs
     *
     * @return Hall
     */
    public function setNbrSubs($nbrSubs)
    {
        $this->nbrSubs = $nbrSubs;

        return $this;
    }

    /**
     * Get nbrSubs
     *
     * @return integer
     */
    public function getNbrSubs()
    {
        return $this->nbrSubs;
    }

    /**
     * Set nbSubs
     *
     * @param integer $nbSubs
     *
     * @return Hall
     */
    public function setNbSubs($nbSubs)
    {
        $this->nbSubs = $nbSubs;

        return $this;
    }

    /**
     * Get nbSubs
     *
     * @return integer
     */
    public function getNbSubs()
    {
        return $this->nbSubs;
    }

    /**
     * Add subscriber
     *
     * @param \UserBundle\Entity\User $subscriber
     *
     * @return Hall
     */
    public function addSubscriber(\UserBundle\Entity\User $subscriber)
    {
        $this->subscribers[] = $subscriber;

        return $this;
    }

    /**
     * Remove subscriber
     *
     * @param \UserBundle\Entity\User $subscriber
     */
    public function removeSubscriber(\UserBundle\Entity\User $subscriber)
    {
        $this->subscribers->removeElement($subscriber);
    }

    /**
     * Get subscribers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }
}

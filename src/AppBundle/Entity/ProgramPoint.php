<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgramPoint
 *
 * @ORM\Table(name="program_points")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgramPointRepository")
 */
class ProgramPoint
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
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=10000, nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmed", type="boolean")
     */
    private $confirmed;

    /**
     * @var bool
     *
     * @ORM\Column(name="canceled", type="boolean")
     */
    private $canceled;

    /**
     * @ORM\ManyToOne(targetEntity="Conference", inversedBy="programPoints")
     * @ORM\JoinColumn(name="conference_id", referencedColumnName="id")
     */
    private $conference;

    /**
     * @ORM\ManyToMany(targetEntity="user", inversedBy="speakerProgramPoints")
     * @ORM\JoinTable(name="programPoints_speakers")
     */
    private $speakers;

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
     * @return ProgramPoint
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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return ProgramPoint
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return ProgramPoint
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ProgramPoint
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
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     */
    public function setConfirmed(bool $confirmed)
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return mixed
     */
    public function getCanceled()
    {
        return $this->canceled;
    }

    /**
     * @param mixed $canceled
     */
    public function setCanceled($canceled)
    {
        $this->canceled = $canceled;
    }

    /**
     * @return mixed
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param mixed $conference
     */
    public function setConference($conference)
    {
        $this->conference = $conference;
    }

    /**
     * @return mixed
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * @param mixed $speakers
     */
    public function setSpeakers($speakers)
    {
        $this->speakers = $speakers;
    }
}


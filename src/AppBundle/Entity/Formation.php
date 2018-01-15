<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationsRepository")
 */
class Formation
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
     * @var int
     *
     * @ORM\Column(name="date_debut", type="integer")
     */
    private $DateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="date_fin", type="integer")
     */
    private $DateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string")
     */
    private $Intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $Description;


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
     * Set dateDebut
     *
     * @param integer $dateDebut
     *
     * @return Formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->DateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return int
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * Set dateFin
     *
     * @param integer $dateFin
     *
     * @return Formation
     */
    public function setDateFin($dateFin)
    {
        $this->DateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return int
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Formation
     */
    public function setIntitule($intitule)
    {
        $this->Intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->Intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Formation
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
}


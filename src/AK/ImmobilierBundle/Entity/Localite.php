<?php

namespace AK\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity(repositoryClass="AK\ImmobilierBundle\Repository\LocaliteRepository")
 */
class Localite
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
     * @ORM\Column(name="nomlocalite", type="string", length=100)
     */
    private $nomlocalite;
       /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Bien", mappedBy = "localite")
   */

  private $biens;


  // …


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
     * Set nomlocalite
     *
     * @param string $nomlocalite
     *
     * @return Localite
     */
    public function setNomlocalite($nomlocalite)
    {
        $this->nomlocalite = $nomlocalite;

        return $this;
    }

    /**
     * Get nomlocalite
     *
     * @return string
     */
    public function getNomlocalite()
    {
        return $this->nomlocalite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->biens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bien
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Localite
     */
    public function addBien(\AK\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->biens[] = $bien;

        return $this;
    }

    /**
     * Remove bien
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $bien
     */
    public function removeBien(\AK\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->biens->removeElement($bien);
    }

    /**
     * Get biens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBiens()
    {
        return $this->biens;
    }
}

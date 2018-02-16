<?php

namespace AK\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AK\ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date")
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="string")
     */
    private $etat;
      /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Client")

   * @ORM\JoinColumn(name = "idclient", referencedColumnName = "id")

   */

  private $client;
      /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(name = "idbien", referencedColumnName = "id")

   */

  private $bien;


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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Reservation
     */
    public function setBien(\AK\ImmobilierBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \AK\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set client
     *
     * @param \AK\ImmobilierBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\AK\ImmobilierBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AK\ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}

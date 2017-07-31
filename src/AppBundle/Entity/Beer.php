<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 04/07/2017
 * Time: 13:20
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeerRepository")
 * @ORM\Table(name="beer")
 */
class Beer
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int $number
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var string $brewery
     *
     * @ORM\Column(name="brewery", type="string", length=255)
     */
    private $brewery;
    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;
    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    /**
     * @var float $degree
     *
     * @ORM\Column(name="degree", type="float")
     */
    private $degree;
    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBrewery(): string
    {
        return $this->brewery;
    }
    /**
     * @param string $brewery
     */
    public function setBrewery(string $brewery)
    {
        $this->brewery = $brewery;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getDegree(): float
    {
        return $this->degree;
    }
    /**
     * @param float $degree
     */
    public function setDegree(float $degree)
    {
        $this->degree = $degree;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}

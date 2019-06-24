<?php
namespace HTL3R\MinigolfUO\Domain\Model;

/*
 * This file is part of the HTL3R.MinigolfUO package.
 */

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\ResourceManagement\PersistentResource;

/**
 * @Flow\Entity
 */
class Hole
{

    /**
     * @var integer
     */
    protected $par;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $number;

    /**
     * @var PersistentResource
     * @ORM\OneToOne
     */
    protected $photo;

    /**
     * @return PersistentResource
     */
    public function getPhoto(): ?PersistentResource
    {
        return $this->photo;
    }

    /**
     * @param PersistentResource $photo
     */
    public function setPhoto(PersistentResource $photo): void
    {
        $this->photo = $photo;
    }


    /**
     * @return integer
     */
    public function getPar()
    {
        return $this->par;
    }

    /**
     * @param integer $par
     * @return void
     */
    public function setPar($par)
    {
        $this->par = $par;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param integer $number
     * @return void
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}

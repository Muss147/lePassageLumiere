<?php

namespace App\Mapping;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Class EntityBase
 *
 * PHP version 7.1
 *
 * LICENSE: MIT
 *
 * @package    App\Mapping
 * @author     Lelle - Daniele Rostellato <lelle.daniele@gmail.com>
 * @license    MIT
 * @version    1.0.0
 * @since      File available since Release 1.0.0
 */
#[ORM\HasLifecycleCallbacks]
class EntityBase implements EntityBaseInterface
{   
    #[ORM\Column(name: "created_at", type: "datetime", nullable: true)]
    protected ?DateTime $createdAt = null;

    #[ORM\Column(name: "updated_at", type: "datetime", nullable: true)]
    protected ?DateTime $updatedAt = null;

    
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }


    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updatedTimestamps(): void
    {
        $dateTimeNow = new DateTime('now');
        $this->setUpdatedAt($dateTimeNow);

        if ($this->getCreatedAt() === null) {
            $this->setCreatedAt($dateTimeNow);
        }
    }

}

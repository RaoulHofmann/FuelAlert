<?php
namespace Repository;

use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use Doctrine\Common\Collections\Criteria;

class MessageRepository extends DocumentRepository
{
    public function findRegion($location): array
    {
        $latest = $this->findLatest()->getItem();
        
        return $latest; 
    }

    public function findLatest(): object
    {
        return $this->findOneBy(array(), array("lastBuildDate" => "ASC"));
    }
}
<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ChampRepository
 * Contient tous les champs des analyses
 * @author bebel
 */
class ChampRepository extends EntityRepository {

    public function FindChampAnalyse($id) {


        $from = "Inra2013urzBundle:Champ";
        $alias = "a";
        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where('a.Analyse = :id')
                ->setParameter('id', $id);

        return $qb->getQuery()->getArrayResult();
    }
    
  

}

?>

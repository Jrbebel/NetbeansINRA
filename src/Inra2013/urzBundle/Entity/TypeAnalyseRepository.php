<?php


namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\EntityRepository;
/**
 * Description of TypeAnalyseRepository
 *
 * @author bebel
 */
class TypeAnalyseRepository extends EntityRepository {

    public function SearchTypeAnalyse($id) {
        
        $from = "Inra2013urzBundle:TypeAnalyse";
        $alias = "a";

        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where('a.TypeCategorie = :id')
                ->setParameter('id', $id);

        return $qb->getQuery()->getArrayResult();
    }
    
   public function SearchChamp($id) {
       
        $from = "Inra2013urzBundle:TypeAnalyse";
        $alias = "a";
        

        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where('a.Nom LIKE :id')
              
                ->setParameter('id', $id . '%');

        return $qb->getQuery()->getArrayResult();
       

        
   }
            
            

}

?>

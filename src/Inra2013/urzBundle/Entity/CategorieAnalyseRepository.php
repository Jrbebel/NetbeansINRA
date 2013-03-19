<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CategorieAnalyseRepository
 *
 * @author inra
 */
class CategorieAnalyseRepository extends EntityRepository {

    /**
     * Description of SearchProtocole
     * Permet a partir de l'id de renvoyer les information sur le protocole
     * @author BEBEL Jean Raynal
     */
    public function SearchCategorieAnalyse($id) {

        $from = "Inra2013urzBundle:CategorieAnalyse";
        $alias = "a";
        $from1 = "Inra2013urzBundle:TypeCategorie";
        $alias1 = "c";

        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
             
                ->where('a.TypeCategorie = :id')
                
                ->setParameter('id', $id);

        return $qb->getQuery()->getArrayResult();
    }


}

?>

<?php

namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProtocoleRepository
 *
 * @author inra
 */
class ProtocoleRepository extends EntityRepository {

    /**
     * Description of SearchProtocole
     * Permet a partir de l'id de renvoyer les information sur le protocole
     * @author BEBEL Jean Raynal
     */
    public function SearchProtocole($id) {

        $from = "Inra2013urzBundle:Protocole";
        $alias = "a";

        $from1 = "Inra2013urzBundle:User";
        $alias1 = "c";
        $qb = $this->_em->createQueryBuilder();
        $qb->select('a,c')
                ->from($from, $alias)
                ->join($from1, $alias1)
                ->where('a.id = :id')
                ->andWhere('a.Responsable = c.id')
                ->setParameter('id', $id);
        return $qb->getQuery()->getArrayResult();
    }

    /**
     * Description of AnalyseProtocole
     * Permet a partir de l'id de renvoyer les analyses faite sur ce protocole
     * @author BEBEL Jean Raynal
     */
    public function AnalyseProtocole($id) {
        $from = "Inra2013urzBundle:ProtocoleAnalyse";
        $alias = "a";
        $from1 = "Inra2013urzBundle:TypeAnalyse";
        $alias1 = "c";
        $qb = $this->_em->createQueryBuilder();
        $qb->select('c')
                ->from($from, $alias)
                ->join($from1, $alias1)
                ->where('a.Protocole =:id')
                ->andWhere('a.TypeAnalyse = c.id')
                ->setParameter('id', $id);
        return $qb->getQuery()->getArrayResult();
    }

    /**
     * Description of CodeLaboProtocole
     * Permet de retourner les code labo pour une analyse données(eosino,opg,...) sur un protocole donné .
     * @author BEBEL Jean Raynal
     */
    public function CodeLaboProtocole($Type, $id) {

        $from = "Inra2013urzBundle:Ana" . $Type;
        $alias = "a";
        $from1 = "Inra2013urzBundle:Analyse";
        $alias1 = "c";

        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->join($from1, $alias1)
                ->where('c.Protocole =:id')
                ->andWhere('a.CodeLabo = c.CodeLabo')
                ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }

}

?>

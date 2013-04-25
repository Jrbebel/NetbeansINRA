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
        $alias1 = "u";

        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where('a.NomProtocole LIKE :id')
                ->setParameter('id', $id . '%');

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
        $qb->select('c')
                ->from($from, $alias)
                ->join($from1, $alias1)
                ->where('c.Protocole =:id')
                ->andWhere('a.CodeLabo = c.CodeLabo')
                ->setParameter('id', $id);
        return $qb->getQuery()->getResult();
    }

    public function StatusEncours() {


        $from = "Inra2013urzBundle:Protocole";
        $alias = "a";
        $id=2;
        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where("a.Validation !=:id")
                ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }

    public function StatusEncoursId($id) {

        $from = "Inra2013urzBundle:Protocole";
        $alias = "a";
        $qb = $this->_em->createQueryBuilder();
        $qb->select('a')
                ->from($from, $alias)
                ->where("a.Responsable =:id")
                ->setParameter('id', $id)
        ;

        return $qb->getQuery()->getResult();
    }

    /***
     * fonction qui retourne les protocole qui ont été validé par la responsable
     * visible jusqu'a 7 jours apres sa validation
     * 
     * 
     */
    
    
    public function StatusTermine() {

        $dql = "select c from Inra2013urzBundle:Protocole c where c.Validation= 2 and date_diff(CURRENT_DATE(),c.DateValidationAnalyse ) <= 7 ";

        $em = $this->_em->createQuery($dql);

        return $resultat = $em->getResult();
    }

}

?>

<?php
/**
 * Ce fichier contient la classe Presence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * @see Zend_Db_Table_Abstract
 */
require_once 'Zend/Db/Table/Abstract.php';

/**
 * Classe ORM qui représente la table 'presence'.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Presence extends Zend_Db_Table_Abstract
{
    
    /*
     * Nom de la table.
     */
    protected $_name = 'presence';
    
    /*
     * Clé primaire de la table.
     */
    protected $_primary = 'id_presence';
    
    /**
     * Recherche une entrée Presence avec la clé primaire spécifiée
     * et modifie cette entrée avec les nouvelles données.
     *
     * @param integer $id
     * @param array $data
     *
     * @return void
     */
    public static function edit($id, $data)
    {        
        $db = Zend_Registry::get('dbAdapter');
        $db->update('presence', $data, 'presence.id_presence = ' . $id);
    }
    
    /**
     * Recherche une entrée Presence avec la clé primaire spécifiée
     * et supprime cette entrée.
     *
     * @param integer $id
     *
     * @return void
     */
    public static function remove($id)
    {
        $db = Zend_Registry::get('dbAdapter');
        $db->delete('presence', 'presence.id_presence = ' . $id);
    }
    
    /**
     * Récupère toutes les entrées Presence avec certains critères
     * de tri, intervalles
     */
    public static function get($order=null, $limit=0, $from=0)
    {
        $db = Zend_Registry::get('dbAdapter');
        
        $query = $db->select()
                    ->from( array("%ftable%" => "presence") );
                    
        if($order != null)
        {
            $query->order($order);
        }

        if($limit != 0)
        {
            $query->limit($limit, $from);
        }

        return $db->fetchAll($query);
    }
    
    /*
     * Recherche une entrée Presence avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param int $id_presence
     */
    public static function findById_presence($id_presence)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("p" => "presence") )                           
                    ->where( "p.id_presence = " . $id_presence );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Presence avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param varchar $jour
     */
    public static function findByJour($jour)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("p" => "presence") )                           
                    ->where( "p.jour = " . $jour );

        return $db->fetchRow($query); 
    }
    
    
}

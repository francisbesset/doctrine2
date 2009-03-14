<?php

namespace Doctrine\ORM\Id;

use Doctrine\ORM\EntityManager;

/**
 * Enter description here...
 */
abstract class AbstractIdGenerator
{    
    protected $_em;
    
    public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    /**
     * Generates an identifier for an entity.
     *
     * @param Doctrine\ORM\Entity $entity
     * @return mixed
     */
    abstract public function generate($entity);

    /**
     * Gets whether this generator is a post-insert generator which means that
     * {@link generate()} must be called after the entity has been inserted
     * into the database.
     * 
     * By default, this method returns FALSE. Generators that have this requirement
     * must override this method and return TRUE.
     *
     * @return boolean
     */
    public function isPostInsertGenerator()
    {
        return false;
    }
}
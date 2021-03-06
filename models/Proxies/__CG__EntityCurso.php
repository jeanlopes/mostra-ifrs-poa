<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Curso extends \Entity\Curso implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setNome($nome)
    {
        $this->__load();
        return parent::setNome($nome);
    }

    public function getNome()
    {
        $this->__load();
        return parent::getNome();
    }

    public function setNivel($nivel)
    {
        $this->__load();
        return parent::setNivel($nivel);
    }

    public function getNivel()
    {
        $this->__load();
        return parent::getNivel();
    }

    public function getIdCurso()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idCurso"];
        }
        $this->__load();
        return parent::getIdCurso();
    }

    public function setCampus(\Entity\Campus $campus)
    {
        $this->__load();
        return parent::setCampus($campus);
    }

    public function getCampus()
    {
        $this->__load();
        return parent::getCampus();
    }

    public function addAutores(\Entity\Autor $autor)
    {
        $this->__load();
        return parent::addAutores($autor);
    }

    public function removeAutores(\Entity\Autor $autor)
    {
        $this->__load();
        return parent::removeAutores($autor);
    }

    public function getAutores()
    {
        $this->__load();
        return parent::getAutores();
    }

    public function jsonSerialize()
    {
        $this->__load();
        return parent::jsonSerialize();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'nome', 'nivel', 'idCurso', 'campus', 'autores');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
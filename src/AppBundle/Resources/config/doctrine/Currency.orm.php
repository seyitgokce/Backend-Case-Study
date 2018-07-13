<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\CurrencyRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'isocode',
   'fieldName' => 'isocode',
   'type' => 'string',
   'length' => '10',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'amount',
   'fieldName' => 'amount',
   'type' => 'float',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'source',
   'fieldName' => 'source',
   'type' => 'string',
   'length' => '55',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'createdAt',
   'fieldName' => 'createdAt',
   'type' => 'datetime',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
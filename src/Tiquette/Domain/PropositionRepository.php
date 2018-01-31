<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 8:21 AM
 */

namespace Tiquette\Domain;


interface PropositionRepository
{
    public function save(Proposition $proposition): void;

}
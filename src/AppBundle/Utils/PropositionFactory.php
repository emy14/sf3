<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 8:28 AM
 */

namespace AppBundle\Utils;


use AppBundle\Forms\PropositionSubmission;
use Tiquette\Domain\Proposition;

class PropositionFactory
{
    public function fromPropositionSubmission(PropositionSubmission $propositionSubmission, $id): Proposition
    {
        return Proposition::submit(
            $propositionSubmission->price,
            (int) $id
        );
    }
}
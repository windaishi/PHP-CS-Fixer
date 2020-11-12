<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\RuleSet\Sets;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

/**
 * @internal
 */
final class PHP80MigrationRiskySet extends AbstractRuleSetDescription
{
    public function getRules()
    {
        return [
            '@PHP71Migration:risky' => true,
            'implode_call' => true,
            'no_alias_functions' => [
                'sets' => [
                    '@all',
                ],
            ],
            'no_unneeded_final_method' => true, // final private method (not constructor) are no longer allowed >= PHP8.0
        ];
    }

    public function getDescription()
    {
        return 'Rules to improve code for PHP 8.0 compatibility.';
    }
}
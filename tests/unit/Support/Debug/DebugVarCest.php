<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Debug;

use UnitTester;

class DebugVarCest
{
    /**
     * Tests Phalcon\Debug :: debugVar()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2020-02-04
     */
    public function supportDebugDebugVar(UnitTester $I)
    {
        $I->wantToTest('Debug - debugVar()');

        $I->skipTest('Need implementation');
    }
}

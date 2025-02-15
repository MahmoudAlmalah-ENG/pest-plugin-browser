<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

/**
 * @internal
 */
final readonly class WaitForEvent implements Operation
{
    public function __construct(
        private string $event,
    ) {
        //
    }

    public function compile(): string
    {
        return sprintf("await page.waitForEvent('%s');", $this->event);
    }
}

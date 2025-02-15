<?php

declare(strict_types=1);

namespace Pest\Browser\Operations;

use Pest\Browser\Contracts\Operation;

/**
 * @internal
 */
final readonly class WaitForUrl implements Operation
{
    /**
     * Creates an operation instance.
     */
    public function __construct(
        private string $url,
    ) {
        //
    }

    public function compile(): string
    {
        return sprintf("await page.waitForURL('%s');", $this->url);
    }
}

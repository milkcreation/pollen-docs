<?php

declare(strict_types=1);

namespace Pollen\Docs;

use Pollen\Docs\Contracts\Docs as DocsContract;
use tiFy\Container\ServiceProvider as BaseServiceProvider;

class DocsServiceProvider extends BaseServiceProvider
{
    /**
     * @var string[]
     */
    protected $provides = [
        DocsContract::class,
    ];

    /**
     * @inheritDoc
     */
    public function boot()
    {
        events()->listen(
            'wp.booted',
            function () {
                $this->getContainer()->get(DocsContract::class)->boot();
            }
        );
    }

    /**
     * @inheritDoc
     */
    public function register(): void
    {
        $this->getContainer()->share(
            DocsContract::class,
            function (): DocsContract {
                return new Docs(config('docs', []), $this->getContainer());
            }
        );
    }
}

<?php
/*
 * This file is part of the RedPanda Coding Contracts package.
 *
 * Copyright (c) 2023.  Jordan Wamser <jwamser@redpandacoding.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Redpandacoding\Contracts\Console;

interface KernelInterface
{
    /**
     * Boots the current kernel.
     */
    public function boot(): void;

    /**
     * Gets the current container.
     */
    public function getContainer(): \Symfony\Component\DependencyInjection\ContainerInterface;

    /**
     * Handle an incoming console command.
     */
    public function handle(\Symfony\Component\Console\Input\InputInterface $input,?\Symfony\Component\Console\Output\OutputInterface $output = null): int;

    /**
     * Shutdowns the kernel.
     *
     * This method is mainly useful when doing functional testing.
     *
     * @return void
     */
    public function shutdown();
}
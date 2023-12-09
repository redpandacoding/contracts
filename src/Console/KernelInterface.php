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
    public function bootstrap(): void;

    /**
     * Handle an incoming console command.
     */
    public function handle(\Symfony\Component\Console\Input\InputInterface $input,?\Symfony\Component\Console\Output\OutputInterface $output = null): int;

    /**
     * Run an console command by name.
     */
    public function call(string $command, array $parameters = [],?\Symfony\Component\Console\Output\OutputInterface $outputBuffer = null): int;

    /**
     * Get all of the commands registered with the console.
     */
    public function all(): array;

}
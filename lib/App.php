<?php

declare(strict_types=1);

namespace Tusk;

class App
{
    /** @var Output */
    protected Output $printer;

    /** @var array */
    protected array $registry = [];

    /** Main class constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->printer = new Output();
    }

    public function registerCommand(string $name, callable $callback): void
    {
        $this->registry[$name] = $callback;
    }

    public function getCommand(string $command): ?callable
    {
        return $this->registry[$command] ?? null;
    }

    public function getPrinter(): Output
    {
        return $this->printer;
    }

    public function runCommand(array $argv = []): void
    {
        $commandName = $argv[1] ?? "help";

        $command = $this->getCommand($commandName);

        if (null === $command) {
            $this->getPrinter()->display("ERROR: Command '$commandName' not found.");
            exit;
        }

        call_user_func($command, $argv);
    }
}

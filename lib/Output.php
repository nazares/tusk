<?php

declare(strict_types=1);

namespace Tusk;

class Output
{
    /**
     * Outpur message
     *
     * @param [type] $message
     * @return void
     */
    protected function out($message): void
    {
        echo $message;
    }

    /**
     * Output new line
     *
     * @return void
     */
    protected function newLine(): void
    {
        $this->out("\n");
    }

    /**
     * Display message with new line
     *
     * @param [type] $message
     * @return void
     */
    public function display($message): void
    {
        $this->out($message);
        $this->newLine();
        $this->newLine();
    }
}

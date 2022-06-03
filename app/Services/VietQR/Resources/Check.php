<?php

namespace App\Services\VietQR\Resources;

class Check extends ApiResource
{
    public int $id;

    public string $type;

    /*
     * The human readable version of type.
     */
    public string $label;

    public bool $enabled;

    public function enable(): void
    {
        $updatedCheck = $this->ohDear->enableCheck($this->id);

        $this->enabled = $updatedCheck->enabled;
    }

    public function disable(): void
    {
        $updatedCheck = $this->ohDear->disableCheck($this->id);

        $this->enabled = $updatedCheck->enabled;
    }

    public function requestRun(): void
    {
        $this->ohDear->requestRun($this->id);
    }

    public function snooze(int $minutes): void
    {
        $this->ohDear->snooze($this->id, $minutes);
    }

    public function unsnooze(): void
    {
        $this->ohDear->unsnooze($this->id);
    }
}

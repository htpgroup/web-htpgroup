<?php

namespace App\Services\OmiPayVA\Resources;

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
        $updatedCheck = $this->omiPayVA->enableCheck($this->id);

        $this->enabled = $updatedCheck->enabled;
    }

    public function disable(): void
    {
        $updatedCheck = $this->omiPayVA->disableCheck($this->id);

        $this->enabled = $updatedCheck->enabled;
    }

    public function requestRun(): void
    {
        $this->omiPayVA->requestRun($this->id);
    }

    public function snooze(int $minutes): void
    {
        $this->omiPayVA->snooze($this->id, $minutes);
    }

    public function unsnooze(): void
    {
        $this->omiPayVA->unsnooze($this->id);
    }
}

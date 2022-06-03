<?php

namespace App\Services\OmiPayVA\Resources;

class CronCheck extends ApiResource
{
    public int $id;

    public string $name;

    public string $uuid;

    public string $type;

    public int $checkId;

    public ?int $frequencyInMinutes;

    public string $pingUrl;

    public int $graceTimeInMinutes = 0;

    public ?string $cronExpression = '';

    public ?string $description = '';

    public function __construct(array $attributes, $omiPayVA = null)
    {
        parent::__construct($attributes, $omiPayVA);
    }

    public function delete(): void
    {
        $this->omiPayVA->deleteCronCheck($this->id);
    }

    public function update()
    {
        $attributes = [
            'name' => $this->name,
            'frequency_in_minutes' => $this->frequencyInMinutes,
            'cron_expression' => $this->cronExpression,
            'grace_time_in_minutes' => $this->graceTimeInMinutes,
            'description' => $this->description,
        ];

        $this->omiPayVA->updateCronCheck($this->id, $attributes);
    }
}

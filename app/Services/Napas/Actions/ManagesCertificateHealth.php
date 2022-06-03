<?php

namespace App\Services\Napas\Actions;

use App\Services\Napas\Resources\CertificateHealth;

trait ManagesCertificateHealth
{
    public function certificateHealth(int $siteId)
    {
        return new CertificateHealth($this->get("certificate-health/{$siteId}"));
    }
}

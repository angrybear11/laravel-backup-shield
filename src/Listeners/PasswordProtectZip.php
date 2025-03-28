<?php

namespace Olssonm\BackupShield\Listeners;

use Olssonm\BackupShield\Factories\Password;

use Spatie\Backup\Events\BackupZipWasCreated;

class PasswordProtectZip
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Spatie\Backup\Events\BackupZipWasCreated  $event
     * @return string
     */
    public function handle(BackupZipWasCreated $event) : string
    {
        return (new Password(new \Olssonm\BackupShield\Encryption, $event->pathToZip))->path;
    }
}

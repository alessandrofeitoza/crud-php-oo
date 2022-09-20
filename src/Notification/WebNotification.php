<?php

declare(strict_types=1);

namespace App\Notification;

class WebNotification
{
    public static function addErrorMessage(string $title, string $type = 'success', string $description = ''): void
    {
        $_SESSION['notifications'][] = [
            'notificationType' => $type,
            'notificationTitle' => $title,
            'notificationDescription' => $description,
        ];
    }

    public static function showMessages(): void
    {
        $notifications = $_SESSION['notifications'];

        foreach ($notifications as $notification) {
            extract($notification);

            include dirname(__DIR__).'/../views/_partials/notification.php';
        }

        $_SESSION['notifications'] = [];
    }
}
<?php

namespace App\Enums;

enum ReadStatus: string
{
    case Read = 'read';
    case Unread = 'unread';
}

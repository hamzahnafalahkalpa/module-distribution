<?php

namespace Zahzah\ModuleDistribution\Enums\Distribution;

enum Status: string{
    case DRAFT         = 'DRAFT';
    case ORDERED       = 'ORDERED';
    case DISTRIBUTED   = 'DISTRIBUTED';
    CASE CANCELED      = 'CANCELED';
}
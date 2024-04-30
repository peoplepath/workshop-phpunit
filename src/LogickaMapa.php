<?php

declare(strict_types = 1);

namespace src;

class LogickaMapa
{

    public function LogickaMapaAnd(bool $a, bool $b): bool {
        return $a && $b;
    }
    
    public function LogickaMapaOr(bool $a, bool $b): bool {
        return $a || $b;
    }

    public function LogickaMapaPravdyPartneru(OnaVo $ona, OnVo $on) {
        if ($ona->value === false && $on->value === false) 
            return "On se plete";
        return "Ona ma pravdu";
    }
}
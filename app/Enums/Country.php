<?php

namespace App\Enums;

Enum Country: string {
    case United_States = 'US';
    case Canada = 'CA';
    case United_Kingdom = 'GB';
    case Germany = 'DE';
    case France = 'FR';
    case Australia = 'AU';
    case Japan = 'JP';
    case China = 'CN';
    case India = 'IN';
    case Brazil = 'BR';
    case South_Africa = 'ZA';
    case Italy = 'IT';
    case Russia = 'RU';
    case South_Korea = 'KR';
    case Spain = 'ES';
    case Mexico = 'MX';
    case Netherlands = 'NL';
    case Switzerland = 'CH';
    case Sweden = 'SE';
    case Norway = 'NO';
    case Denmark = 'DK';
    case Singapore = 'SG';
    case Malaysia = 'MY';
    case Indonesia = 'ID';
    case Philippines = 'PH';
    case New_Zealand = 'NZ';
    case Saudi_Arabia = 'SA';
    case Turkey = 'TR';

    public function label(){
        return (string) str($this->name)->replace('_', ' ');
    }
}
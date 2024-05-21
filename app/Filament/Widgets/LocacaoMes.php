<?php

namespace App\Filament\Widgets;

use App\Models\Locacao;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class LocacaoMes extends ChartWidget
{
    protected static ?string $heading = 'Locações por Mês';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = Trend::model(Locacao::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth('data_saida')
        ->sum('valor_total');

        return [
            'datasets' => [
                [
                    'label' => 'Locações por Mês',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

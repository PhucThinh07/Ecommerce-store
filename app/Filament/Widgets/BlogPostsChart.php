<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;

class BlogPostsChart extends BarChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?string $maxHeight = '300px';
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Biểu đồ thống kê',
                    'data' => [10, 13, 20, 8, 21, 32, 45, 30, 65, 45, 77, 50],
                    'backgroundColor'=>['#36a2eb','#ff6384','#4bc0c0','#ff9f40','#9966ff','#c9cbcf','#ff6384','#ff6384','#c9cbcf']
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}

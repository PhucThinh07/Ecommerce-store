<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget{

    protected function getCards()
    : array{
        return [
            Card::make('Sản phẩm', Product::count())
                ->description('số lượng sản phẩm')
                ->descriptionIcon('heroicon-s-shopping-cart')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Card::make('Bài viết', Post::count())
                ->description('số lượng bài viết')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([13, 2, 10, 3, 8, 2, 17])
                ->color('danger'),
            Card::make('Tài khoản người dùng', '2')
                ->description('tài khoản đã đăng ký')
                ->descriptionIcon('heroicon-s-users')
                ->color('warning'),
        ];
    }
}

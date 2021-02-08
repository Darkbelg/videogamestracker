<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->recentlyReviewed = Cache::remember('recently-reviewed', 7, function () use ($before, $current) {
            return Http::withHeaders(config('services.igdb'))->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, total_rating_count,rating, slug,rating_count, summary;
            where platforms = (48,49,130,6)
            & (first_release_date >= {$before}
            & first_release_date < {$current}
            & rating_count > 1);
            sort total_rating_count desc;
            limit 3;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')
                ->json();

            // dump($recentlyReviewed);
        });
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
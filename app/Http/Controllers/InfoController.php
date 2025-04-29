<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class InfoController extends Controller
{
    public function render_event(Request $request, Event $event)
    {
        //dd($request->route());
        $page=Page::where('slug','event/?event')->first();

        $event=Event::where('id',$request->route()->getAction()['event'])->first();

        //$page=Info::where('id',$request->route()->getAction()['page'])->first();
        if(!$page->published)
        {
            abort(503);
        }
        //dd($page);

        $page->seo_tags=$event->seo_tags;
        $page->description=$event->meta_description;
        $page->title=$event->title;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (!isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();
         return Blade::render(
             <<<'BLADE'
             <x-dynamic-component
                 :component="$component"
                 :page="$page"
             />
             BLADE,
             ['component' => $component, 'page' => $page]
         );

}


public function currentEvent(Request $request, $slug)
{
    $event = Event::where('slug', $slug)
        ->where(function ($query) {
            $query->where('active', 1)
                  ->orWhere('published_at', '<=', now())
                  ->orWhere('start_date', '<=', now());
        })
        ->firstOrFail();

    $page = Page::where('slug', 'current-event/?event')->first();

    if (!$page || !$page->published) {
        abort(503);
    }

    // Inject SEO and meta from the event
        $page->seo_tags=$event->seo_tags;
        $page->description=$event->meta_description;
        $page->title=$event->title;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (! isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();
         return Blade::render(
             <<<'BLADE'
             <x-dynamic-component
                 :component="$component"
                 :page="$page"
             />
             BLADE,
             ['component' => $component, 'page' => $page]
         );
}



public function pastEvent(Request $request, $slug)
{
    $event = Event::where('slug', $slug)
        ->where(function ($query) {
            $query->where('active', 1)
                  ->orWhere('published_at', '<=', now())
                  ->orWhere('start_date', '<', now());
        })
        ->firstOrFail();

    $page = Page::where('slug', 'past-event/?event')->first();

    if (!$page || !$page->published) {
        abort(503);
    }

    // Inject SEO and meta from the event
        $page->seo_tags=$event->seo_tags;
        $page->description=$event->meta_description;
        $page->title=$event->title;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (! isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();
         return Blade::render(
             <<<'BLADE'
             <x-dynamic-component
                 :component="$component"
                 :page="$page"
             />
             BLADE,
             ['component' => $component, 'page' => $page]
         );
}
public function upcomingEvent(Request $request, $slug)
{
    $event = Event::where('slug', $slug)
        ->where(function ($query) {
            $query->where('active', 1)
                  ->orWhere('published_at', '<=', now())
                  ->orWhere('start_date', '>', now());
        })
        ->firstOrFail();

    $page = Page::where('slug', 'upcoming-event/?event')->first();

    if (!$page || !$page->published) {
        abort(503);
    }

    // Inject SEO and meta from the event
        $page->seo_tags=$event->seo_tags;
        $page->description=$event->meta_description;
        $page->title=$event->title;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (! isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();
         return Blade::render(
             <<<'BLADE'
             <x-dynamic-component
                 :component="$component"
                 :page="$page"
             />
             BLADE,
             ['component' => $component, 'page' => $page]
         );
}



}

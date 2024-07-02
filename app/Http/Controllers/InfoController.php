<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function render_event(Request $request, Event $event)
    {
        //dd($request->route());
        $page=Info::where('slug','?event')->with('info_category',function($query){
            return $query->where('url_prefix','event')->first();
        })->first();

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

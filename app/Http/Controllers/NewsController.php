<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\News;
// use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class NewsController extends Controller
{
    public function render_news(Request $request, News $news)
    {

        $page=Page::where('slug','news/?news')->first();

        $news=News::where('id',$request->route()->getAction()['news'])->first();

        if(!$page->published)
        {
            abort(503);
        }
        //dd($page);

        $page->seo_tags=$news->seo_tags;
        $page->description=$news->meta_description;
        $page->title=$news->title;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (!isset($layout)) {
            throw new Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
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

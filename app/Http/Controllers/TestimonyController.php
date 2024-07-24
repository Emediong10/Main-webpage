<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class TestimonyController extends Controller
{
    public function render_testimony(Request $request, Testimony $testimony)
    {
        //dd($request->route());
        $page=Page::where('slug','testimony/?testimonies')->first();

        $testimony=Testimony::where('id',$request->route()->getAction()['testimony'])->first();

        //$page=Info::where('id',$request->route()->getAction()['page'])->first();
        if(!$page->published)
        {
            abort(503);
        }
        //dd($page);

        $page->seo_tags=$testimony->seo_tags;
        $page->description=$testimony->meta_description;
        $page->subject=$testimony->subject;

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

<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Page;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class PaymentTypeController extends Controller
{
    public function render_payment_type(Request $request, PaymentType $payment_type)
    {
        //dd($request->route());
        $page=Page::where('slug','payment/?payment_type')->first();

        $payment_type=PaymentType::where('id',$request->route()->getAction()['payment_type'])->first();

        //$page=Info::where('id',$request->route()->getAction()['page'])->first();
        if(!$page->published)
        {
            abort(503);
        }
        //dd($page);

        $page->seo_tags=$payment_type->seo_tags;
        $page->description=$payment_type->meta_description;
        $page->subject=$payment_type->subject;

        //dd($page);
        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (! isset($layout)) {
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

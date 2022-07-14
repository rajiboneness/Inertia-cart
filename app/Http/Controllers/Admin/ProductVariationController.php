<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductVariationInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ProductVariation;
use App\Models\ProductVariationValue;

class ProductVariationController extends Controller
{

    public function __construct(ProductVariationInterface $ProductVariationRepository)
    {
        $this->ProductVariationRepository = $ProductVariationRepository;
    }

    public function index(Request $request) 
    {
        $data = $this->ProductVariationRepository->getAllVariation();
        return view('admin.product-variation.index', compact('data'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            "title" => "required|string|max:255"
        ]);

        $params = $request->except('_token');

        $variationStore = $this->ProductVariationRepository->createVariation($params);

        if ($variationStore) {
            return redirect()->route('admin.product.variation.index');
        } else {
            return redirect()->route('admin.product.variation.index')->withInput($request->all());
        }
    }

    public function show(Request $request, $id)
    {
        $data = $this->ProductVariationRepository->getVariationById($id);
        return view('admin.product-variation.detail', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required|string|max:255"
        ]);

        $params = $request->except('_token');

        $variationStore = $this->ProductVariationRepository->updateVariation($id, $params);

        if ($variationStore) {
            return redirect()->route('admin.product.variation.index');
        } else {
            return redirect()->route('admin.product.variation.view')->withInput($request->all());
        }
    }

    public function status(Request $request, $id)
    {
        $variationStat = $this->ProductVariationRepository->toggleStatus($id);

        if ($variationStat) {
            return redirect()->route('admin.product.variation.index');
        } else {
            return redirect()->route('admin.product.variation.index')->withInput($request->all());
        }
    }

    public function destroy(Request $request, $id) 
    {
        $this->ProductVariationRepository->deleteVariation($id);

        return redirect()->route('admin.product.variation.index');
    }

    // Variation Value details

    public function valueIndex(Request $request) 
    {
        $data = $this->ProductVariationRepository->getAllVariationValue();
        $variations = $this->ProductVariationRepository->getAllVariation();
        return view('admin.product-variation.value-index', compact('data', 'variations'));
    }

    public function valueStore(Request $request) 
    {
        $request->validate([
            "value" => "required|string|max:255",
            "variation_id" => "required|string|max:255"
        ]);

        $params = $request->except('_token');

        $variationStore = $this->ProductVariationRepository->createVariationValue($params);

        if ($variationStore) {
            return redirect()->route('admin.product.value.index');
        } else {
            return redirect()->route('admin.product.value.index')->withInput($request->all());
        }
    }

    public function valueShow(Request $request, $id)
    {
        $data = $this->ProductVariationRepository->getVariationValueById($id);
        $variations = $this->ProductVariationRepository->getAllVariation();
        return view('admin.product-variation.value-detail', compact('data', 'variations'));
    }
    public function valueUpdate(Request $request, $id)
    {
        $request->validate([
            "value" => "required|string|max:255",
            "variation_id" => "required|string|max:255"
        ]);

        $params = $request->except('_token');

        $variationStore = $this->ProductVariationRepository->updateVariationValue($id, $params);

        if ($variationStore) {
            return redirect()->route('admin.product.value.index');
        } else {
            return redirect()->route('admin.product.value.view')->withInput($request->all());
        }
    }

    public function valueStatus(Request $request, $id)
    {
        $variationStat = $this->ProductVariationRepository->toggleValueStatus($id);

        if ($variationStat) {
            return redirect()->route('admin.product.value.index');
        } else {
            return redirect()->route('admin.product.value.index')->withInput($request->all());
        }
    }

    public function valueDestroy(Request $request, $id) 
    {
        $this->ProductVariationRepository->deleteVariationValue($id);

        return redirect()->route('admin.product.value.index');
    }
}

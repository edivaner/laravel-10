<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function __construct(
        protected SupportService $service
    ) {
    }

    public function index(Request $request)
    {

        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('totalPerPage', 5),
            filter: $request->filter
        );


        $filters = ['filter' => $request->get('filter', '')];

        return view('admin.supports.index', ['supports' => $supports, 'filters' => $filters]);
    }

    public function create()
    {

        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupportRequest $request)
    {
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('support.index');
    }

    public function show(string $id)
    {
        if (!$support = $this->service->findOne($id))
            return redirect()->back();

        return view('admin/supports/show', compact('support'));
    }

    public function edit(string $id)
    {
        // $support = Support::find($id);
        $support = $this->service->findOne($id);

        if (!$support)
            return redirect()->back();

        return view('admin.supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupportRequest $request)
    {
        $support =  $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if (!$support)
            return redirect()->back();

        return redirect()->route('support.index');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('support.index');
    }
}

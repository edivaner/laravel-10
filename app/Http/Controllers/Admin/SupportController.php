<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    //

    public function index(Support $support)
    {

        $supports = $support->all();

        $xxx = "<script>alert('exibindo')</script>";

        return view('admin.supports.index', ['supports' => $supports, 'xxx' => $xxx]);
    }

    public function create()
    {

        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'A';

        $suporte = $support->create($data);

        return redirect()->route('support.index');
    }

    public function show(string $id)
    {
        $support = Support::find($id);

        if (!$support)
            return redirect()->back();

        return view('admin/supports/show', compact('support'));
    }

    public function edit(string $id)
    {
        $support = Support::find($id);
        if (!$support)
            return redirect()->back();

        return view('admin.supports.edit', compact('support'));
    }

    public function update(string $id, Request $request)
    {
        $support = Support::find($id);
        if (!$support)
            return redirect()->back();

        $support->update($request->only(['subject', 'body']));

        return redirect()->route('support.index');
    }

    public function destroy(string $id, Support $support)
    {
        $support = $support->find($id);

        if (!$support) {
            return redirect()->back();
        }

        $support->delete();

        return redirect()->route('support.index');
    }
}

<?php

namespace App\Tables;

use App\Models\Chalengge;
use Illuminate\Http\Request;
use App\Models\DashboardChalengge;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\AbstractTable;

class DashboardChalengges extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Chalengge::query()->where('user_id', auth()->user()->id);
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name'])
            ->defaultSort('name')
            ->column('name', label: 'Chalengge Name', sortable: true, canBeHidden: false)
            ->column('category_chalengge.name', label: 'Category', sortable: false, canBeHidden: false)
            ->column('answer', sortable: false, canBeHidden: false)
            ->column('point', sortable: false, canBeHidden: false)
            ->column(label: 'Actions', canBeHidden: false)
            ->paginate(7);
    }
}

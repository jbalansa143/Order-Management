@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Categories</h4>
                <p class="sub-header">
                    List of Categories under menus
                </p>

                <table id="demo-foo-accordion" class="table table-colored mb-0 toggle-arrow-tiny">
                    <thead>
                            <th> Category </th>
                            <th data-hide="all"> Menu </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->getCategoryName() }}</td>
                            <td>
                                <ul>
                                @foreach ($categoryMenus[$category->category_id] as $menu)
                                    <li>{{ $menu->getName() }}</li>
                                @endforeach
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                
                </table>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
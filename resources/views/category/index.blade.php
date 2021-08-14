@extends('master')
@section('content')
    <div class="container">
        <h3 align="center">Category List</h3>
        <br>

        <table id="category_table" class="table table-bordered">
{{--            @forelse($categories as $category)--}}
            <thead>
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Description</th>
            </tr>
            </thead>
{{--            <tbody>--}}

{{--                <tr>--}}
{{--                   --}}
{{--                    <td>{{$category->name}}</td>--}}
{{--                    <td>{{$category->description}}</td>--}}
{{--                </tr>--}}
{{--            </tbody>--}}


{{--        </table>--}}
{{--        @empty--}}
{{--            <td style="font-weight: bold">Sorry, No Category Found!</td>--}}
{{--        @endforelse--}}
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#category_table').DataTable({
                "processing": true,
                "serverSide": true,
                {{--ajax: "{{ route('category.list') }}",--}}
                "ajax" : {
                    "url" : "category-list",
                    "type" : "POST",
                    "dataSrc": ""
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    // {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        })
    </script>

@endpush

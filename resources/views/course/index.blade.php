<a href="{{ route('course.create') }}">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Create</td>
    </tr>
    @foreach ($data as $each)
        <tr>
            <td>
                {{$each->id}}
            </td>
            <td>
                {{$each->name}}
            <td>
                {{$each->year_created_at}}
            </td>
        </tr>
    @endforeach
</table>

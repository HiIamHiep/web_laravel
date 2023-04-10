<a href="{{ route('courses.create') }}">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Create</td>
        <td>Edit</td>
        <td>Delete</td>
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
            <td>
                <a href=" {{ route('courses.edit', $each) }}">
                    Edit
                </a>
            </td>
            <td>
                <form action=" {{ route('courses.destroy', $each) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

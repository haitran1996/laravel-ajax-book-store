@forelse($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->created_at  }}</td>
        <td>{{ $user->email }}</td>
        {{--                            <td></td>--}}
        {{--                            <td>--}}
        {{--                                <div class="btn-group">--}}
        {{--                                    <a class="btn btn-primary" href="{{route('admin.user.edit', $user->id)}}"><i class="icon_plus_alt2"></i></a>--}}
        {{--                                    <a class="btn btn-danger" href="{{route('admin.user.delete', $user->id)}}"><i class="icon_close_alt2"></i></a>--}}
        {{--                                </div>--}}
        {{--                            </td>--}}
    </tr>
@empty
    <tr>
        <td>No user to display!</td>
    </tr>
@endforelse

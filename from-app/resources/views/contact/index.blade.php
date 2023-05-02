
@extends('layout')

@section('title', 'お問い合わせ')

@section('content')
    <form action="{{ route('post') }}" method="post">
        <table class="contact-table">
            @csrf
            <tbody>
                <tr>
                    <th class="contact-item">お名前</th>
                    <td class="contact-body">
                        <input type="text" name="fullname" value="{{ old('fullname') }}" class="form-text">
                    </td>
                </tr>
                @error('fullname')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
                <tr>
                    <th class="contact-item">性別</th>
                    <td class="contact-body">
                        <label class="contact-sex">
                            <input type="radio" name="gender" value="男性" checked>
                            <span class="contact-sex-txt">男性</span>
                        </label>
                        <label class="contact-sex">
                            <input type="radio" name="gender" value="女性">
                            <span class="contact-sex-txt">女性</span>
                        </label>
                    </td>
                </tr>
                @error('gender')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
                <tr>
                    <th class="contact-item">メールアドレス</th>
                    <td class="contact-body">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-text">
                    </td>
                </tr>
                @error('email')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
                <tr>
                    <th class="contact-item">郵便番号</th>
                    <td class="contact-body">
                        <input type="text" name="postcode" value="{{ old('postcode') }}" class="form-text">
                    </td>
                </tr>
                @error('postcode')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
                <tr>
                    <th class="contact-item">住所</th>
                    <td class="contact-body">
                        <input type="text" name="address" value="{{ old('address') }}" class="form-text">
                    </td>
                </tr>
                @error('address')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
                <tr>
                    <th class="contact-item">建物名</th>
                    <td class="contact-body">
                        <input type="text" name="building_name" value="{{ old('building_name') }}" class="form-text">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">ご意見</th>
                    <td class="contact-body">
                        <textarea name="opinion" class="form-textarea"></textarea>
                    </td>
                </tr>
                @error('opinion')
                    <tr>
                        <th>Error</th>
                        <td>{{ $message }}</td>
                    </tr>
                @enderror
            </tbody>
        </table>

        <input class="contact-submit" type="submit" value="確認">
    </form>
@endsection

</html>

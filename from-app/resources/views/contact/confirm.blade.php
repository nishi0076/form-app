@extends('layout')

@section('title', '内容確認')

@section('content')
    <form action="{{ route('send') }}" method="post">
        @csrf
        <tr>
            <th class="contact-item">お名前</th>
            <td class="contact-body">
                {{ $input['fullname'] }}
                <input type="hidden" name="fullname" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">性別</th>
            <td class="contact-body">
                {{ $input['gender'] }}
                <input type="hidden" name="gender" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">メールアドレス</th>
            <td class="contact-body">
              {{ $input['email'] }}
                <input type="hidden" name="email" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">郵便番号</th>
            <td class="contact-body">
              {{ $input['postcode'] }}
                <input type="hidden" name="postcode" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">住所</th>
            <td class="contact-body">
              {{ $input['address'] }}
                <input type="hidden" name="address" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">建物名</th>
            <td class="contact-body">
              {{ $input['building_name'] }}
                <input type="hidden" name="building_name" class="form-text">
            </td>
        </tr>
        <tr>
            <th class="contact-item">ご意見</th>
            <td class="contact-body">
              {{ $input['opinion'] }}
                <input type="hidden" name="opinion" class="form-text">
            </td>
        </tr>

        <input class="contact-back" name="back" type="submit" value="修正する" />
        <input class="confirm-submit" type="submit" value="送信" />

    </form>
@endsection

</html>

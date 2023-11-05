@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection
@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>内容確認</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text_name">
                        <input type="text" name="fullname" value="{{ $contact['fullname'] }}   {{ $contact['fullname'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">郵便番号</th>
                    <td class="confirm-table__text">
                        <input type="postcode" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="building_name" name="building_name" value="{{ $contact['building_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">ご意見</th>
                    <td class="confirm-table__text">
                        <input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
            <div class="back__button">
                <button class="back__button-button" type="button" onclick="history.back()">修正する</button>
            </div>
    </form>
</div>
@endsection
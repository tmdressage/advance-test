@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text_name">
                    <ul style="list-style: none;">
                        <li><input type="text" name="fullname" value="{{ old('fullname') }}" /></li>
                        <li><input type="text" name="fullname" value="{{ old('fullname') }}" /></li>
                    </ul>
                    <div class="example">
                        <ul style="list-style: none;">
                            <li class="text-example">例）山田 </li>
                            <li class="text-example">例）太郎 </li>
                        </ul>
                    </div>
                </div>
                <div class="form__error_name">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radiobutton">
                    <label>
                        <input type="radio" name="gender" value="1" style="transform:scale(1.5)" checked />男性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="2" style="transform:scale(1.5)" />女性
                    </label>
                </div>
                <div class=" form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="example">
                    <p class="text-example">例）test@example.com </p>
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text_postcode">
                    <p class="post">〒</P>
                    <input type="text" name="postcode" inputmode="numeric" pattern="\d{3}-\d{4}" value="{{ old('postcode') }}" /></P>
                </div>
                <div class=" example">
                    <p class="postcode-example">例）123-4567 </p>
                </div>
                <div class="form__error">
                    @error('postcode')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}" />
                </div>
                <div class="example">
                    <p class="text-example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" value="{{ old('building_name') }}" />
                </div>
                <div class="example">
                    <p class="text-example">例）千駄ヶ谷マンション101 </p>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="opinion">{{ old('opinion') }}</textarea>
                </div>
                <div class="form__error">
                    @error('opinion')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-title">管理システム</div>

<div class="search__content">
    <form class="search-form" action="/admins/search" method="get">
        @csrf
        <div class="search-form__name_gender">
            <div class="search-form__item-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" name="fullname" value="{{ old('fullname') }}">
            </div>
            <div class="search-form__item-title">
                <span class="form__label--item">性別</span>
            </div>
            <div class="search-form--radiobutton">
                <label>
                    <input type="radio" name="gender" value="0" style="transform:scale(1.5)" checked />全て
                </label>
                <label>
                    <input type="radio" name="gender" value="1" style="transform:scale(1.5)" />男性
                </label>
                <label>
                    <input type="radio" name="gender" value="2" style="transform:scale(1.5)" />女性
                </label>
            </div>
        </div>
        <div class="search-form__create_at">
            <div class="search-form__item-title">
                <span class="form__label--item">登録日</span>
            </div>
            <div class="search-form__item">
                <input class="search-form__item-input" type="date" name="created_at" value="{{ old('created_at') }}">
            </div>
            <p class="line">~</p>
            <div class="search-form__item">
                <input class="search-form__item-input" type="date" name="created_at" value="{{ old('created_at') }}">
            </div>
        </div>

        <div class="search-form__email">
            <div class="search-form__item-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="search-form__item">
                <input class="search-form__item-input" type="email" name="email" value="{{ old('email') }}" />
            </div>
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </div>
        <div class="reset__button">
            <button class="reset__button-button" type="reset">リセット</button>
        </div>

    </form>
</div>

<div class="category__content">
    <div class="page">
        {{$admins->links('pagination::bootstrap-4')}}
    </div>
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header-ID">ID</th>
                <th class="category-table__header-fullname">お名前</th>
                <th class="category-table__header-gender">性別</th>
                <th class="category-table__header-email">メールアドレス</th>
                <th class="category-table__header-opinion">ご意見</th>
            </tr>
            @foreach ($admins as $admin)
            <tr class="category-table__row">
                <td class="category-table__ID">{{$admin->id}}</td>
                <td class="category-table__fullname">{{$admin->fullname}}</td>
                <td class="category-table__gender">{{$admin->gender}}</td>
                <td class="category-table__email">{{$admin->email}}</td>
                <td class="category-table__opinion">{{$admin->opinion}}</td>
                <td>
                     <form class="delete-form">
                        <div class="delete-form__button">                            
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
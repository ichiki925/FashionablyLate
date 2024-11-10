@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contacts/confirm.css') }}">
@endsection



@section('content')

        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Confirm</h2>
            </div>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前
                        <td class="confirm-table__text">
                            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号
                        <td class="confirm-table__text">
                            <input type="tel" name="tell" value="{{ $contact['tell1'] }}-{{ $contact['tell2'] }}-{{ $contact['tell3'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類
                        <td class="confirm-table__text">
                            <input type="text" name="content_type" value="{{ $contact['content_type'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問合せ内容
                        <td class="confirm-table__text">
                            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                        </td>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">
                    送信
                </button>
                <a href="/edit-page-url" class="form__button-edit">修正</a>
            </div>
        </form>
@endsection



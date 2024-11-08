<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo" >
                FashionablyLate
            </div>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                Contact
            </div>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content name-fields">
                    <div class="form__group-content form__group-content--name">
                        <div class="form-input-text name-input">
                            <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                        </div>
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror</div>
                        </div>
                    <div class="form__group-content form__group-content--name">
                        <div class="form-input-text name-input">
                            <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                        </div>
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror</div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="gender-options">
                    <input type="radio" id="male" name="gender" value="male" value="{{ old('gender') }}" checked>
                    <label for="male">男性</label>
                    <input type="radio" id="female" name="gender" value="female" value="{{ old('gender') }}">
                    <label for="female">女性</label>
                    <input type="radio" id="other" name="gender" value="other" value="{{ old('gender') }}">
                    <label for="other">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>

            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="phone-number-input">
                        <input type="tel" name="tell1" maxlength="3" placeholder="080" value="{{ old('tell1') }}"/>
                        <span>-</span>
                        <input type="tel" name="tell2" maxlength="4" placeholder="1234" value="{{ old('tell2') }}"/>
                        <span>-</span>
                        <input type="tel" name="tell3" maxlength="4" placeholder="5678" value="{{ old('tell3') }}"/>
                    </div>
                    <div class="form__error">
                        @error('gender')
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
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
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
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('buiding') }}"/>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__select">
                        <select name="content_type">
                            <option value="" disabled selected>選択してください</option>
                            <option value="type1">商品のお届けについて</option>
                            <option value="type2">商品の交換について</option>
                            <option value="type3">商品トラブル</option>
                            <option value="type3">ショップへのお問合せ</option>
                            <option value="type3">その他</option>
                        </select>
                        <div class="form__error">
                            @error('content_type')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" placeholder="お問合せ内容をご記載ください" value="{{ old('content') }}"></textarea>
                    </div>
                    <div class="form__error">
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </main>
</body>
</html>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__name--box">
                        <div class="form__input--family-name">
                            <input type="text" name="family-name" value="{{ old('family-name') }}" />
                            <p class="form__text--ex">例）山田</p>
                            <div class="form__error">
                                @error('family-name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form__input--first-name">
                            <input type="text" name="first-name" value="{{ old('first-name') }}" />
                            <p class="form__text--ex">例）太郎</p>
                            <div class="form__error">
                                @error('first-name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__group--gender">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__gender-box">
                        <label class="gender__label" for="man">
                            <input class="radio__input" type="radio" id="man" name="gender" value="男性" checked />
                            <span class="radio__text">男性</span>
                        </label>
                        <label class="gender__label--woman" for="woman">
                            <input class="radio__input" type="radio" id="woman" name="gender" value="女性" />
                            <span class="radio__text">女性</span>
                        </label>
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
                            <p class="form__text--ex">例）test@example.com</p>
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
                        <div class="form__input--postal-code">
                            <span class="form__input--postal-mark">〒</span>
                            <input class="form__postal-code" type="text" name="post" value="{{ old('post') }}" />
                            <p class="form__text--ex">例）123-4567</p>
                        </div>
                        <div class="form__error">
                            @error('post')
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
                            <p class="form__text--ex">例）東京都渋谷区千駄ヶ谷1-2-3</p>
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
                            <input type="text" name="type" />
                            <p class="form__text--ex">例）千駄ヶ谷マンション101</p>
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
                            <textarea name="content" value="{{ old('content') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('content')
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
    </main>
</body>

</html>
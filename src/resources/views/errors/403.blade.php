{{--このファイルだけ使用しています。他のエラー関連ファイルは残しておいて大丈夫ですか？--}}
@extends('layouts.app')
@section('title', __('アクセスエラー'))
@section('title', 'ユーザ登録')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection
<body>
    <div class="c-section">
        <div class="c-section__inner">
            <div class="c-section__box">
                <div class="c-section__boxInner p-register__boxInner">
                    <h1 class="c-section__title p-regist__title">
                        アクセスエラー
                    </h1>
                    <p class="c-section__body">アクセス権限がありません。</p>
                    <div class="c-section__btnWrap">
                        <p
                            class="c-btn c-section__btn c-section__btn--small">
                            {{--もとにいたページに戻るようにするか一覧に戻るか迷っています--}}
                            {{--<a href="{{ url()->previous() }}">戻る</a>--}}
                            <a href="{{ route('todos.index') }}">Todo一覧に戻る</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
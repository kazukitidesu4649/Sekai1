@extends('layouts.app')

@section('content')

<!-- 🎬 フルスクリーン動画 -->
<div class="video-container">
    <video autoplay loop muted playsinline>
        <source src="{{ asset('videos/movie1.mp4') }}" type="video/mp4">
        お使いのブラウザは動画タグをサポートしていません。
    </video>
    <!-- キャッチコピーとタイトル -->
    <div class="overlay">
        <img class="catchphrase" src="{{ asset('images/Sekai1_main_title.png') }}"></img>
    </div>
</div>

<!-- 🎼 音符と説明エリア -->
<section class="content">
    <div class="container text-center">
        <h2 class="subtitle">オンリーワンのウェディングを演出します</h2>

        <div class="features">
            <span class="feature-item">✨ 入退場のBGM</span>
            <span class="feature-item">🎥 プロフィールムービーのBGM</span>
            <span class="feature-item">🎤 余興でパフォーマンス</span>
            <span class="feature-item">💿 CDにして引き出物</span>
            <span class="feature-item">🎁 パートナーや両親へのサプライズギフト</span>
            <span class="feature-item">etc...</span>
        </div>

        <p class="description">
            思い出の場所、大切な記念日等、ご自身のエピソードや<br>
            希望の音楽スタイルを事前にヒアリングさせていただき、<br>
            世界に一つのあなただけの楽曲を制作いたします。
        </p>

        <div class="price-box">
            <p class="price-title">Price</p>
            <p class="price-detail">スタンダードプラン 1曲</p>
            <p class="price-amount">¥100,000〜</p>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app', ['ACTIVE_TITLE' => 'FAQ'], ['VIDEO_BACKGROUND' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/TechPlexusDesk.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/TechPlexusPhone.mp4') }}" type="video/mp4">
    </video>
    <div class="m-0 faq-section">
        <div class="content-section">
            <p class="question mt-5 mb-2">What is data mining?</p>
            <p class="answer mb-3">Data mining is the process of analyzing large sets of data to identify patterns, trends, and relationships in the data that can be used to make informed business decisions.</p>
            <p class="question mb-2">What type of data can be mined?</p>
            <p class="answer mb-3">Data mining can be applied to many different types of data, including structured data such as databases and spreadsheets, as well as unstructured data such as text documents, emails, and social media posts.</p>
            <p class="question mb-2">How is data mining different from traditional analytics?</p>
            <p class="answer mb-3">Data mining goes beyond traditional analytics by using machine learning algorithms to uncover hidden patterns and relationships in the data. Traditional analytics typically rely on pre-defined analysis techniques.</p>
            <p class="question mb-2">What kind of businesses can benefit from data mining?</p>
            <p class="answer mb-3">Any business that collects and stores large amounts of data can benefit from data mining. Industries such as retail, finance, healthcare, and telecommunications are especially well-suited to data mining.</p>
            <p class="question mb-2">What are some common applications of data mining?</p>
            <p class="answer mb-5">Data mining is commonly used for customer segmentation, fraud detection, market basket analysis, risk assessment, and predictive modeling. It can also be used for sentiment analysis and text mining to analyze social media posts and other unstructured data.</p>
        </div>

    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}">
@endsection

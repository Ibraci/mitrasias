<!DOCTYPE html>
<html lang="en">
    {{-- head tag --}}
    @include('layouts.partials.head')
    <body>
        {{-- loader --}}
        {{-- @include('layouts.partials.loader') --}}

        <div class="mn-content fixed-sidebar">
            {{-- Header --}}
            <header class="mn-header navbar-fixed">
                <nav class="red darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">
                            <span class="chapter-title">Mitras IAS</span>
                        </div>
                    </div>
                </nav>
            </header>
            {{-- Left sidebar --}}
            @include('layouts.partials.left-sidebar')

            {{-- Main body --}}
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card">
                                {{-- <div class="card-content"> --}}
                        {{-- <main class="mn-inner inner-active-sidebar hidden-fixed-sidebar"> --}}
                            {{-- centent --}}

                            @yield('content')

                        {{-- </main> --}}
                    </div>
                </div>
            </main>
        </div>
    <div class="left-sidebar-hover"></div>



            {{-- footer --}}
            @include('layouts.partials.footer')

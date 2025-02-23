<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">{{ __('dashboard.navigation') }}</li>

        <li>
            <a href="{{ route('admin.dashboard.index') }}">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span> {{ trans_choice('dashboard.dashboard', 1) }} </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> {{ trans_choice('dashboard.blog', 2) }} </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('admin.article.index') }}">{{ trans_choice('dashboard.blog_list', 2) }}</a>
                    <a href="{{ route('admin.article-category.index') }}">{{ trans_choice('dashboard.blog_category', 2) }}</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="far fa-images"></i></span>
                <span> {{ trans_choice('dashboard.portfolio', 2) }} </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('admin.portfolio.index') }}">{{ trans_choice('dashboard.portfolio_list', 2) }}</a>
                    <a href="{{ route('admin.portfolio-category.index') }}">{{ trans_choice('dashboard.portfolio_category', 2) }}</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.service.index') }}">
                <span class="icon"><i class="fas fa-tools"></i></span>
                <span> {{ trans_choice('dashboard.service', 2) }} </span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pricing.index') }}">
                <span class="icon"><i class="fas fa-tags"></i></span>
                <span> {{ trans_choice('dashboard.pricing', 2) }} </span>
            </a>
        </li>



        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-question-circle"></i></span>
                <span> {{ trans_choice('dashboard.faq', 2) }} </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('admin.faq.index') }}">{{ trans_choice('dashboard.faq_list', 2) }}</a>
                    <a href="{{ route('admin.faq-category.index') }}">{{ trans_choice('dashboard.faq_category', 2) }}</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.slider.index') }}">
                <span class="icon"><i class="fas fa-photo-video"></i></span>
                <span> {{ trans_choice('dashboard.slider', 2) }} </span>
            </a>
        </li>



        <li>
            <a href="{{ route('admin.testimonial.index') }}">
                <span class="icon"><i class="fas fa-comments"></i></span>
                <span> {{ trans_choice('dashboard.testimonial', 2) }} </span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.work-process.index') }}">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span> {{ trans_choice('dashboard.work_process', 2) }} </span>
            </a>
        </li>





        <li>
            <a href="{{ route('admin.contact.index') }}">
                <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                <span> {{ trans_choice('dashboard.email', 2) }} </span>
            </a>
        </li>



        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-file"></i></span>
                <span> {{ trans_choice('dashboard.page', 2) }} </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>

                    <a href="{{ route('admin.page.index') }}">{{ trans_choice('dashboard.footer_page', 2) }}</a>
                    <a href="{{ route('admin.section.index') }}">{{ trans_choice('dashboard.section', 2) }}</a>
                    <a href="{{ route('admin.about.index') }}">{{ trans_choice('dashboard.about', 2) }}</a>
                </li>
            </ul>
        </li>



        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-cog"></i></span>
                <span> {{ trans_choice('dashboard.setting', 2) }} </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('admin.setting.index') }}">{{ trans_choice('dashboard.general_setting', 2) }}</a>

                    <a href="{{ route('admin.livechat.index') }}">{{ trans_choice('dashboard.live_chat', 2) }}</a>
                </li>
            </ul>
        </li>

    </ul>

</div>
<!-- End Sidebar -->
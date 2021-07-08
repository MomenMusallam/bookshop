<nav class="sidebar-nav">
    <ul id="sidebarnav" class="p-t-30">
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="mdi mdi-book-minus"></i><span class="hide-menu">Books</span></a></li> -->
        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Categories -->
    {{--                        </span></a></li>--}}
    <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Authores</span></a></li> -->
        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="fas fa-building"></i><span class="hide-menu">Bublishing Houses</span></a></li> -->
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-minus"></i><span class="hide-menu">Books </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="{{url('admin/books')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu"> All Books </span></a></li>
                <li class="sidebar-item"><a href="{{url('admin/book/add')}}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Add Now Book </span></a></li>
            </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Authores </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="{{url('admin/authors')}}" class="sidebar-link"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> All Authores </span></a></li>
                <li class="sidebar-item"><a href="{{url('admin/author/add')}}" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Add Now Authores </span></a></li>
            </ul>
        </li>

        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-building"></i><span class="hide-menu">Bublishing Houses </span></a>
        <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item"><a href="{{url('admin/publishinghouses')}}" class="sidebar-link"><i class="mdi mdi-city"></i><span class="hide-menu"> All Bublishing Houses </span></a></li>
            <li class="sidebar-item"><a href="{{url('admin/publishinghouse/add')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Now Bublishing Houses </span></a></li>
        </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Categories </span></a>
            <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="{{url('admin/categories')}}" class="sidebar-link"><i class="fas fa-list-ul"></i><span class="hide-menu"> All Categories </span></a></li>
                <li class="sidebar-item"><a href="{{url('admin/category/add')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Now Categories </span></a></li>
            </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="ti-user m-r-5 m-l-5"></i><span class="hide-menu">Profile</span></a></li>

    </ul>
</nav>

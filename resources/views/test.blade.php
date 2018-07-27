
<!DOCTYPE html>
<html lang="en" >
<head>
    <title>Viewing Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="EWncx8IR67jmFWRgS2BTWoH1WopLEM7XNcYDbzjb"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://voyager.git/vendor/tcg/voyager/assets/images/logo-icon.png" type="image/x-icon">



    <!-- App CSS -->
    <link rel="stylesheet" href="http://voyager.git/vendor/tcg/voyager/assets/css/app.css">

        
    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .voyager .side-menu .navbar-header {
            background:#22A7F0;
            border-color:#22A7F0;
        }
        .widget .btn-primary{
            border-color:#22A7F0;
        }
        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#22A7F0;
        }
        .voyager .breadcrumb a{
            color:#22A7F0;
        }
    </style>

    
    </head>

<body class="voyager categories">

<div id="voyager-loader">
                <img src="http://voyager.git/vendor/tcg/voyager/assets/images/logo-icon.png" alt="Voyager Loader">
    </div>


<div class="app-container">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
                        <ol class="breadcrumb hidden-xs">
                                    <li class="active">
                        <a href="http://voyager.git/admin"><i class="voyager-boat"></i> Dashboard</a>
                    </li>
                                                                                                                                                
                                                    <li>Categories</li>
                        
                                                </ol>
                    </div>
        <ul class="nav navbar-nav  navbar-right ">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                   aria-expanded="false"><img src="http://voyager.git/storage/users/default.png" class="profile-img"> <span
                            class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="http://voyager.git/storage/users/default.png" class="profile-img">
                        <div class="profile-body">
                            <h5>Admin</h5>
                            <h6>admin@admin.com</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                                                                                <li class="class-full-of-rum">
                                                <a href="http://voyager.git/admin/profile" >
                                                        <i class="voyager-person"></i>
                                                        Profile
                        </a>
                                            </li>
                                        <li >
                                                <a href="/" target="_blank">
                                                        <i class="voyager-home"></i>
                                                        Home
                        </a>
                                            </li>
                                        <li >
                                                <form action="http://voyager.git/admin/logout" method="POST">
                            <input type="hidden" name="_token" value="EWncx8IR67jmFWRgS2BTWoH1WopLEM7XNcYDbzjb">
                            <button type="submit" class="btn btn-danger btn-block">
                                                                <i class="voyager-power"></i>
                                                                Logout
                            </button>
                        </form>
                                            </li>
                                                        </ul>
            </li>
        </ul>
    </div>
</nav>
        <div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://voyager.git/admin">
                    <div class="logo-icon-container">
                                                                            <img src="http://voyager.git/vendor/tcg/voyager/assets/images/logo-icon-light.png" alt="Logo Icon">
                                            </div>
                    <div class="title">Voyager</div>
                </a>
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background-image:url(http://voyager.git/vendor/tcg/voyager/assets/images/bg.jpg); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="http://voyager.git/storage/users/default.png" class="avatar" alt="Admin avatar">
                    <h4>Admin</h4>
                    <p>admin@admin.com</p>

                    <a href="http://voyager.git/admin/profile" class="btn btn-primary">Profile</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>

        <ul class="nav navbar-nav">


    
    <li class="">
        <a href="http://voyager.git/admin" target="_self" style="color:">
            <span class="icon voyager-boat"></span>
            <span class="title">Dashboard</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/roles" target="_self" style="color:">
            <span class="icon voyager-lock"></span>
            <span class="title">Roles</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/users" target="_self" style="color:">
            <span class="icon voyager-person"></span>
            <span class="title">Users</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/media" target="_self" style="color:">
            <span class="icon voyager-images"></span>
            <span class="title">Media</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/posts" target="_self" style="color:">
            <span class="icon voyager-news"></span>
            <span class="title">Posts</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/pages" target="_self" style="color:">
            <span class="icon voyager-file-text"></span>
            <span class="title">Pages</span>
        </a>
            </li>
    
    <li class="active">
        <a href="http://voyager.git/admin/categories" target="_self" style="color:">
            <span class="icon voyager-categories"></span>
            <span class="title">Categories</span>
        </a>
            </li>
    
    <li class="dropdown">
        <a href="#5-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:">
            <span class="icon voyager-tools"></span>
            <span class="title">Tools</span>
        </a>
                    <div id="5-dropdown-element" class="panel-collapse collapse ">
                <div class="panel-body">
                    <ul class="nav navbar-nav">


    
    <li class="">
        <a href="http://voyager.git/admin/menus" target="_self" style="color:">
            <span class="icon voyager-list"></span>
            <span class="title">Menu Builder</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/database" target="_self" style="color:">
            <span class="icon voyager-data"></span>
            <span class="title">Database</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/compass" target="_self" style="color:">
            <span class="icon voyager-compass"></span>
            <span class="title">Compass</span>
        </a>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/bread" target="_self" style="color:">
            <span class="icon voyager-bread"></span>
            <span class="title">BREAD</span>
        </a>
            </li>
    
</ul>
                </div>
            </div>
            </li>
    
    <li class="">
        <a href="http://voyager.git/admin/settings" target="_self" style="color:">
            <span class="icon voyager-settings"></span>
            <span class="title">Settings</span>
        </a>
            </li>

</ul>

    </nav>
</div>
        <script>
            (function(){
                    var appContainer = document.querySelector('.app-container'),
                        sidebar = appContainer.querySelector('.side-menu'),
                        navbar = appContainer.querySelector('nav.navbar.navbar-top'),
                        loader = document.getElementById('voyager-loader'),
                        hamburgerMenu = document.querySelector('.hamburger'),
                        sidebarTransition = sidebar.style.transition,
                        navbarTransition = navbar.style.transition,
                        containerTransition = appContainer.style.transition;

                    sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition =
                    appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition =
                    navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = 'none';

                    if (window.localStorage && window.localStorage['voyager.stickySidebar'] == 'true') {
                        appContainer.className += ' expanded no-animation';
                        loader.style.left = (sidebar.clientWidth/2)+'px';
                        hamburgerMenu.className += ' is-active no-animation';
                    }

                   navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = navbarTransition;
                   sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition = sidebarTransition;
                   appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = containerTransition;
            })();
        </script>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">
                    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-categories"></i> Categories
        </h1>
                    <a href="http://voyager.git/admin/categories/create" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>Add New</span>
            </a>
                            <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Bulk Delete</span></a>


<div class="modal modal-danger fade" tabindex="-1" id="bulk_delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <i class="voyager-trash"></i> Are you sure you want to delete <span id="bulk_delete_count"></span> <span id="bulk_delete_display_name"></span>?
                </h4>
            </div>
            <div class="modal-body" id="bulk_delete_modal_body">
            </div>
            <div class="modal-footer">
                <form action="http://voyager.git/admin/categories/0" id="bulk_delete_form" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="EWncx8IR67jmFWRgS2BTWoH1WopLEM7XNcYDbzjb">
                    <input type="hidden" name="ids" id="bulk_delete_input" value="">
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                             value="Yes, Delete These categories">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                    Cancel
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
window.onload = function () {
    // Bulk delete selectors
    var $bulkDeleteBtn = $('#bulk_delete_btn');
    var $bulkDeleteModal = $('#bulk_delete_modal');
    var $bulkDeleteCount = $('#bulk_delete_count');
    var $bulkDeleteDisplayName = $('#bulk_delete_display_name');
    var $bulkDeleteInput = $('#bulk_delete_input');
    // Reposition modal to prevent z-index issues
    $bulkDeleteModal.appendTo('body');
    // Bulk delete listener
    $bulkDeleteBtn.click(function () {
        var ids = [];
        var $checkedBoxes = $('#dataTable input[type=checkbox]:checked').not('.select_all');
        var count = $checkedBoxes.length;
        if (count) {
            // Reset input value
            $bulkDeleteInput.val('');
            // Deletion info
            var displayName = count > 1 ? 'Categories' : 'Category';
            displayName = displayName.toLowerCase();
            $bulkDeleteCount.html(count);
            $bulkDeleteDisplayName.html(displayName);
            // Gather IDs
            $.each($checkedBoxes, function () {
                var value = $(this).val();
                ids.push(value);
            })
            // Set input value
            $bulkDeleteInput.val(ids);
            // Show modal
            $bulkDeleteModal.modal('show');
        } else {
            // No row selected
            toastr.warning('You haven&#039;t selected anything to delete');
        }
    });
}
</script>
                                            </div>
                <div id="voyager-notifications"></div>
                    <div class="page-content browse container-fluid">
        <div class="alerts">
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                                                <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                                                                    <th>
                                                <input type="checkbox" class="select_all">
                                            </th>
                                                                                                                        <th>
                                                                                        Order
                                                                                    </th>
                                                                                <th>
                                                                                        Name
                                                                                    </th>
                                                                                <th>
                                                                                        Slug
                                                                                    </th>
                                                                                <th class="actions text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                                            </td>
                                                                                                                            <td>
                                                                                                                                                                                                        <div class="readmore">1</div>
                                                                                            </td>
                                                                                    <td>
                                                                                                                                                                                                        <div class="readmore">Category 1</div>
                                                                                            </td>
                                                                                    <td>
                                                                                                                                                                                                        <div class="readmore">category-1</div>
                                                                                            </td>
                                                                                <td class="no-sort no-click" id="bread-actions">
                                                                                            <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete"data-id="1"id="delete-1">
            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
        </a>
                                                                                                <a href="http://voyager.git/admin/categories/1/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
        </a>
                                                                                                <a href="http://voyager.git/admin/categories/1" title="View" class="btn btn-sm btn-warning pull-right view">
            <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
        </a>
                                                                                        </td>
                                    </tr>
                                                                        <tr>
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_2" value="2">
                                            </td>
                                                                                                                            <td>
                                                                                                                                                                                                        <div class="readmore">1</div>
                                                                                            </td>
                                                                                    <td>
                                                                                                                                                                                                        <div class="readmore">Category 2</div>
                                                                                            </td>
                                                                                    <td>
                                                                                                                                                                                                        <div class="readmore">category-2</div>
                                                                                            </td>
                                                                                <td class="no-sort no-click" id="bread-actions">
                                                                                            <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete"data-id="2"id="delete-2">
            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
        </a>
                                                                                                <a href="http://voyager.git/admin/categories/2/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
        </a>
                                                                                                <a href="http://voyager.git/admin/categories/2" title="View" class="btn btn-sm btn-warning pull-right view">
            <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
        </a>
                                                                                        </td>
                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                                            </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this category?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="EWncx8IR67jmFWRgS2BTWoH1WopLEM7XNcYDbzjb">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it!">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i> by <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a>
                                    - v1.1.3
            </div>
</footer>

<!-- Javascript Libs -->


<script type="text/javascript" src="http://voyager.git/vendor/tcg/voyager/assets/js/app.js"></script>


<script>
    
    </script>
    <!-- DataTables -->
        <script>
        $(document).ready(function () {
                            var table = $('#dataTable').DataTable({"order":[],"language":{"sEmptyTable":"No data available in table","sInfo":"Showing _START_ to _END_ of _TOTAL_ entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","sInfoFiltered":"(filtered from _MAX_ total entries)","sInfoPostFix":"","sInfoThousands":",","sLengthMenu":"Show _MENU_ entries","sLoadingRecords":"Loading...","sProcessing":"Processing...","sSearch":"Search:","sZeroRecords":"No matching records found","oPaginate":{"sFirst":"First","sLast":"Last","sNext":"Next","sPrevious":"Previous"},"oAria":{"sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending"}},"columnDefs":[{"targets":-1,"searchable":false,"orderable":false}]});
            
                        $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked'));
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = 'http://voyager.git/admin/categories/__id'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });
    </script>


</body>
</html>

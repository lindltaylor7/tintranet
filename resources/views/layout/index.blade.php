<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper  theme-1-active pimary-color-blue">
    <!-- Top Menu Items -->
    @include('layout.header')
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    @include('layout.sidebar')
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    @include('layout.rightbar')
    <!-- /Right Sidebar Menu -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <!-- Row -->
            <div class="row">
                @include('layout.components.estado_tareas')
				@include('layout.components.item_pendientes')
                @include('layout.components.mis_estadisticas')
            </div>
            @include('layout.components.tablaindex')
            <!-- /Row -->

            <!-- Row -->
            
        </div>

        <!-- Footer -->
        @include('layout.footer')
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

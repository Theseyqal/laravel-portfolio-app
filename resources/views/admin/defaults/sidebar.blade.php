<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Home section</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('admin.view.home')}}"
                >
            <i class="fa fa-circle-o"></i>View Home Details</a>

        <li>
            <a href={{route('admin.add.home') }}>
            <i class="fa fa-circle-o"></i>Add Home Details
            </a>
        </li>
      </ul>

      <li class="treeview">
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Experience Section</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('admin.view.experience')}}"
                >
            <i class="fa fa-circle-o"></i>View Experience Details</a>

        <li>
            <a href={{route('admin.add.experience') }}>
            <i class="fa fa-circle-o"></i>Add Experience Details
            </a>
        </li>
      </ul>

      <li class="treeview">

        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>About Section</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{route('admin.view.about')}}"
            >
        <i class="fa fa-circle-o"></i>View About Details</a>

    <li>
        <a href={{route('admin.add.about') }}>
        <i class="fa fa-circle-o"></i>Add About Details
        </a>
    </li>
  </ul>

   <li class="treeview">

        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Project Section</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{route('admin.view.project')}}"
            >
        <i class="fa fa-circle-o"></i>View Project Details</a>

    <li>
        <a href={{route('admin.add.project') }}>
        <i class="fa fa-circle-o"></i>Add Project Details
        </a>
    </li>
  </ul>
<li class="treeview">

        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Contact Section</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{route('admin.view.contact')}}"
            >
        <i class="fa fa-circle-o"></i>View Contact Details</a>

    <li>
        <a href={{route('admin.add.contact') }}>
        <i class="fa fa-circle-o"></i>Add Contact Details
        </a>
    </li>

  </ul>
  <li class="treeview">

        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Contact Form Section</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{route('admin.view.contact.form')}}"
            >
        <i class="fa fa-circle-o"></i>View Contact Form Details</a>

</ul>
<li class="treeview">

        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Home</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{route('welcome')}}"
            >
        <i class="fa fa-circle-o"></i>Home</a>

  </ul>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

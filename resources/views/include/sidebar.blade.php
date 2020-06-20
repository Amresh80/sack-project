<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">

          <img src="{{ Session::get('photo') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{-- $request->session()->regenerate() --}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
     <li class="active treeview">
      <li><a href="{{ route('admin.gweuser') }}">
        <i class="fa fa-circle-o"></i>Gwe Users</a></li>
      <li><a href="{{ route('admin.professionlist') }}">
       <i class="fa fa-circle-o"></i>Gwe Professions</a></li>
       <li><a href="{{ route('admin.spllist') }}">
        <i class="fa fa-circle-o"></i>Gwe Specializations</a></li>
       <li><a href="{{ route('admin.srvlist') }}">
        <i class="fa fa-circle-o"></i>Gwe Services</a></li>       
       <li><a href="{{ route('admin.oprlist') }}">
        <i class="fa fa-circle-o"></i>Gwe Opportunity</a></li>
       <li><a href="{{ route('admin.proposallist') }}">
        <i class="fa fa-circle-o"></i>Gwe Proposal</a></li>
       <li><a href="{{ route('admin.rating_review_list') }}">
        <i class="fa fa-circle-o"></i>Gwe Rating/Review </a></li>
        <li><a href="{{ route('admin.kyclist') }}">
        <i class="fa fa-circle-o"></i>Gwe KYC </a></li>
        <li><a href="{{ route('admin.wallet') }}">
        <i class="fa fa-circle-o"></i>Gwe Wallet</a></li> 
        <li><a href="{{ route('admin.projects') }}">
        <i class="fa fa-circle-o"></i>Gwe Projects</a></li> 
        <li><a href="{{ route('admin.fund_list') }}">
        <i class="fa fa-circle-o"></i>Gwe Funds</a></li>
        <li><a href="{{ route('admin.transaction_list') }}">
        <i class="fa fa-circle-o"></i>User Transactions</a></li>
        <li><a href="{{ route('admin.payment_list') }}">
        <i class="fa fa-circle-o"></i>Payment</a></li>
                     
     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
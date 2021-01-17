<nav class="navbar white">
          <div class="nav-wrapper"><a href="dashboard.php" class="brand-logo grey-text text-darken-4"><i class="material-icons">home</i></a>
          	<span  id="px-breadcrumb">
		      	<script type="text/template" id="tmp_breadcrumbs">
		        	<a href="<%= url %>" class="breadcrumb"> <%= title %></a>
		      	</script>


		      </span>
            <ul id="nav-mobile" class="right">
              
              <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect waves-light"><i class="material-icons">email</i> <span class="new-badge">0</span></a> </li>
              <!-- <li><a href="#!" data-target="chat-dropdown" class="dropdown-trigger waves-effect"><i class="material-icons">settings</i></a></li> -->
            </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
</nav>

<style>
	.breadcrumb{ font-size: 14px!important; color: #333!important }
	.breadcrumb:before{ color: rgba(0,0,0,.5) }
	.new-badge{ position: absolute; width: 18px; height: 18px; top:10px; right:5px; background: red; color: white; border-radius: 100px; line-height: 18px; text-align: center; font-size: 12px }
</style>
 
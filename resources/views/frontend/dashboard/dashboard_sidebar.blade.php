<div class="widget-content">
    <ul class="category-list ">

<li class="current">  <a href="{{route('dashboard')}}"><i class="fab fa fa-envelope "></i> Dashboard </a></li>


<li><a href="{{route('profile.user')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
<li><a href=""><i class="fa fa-credit-card" aria-hidden="true"></i>Schedule Request <span class="badge badge-info">(  )</span></a></li>
<li><a href=""><i class="fa fa-list-alt" aria-hidden="true"></i></i> Compare </a></li>
<li><a href=""><i class="fa fa-indent" aria-hidden="true"></i> WishList  </a></li>
<li><a href=""><i class="fa fa-indent" aria-hidden="true"></i> Live Chat  </a></li>
<li><a href=""><i class="fa fa-key" aria-hidden="true"></i> Security </a></li>

    <form action="{{ route('profile.user.destroy') }}" method="POST">
        @csrf
        <li> <a :href="#"
            onclick="event.preventDefault();
                        this.closest('form').submit();" style="cursor: pointer"><i class="fa fa-key" aria-hidden="true"></i> Security </a></li>
    </form>

    </ul>
</div>

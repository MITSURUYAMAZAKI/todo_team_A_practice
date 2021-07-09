<header>
    <span class="header-left">ToDo_team_A</span>
    <button type="button" class="btn js-btn">
        <span class="btn-line" id="drawer_toggle">≡</span>
    </button>
    <nav id="global_nav">
        <ul>
            <li><a href="#">sign in</a></li>
            <li><a href="#">Create</a></li>
            <li><form class="form-inline">
                <input class="form" type="search" placeholder="word" aria-label="Search" name="title">
                <button class="search" type="submit">Search</button>
            </form></li>
        </ul>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script>
		$(function(){
			// 1. 上からスライド
			// $("#drawer_toggle").click(function(){
			// 	$(this).toggleClass("open");
			// 	$("#global_nav").slideToggle();
			// });
			
			// 2. フェードイン
			$("#drawer_toggle").click(function(){
				$(this).toggleClass("open");
				$("#global_nav").fadeToggle();
			});

			// 3. 横からスライド
			// $("#drawer_toggle").click(function(){
			// 	$(this).toggleClass("open");
			// 	$("#global_nav").toggleClass("sp_open");
			// });
		});
	</script>
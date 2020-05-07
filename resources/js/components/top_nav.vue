<template>
		<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
			<i class="fas fa-share-square text-primary d-md-none" id="menu-toggle" style="font-size:20px;"></i>
			<div class="sidebar-heading">
				<a href="https://africlaim.com"><img :src="'/img/africlaim_logo.png'" alt=""></a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">FAQ</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Info
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Contact Us</a>
							<a class="dropdown-item" href="#">About Us</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
</template>
<script>
export default {

}
</script>

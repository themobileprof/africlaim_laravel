<template>
	<div id="app">
		<form class="form-wrapper">
				<router-view></router-view>
		</form>
	</div>
</template>
<script>
export default {
	updated() {
		document.body.scrollTop = document.body.scrollHeight;
	}
}
</script>

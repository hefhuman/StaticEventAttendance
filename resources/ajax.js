$(document).ready(function() {
			setInterval(function () {
				$('#list').load('./resources/DisplayList.php')
			}, 100);
		});

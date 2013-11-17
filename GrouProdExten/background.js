
	var arr1 = new Array();
	chrome.tabs.query({}, function(tabs) {
		for (var k = 0; k < tabs.length; k++)
		{
		arr1[k] = tabs[k];
		}
		for (var k = 0; k < tabs.length; k++)
		{
		if (arr1[k] != null)
		window.console.log(arr1[k].url)
		else
		{
			window.console.log("what");
		}
		}
	});
	function modify() {
		window.console.log("clicked");
		}
	// document.addEventListener('DOMContentLoaded', function() {
	// 	var button1 = document.getElementById("button1");
	// 	var button2 = document.getElementById("button2");
	// 		button1.addEventListener('click', modify(),false);
	// 	});
	

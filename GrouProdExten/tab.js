		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('button2').addEventListener('click', function (e) {
				e.preventDefault();
				console.log('disconnecting from the server');
				p = 0;
				var req = new XMLHttpRequest();
				var user = document.getElementById('id').value;
				req.open("GET", "http://169.254.241.244/HackDuke/DeleteUser.php?usera=" + user,true);
				req.send();
				console.log('disconnected from the server');
				});
			});
			

		document.addEventListener('DOMContentLoaded', function() {
		document.getElementById('button1').addEventListener('click', function (e) 
			{
				e.preventDefault();
				console.log('YAY!!!');
				var j = 0;
				var p = 10^100;				
				var user = document.getElementById('id').value;
				var req = new XMLHttpRequest();
				req.open("GET", "http://169.254.241.244/HackDuke/CreateTable.php?usera=" + user,true);
				req.send();
				
				var verisessionid=0;
				var sessionid=0;
				var killswitch=0;
				var firsttime = 1;
				setInterval(function () 
					{
						j++;
						if (j<p)
							{
							console.log('interval initialized');
							var arr2 = new Array(); // reestablish/clear the array for tab data
							chrome.tabs.query({}, function(tabs) 
								{
									var ansout= "";
									var delim = "~~";
									var newans2 = "";
									for (var k = 0; k < tabs.length; k++)
										{
											arr2[k] = tabs[k];
										}
									/*for (var k = 1; k < tabs.length - 1; k++)
										{
											if (tabs[k-1] != null)
												{
											console.log('hi');
											window.console.log(tabs[k-1].url)
											console.log('bye');
												}
											else
												{
													window.console.log("what");
												}
										}*/
										sessionid=0;
									for(var looper=0;looper<=arr2.length-1;looper++)
										{
											newans2 = newans2 + ansout.concat(delim);
											newans2 = newans2 + ansout.concat(tabs[looper].url);
											sessionid=sessionid+tabs[looper].index;
										}
										
									console.log(newans2);
									console.log(j);
									if((verisessionid!=sessionid) || (firsttime == 1))
										{
											window.console.log("change detected");
											window.console.log(verisessionid);
											window.console.log(sessionid);
											var req2 = new XMLHttpRequest();
											req2.open("GET", "http://169.254.241.244/HackDuke/ChangeIt.php?usera="+user+"&urls="+newans2,true);
											req2.send();
											firsttime = 0;
										}
									verisessionid=sessionid;
								}			
								);
							var xmlhttp = new XMLHttpRequest();						
							window.console.log('ploop');
							xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState==4 && xmlhttp.status==200) {
								killswitch=xmlhttp.responseText;
								window.console.log(killswitch);
								var pos = killswitch.indexOf('0');
								window.console.log(pos)
								chrome.tabs.query({}, function(tabs) 
								{
										while (pos> -1)
											{
											window.console.log('leaveeee');
											pos = parseInt(pos);
											chrome.tabs.remove(tabs[pos].id);
											pos=killswitch.indexOf('0',pos+1);
											}
											});
								}
							}
							xmlhttp.open("GET", "http://169.254.241.244/HackDuke/KillItCheck.php?usera=" + user, true);
							xmlhttp.send();

							}
					}, 5000);  //sets it so that each loop has to wait 5000 milliseconds before next iteration
						//console.log(user);
					
			}
			
			);
			});

			
	

	
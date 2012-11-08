<% if ShowCookieBar %>
	<% with SiteConfig %>
		<div id="cookieBar">
			<div class="container">
				<div class="description typography">
					<% if CookieImage %>
						$CookieImage.SetHeight(80)
					<% end_if %>
                    
                    <p class="intro"><strong>$CookieBarTitle</strong> <a href="#" class="more">Show more</a></p>
                    
					<div class="content">
					   $CookieBarContent
					</div>
				</div>
				<div class="links">
					<a id="acceptCookies" href="$Top.AcceptCookiesLink">$CookieCloseText</a>
					<% if CookiePage %>
						<a href="$CookiePage.Link" class="infoLink">$CookieMoreText</a>
					<% end_if %>
				</div>
				<div class="clear"><!-- --></div>
			</div>
		</div>
	<% end_with %>
<% end_if %>


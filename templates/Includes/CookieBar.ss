<% if ShowCookieBar %>
	<% control SiteConfig %>
		<div id="cookieBar">
			<div class="cookieContent">
				<div class="description typography">
					<% if CookieImage %>
						$CookieImage.SetHeight(78)
					<% end_if %>

					$CookieBarContent
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
	<% end_control %>
<% end_if %>


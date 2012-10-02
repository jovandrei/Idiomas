
<head>
		<style type="text/css">
			
			span[id^="word"]
				{float:left; margin:3px; padding:3px; border:1px none #999999; color:#333333;}
				
			span[id^="place"]
				{float:left; margin:0px; width: 50px; height: 30px; padding:0px; border:1px solid #999999; color:#333333;}
			
			.pics, .nums
				{clear:both; text-align:center;}
		</style>
		
		<script type="text/javascript">
			//function called when drag starts
			function dragIt(theEvent) {
				//tell the browser what to drag
				theEvent.dataTransfer.setData("Text", theEvent.target.id);
			}

			//function called when element drops
			function dropIt(theEvent) {
				//get a reference to the element being dragged
				var theData = theEvent.dataTransfer.getData("Text");
				//get the element
				var theDraggedElement = document.getElementById(theData);
				//add it to the drop element
				theEvent.target.appendChild(theDraggedElement);
				//instruct the browser to allow the drop
				theEvent.preventDefault();
			}
		</script>
	</head>
	
	
<div id="main"><!-- this encompasses the entire Web site -->

	<?php include('header.php');?>
	
	<div class="container">
	
<div id="content">
	
<div class="equal_height">
	
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	
<div class="blog_subhead">
	 
	<div class="blog_icon">
		
		<a href="#" title="The Conversation: A blog from Livemocha">
			<img src="http://www.her.itesm.mx/informatica/cib/images/tecDock.png" alt="Livemocha Blog"></a>
		
	</div>
	
	<div class="blog_title">
		
		<h1><a href="#" title="The Conversation: A blog from Livemocha">Andrei Tapia</a> <span class="smaller">A01162843 (Student)</span></h1>
		
	</div>
	
</div>
	
<div class="blog_subnav">
	
	<div class="map_small"></div>
	
	<h3>Drag & Drop, Multiple Choice, Select the word and many other exercises in one place.</h3>
		<?php
		/* 
	<ul id="tab_wrapper" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top"><a href="#tabs-1">Unit 1</a></li>
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-2" id="tabs2">Unit 2</a></li>
		<li class="ui-state-default ui-corner-top"><a href="#tabs-3" id="tabs3">Unit 3</a></li>
	</ul>
	
	*/
	?>
</div>

	<div id="tabs-1" class="tabs-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide2">
		
				
			<div class="post-single">
			
			<div class="post-single-border-none"></div>
				
				<h1 class="archive"><a href="#" title="Drag & Drop">Drag & Drop exercises</a></h1>
				
				<div class="post-meta">
					<p>
						Created by <a href="#" title="Posts by Jose Luis" rel="author">Jose Luis</a> on September 28, 2012 
											</p>
				</div><!--.postMeta-->
				
				<div class="comment-blob comment-blob-archive">
					<a href="#" title="Comment on Saturday Morning Music – Celebrating China" data-disqus-identifier="7076 http://livemocha.com/?p=7076">1 Comment</a>				</div>
				
				<div class="line"></div>
				
				<div class="post-content">
					<div class="clear"></div>
					<p>&nbsp;</p>

					<p>Complete the sentences using one of the following Relative pronouns &nbsp;
					<a href="#" class="read-more">read more</a></p>
					<p>&nbsp;</p>
							
							<div class="pics"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			
			<span draggable="true" ondragstart="dragIt(event);" id="word">
				who
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word2">
				where
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word3">
				when
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word4">
				which
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word5">
				that
			</span>
		</div>
		
		
		<div class="nums"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			<span id="word">Columbus would never have made it to Asia,</span>
			<span id="place"></span>
			<span id="word">was farther away than he expected</span>
			
		</div>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div class="pics"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			
			<span draggable="true" ondragstart="dragIt(event);" id="word">
				who
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word2">
				where
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word3">
				when
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word4">
				which
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word5">
				that
			</span>
		</div>
		
		<div class="nums"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			<span id="word">Pick colors</span>
			<span id="place"></span>
			<span id="word">are silly, and your house and your house will seem flat and featureless.</span>
			
			
		</div>
		
						</div>	
					</div><!--.post-single-->
			
			
		    <script type="text/javascript">
    // <![CDATA[
        var disqus_shortname = 'livemocha';
        (function () {
            var nodes = document.getElementsByTagName('span');
            for (var i = 0, url; i < nodes.length; i++) {
                if (nodes[i].className.indexOf('dsq-postid') != -1) {
                    nodes[i].parentNode.setAttribute('data-disqus-identifier', nodes[i].getAttribute('rel'));
                    url = nodes[i].parentNode.href.split('#', 1);
                    if (url.length == 1) { url = url[0]; }
                    else { url = url[1]; }
                    nodes[i].parentNode.href = url + '#disqus_thread';
                }
            }
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
                        s.src = 'http' + '://' + 'disqus.com/forums/' + disqus_shortname + '/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    //]]>
    </script>
		
		<div id="appendto10"></div>
		
		
	</div>
	
	<div id="tabs-2" class="tabs-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
		
		<div id="appendteachersto0">
	
		<div class="post-single">
			
			<div class="post-single-border-none"></div>
				
				<h1 class="archive"><a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/" title="10 Tips on How to Become a Hyperpolyglot">10 Tips on How to Become a Hyperpolyglot</a></h1>
				
				<div class="post-meta">
					<p>
						Posted by <a href="http://livemocha.com/blog/author/kelly/" title="Posts by Kelly Doscher" rel="author">Kelly Doscher</a> on July 27, 2012 
											</p>
				</div><!--.postMeta-->
				
				<div class="comment-blob comment-blob-archive">
					<a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/#comments" title="Comment on 10 Tips on How to Become a Hyperpolyglot"><span class="dsq-postid" rel="4785 http://livemocha.com/?p=4785">18<br>Comments</span></a>				</div>
				
				<div class="line"></div>
				
				<div class="post-content">
					<div class="social_wrapper">
<div id="sap_facebook">
   <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=267673586580102" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowtransparency="true"></iframe>
</div>
<div id="sap_twitter">
	
	<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1347008535.html#_=1348971810226&amp;count=horizontal&amp;id=twitter-widget-30&amp;lang=en&amp;original_referer=http%3A%2F%2Flivemocha.com%2Fblog%2F&amp;size=m&amp;text=Livemocha%20-%20Blog&amp;url=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F" class="twitter-share-button twitter-count-horizontal" style="width: 110px; height: 20px; " title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
</div>
<div id="sap_google">
    <g:plusone size="medium" href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/"></g:plusone>
</div>
<div id="sap_pinterest">
    <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','http://pinterest.com']);" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
</div>
</div><div class="clear"></div><p>This is so cool. We have a hyper polyglot in our midst! Geraldine contacted us wanting to contribute to the Livemocha Blog. How lucky are we that she has shared her tips on how to learn multiple languages (at this point she’s got about six under her belt!)</p>
<p>&nbsp;</p>
<p>Here’s Geraldine in her own words:</p>
<p>&nbsp;</p>
<p>Hello Livemocha!! I am Geraldine from Bogotá, Colombia.</p>
<p>I was exposed to Spanish and English at a young age (I lived in the States for 4 years) which was a challenge. I could understand everything my parents asked or told me in Spanish but would only answer back in English. Nonetheless, I became fluent once we were back in our home country.</p>
<p>I came to study languages by chance…. &nbsp;<a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/" class="read-more">read more</a></p>
				</div>
				
		</div><!--.post-single-->

		
		
	
<div id="appendteachersto10"></div>
</div>
		<p><a href="#" id="anothert" style="display: inline; ">View Older Posts</a></p>
			
	</div>
		
	<div id="tabs-3" class="tabs-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
		
		<div id="appendteachersto0">
	
		<div class="post-single">
			
			<div class="post-single-border-none"></div>
				
				<h1 class="archive"><a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/" title="10 Tips on How to Become a Hyperpolyglot">10 Tips on How to Become a Hyperpolyglot</a></h1>
				
				<div class="post-meta">
					<p>
						Posted by <a href="http://livemocha.com/blog/author/kelly/" title="Posts by Kelly Doscher" rel="author">Kelly Doscher</a> on July 27, 2012 
											</p>
				</div><!--.postMeta-->
				
				<div class="comment-blob comment-blob-archive">
					<a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/#comments" title="Comment on 10 Tips on How to Become a Hyperpolyglot"><span class="dsq-postid" rel="4785 http://livemocha.com/?p=4785">18<br>Comments</span></a>				</div>
				
				<div class="line"></div>
				
				<div class="post-content">
					<div class="social_wrapper">
<div id="sap_facebook">
   <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=267673586580102" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowtransparency="true"></iframe>
</div>
<div id="sap_twitter">
	
	<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1347008535.html#_=1348971810226&amp;count=horizontal&amp;id=twitter-widget-30&amp;lang=en&amp;original_referer=http%3A%2F%2Flivemocha.com%2Fblog%2F&amp;size=m&amp;text=Livemocha%20-%20Blog&amp;url=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F" class="twitter-share-button twitter-count-horizontal" style="width: 110px; height: 20px; " title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
</div>
<div id="sap_google">
    <g:plusone size="medium" href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/"></g:plusone>
</div>
<div id="sap_pinterest">
    <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flivemocha.com%2Fblog%2F2012%2F07%2F27%2F10-tips-on-how-to-become-a-hyperpolyglot%2F" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','http://pinterest.com']);" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
</div>
</div><div class="clear"></div><p>This is so cool. We have a hyper polyglot in our midst! Geraldine contacted us wanting to contribute to the Livemocha Blog. How lucky are we that she has shared her tips on how to learn multiple languages (at this point she’s got about six under her belt!)</p>
<p>&nbsp;</p>
<p>Here’s Geraldine in her own words:</p>
<p>&nbsp;</p>
<p>Hello Livemocha!! I am Geraldine from Bogotá, Colombia.</p>
<p>I was exposed to Spanish and English at a young age (I lived in the States for 4 years) which was a challenge. I could understand everything my parents asked or told me in Spanish but would only answer back in English. Nonetheless, I became fluent once we were back in our home country.</p>
<p>I came to study languages by chance…. &nbsp;<a href="http://livemocha.com/blog/2012/07/27/10-tips-on-how-to-become-a-hyperpolyglot/" class="read-more">read more</a></p>
				</div>
				
		</div><!--.post-single-->

		
		
	
<div id="appendteachersto10"></div>
</div>
		<p><a href="#" id="anothert" style="display: inline; ">View Older Posts</a></p>
			
	</div>

</div>

</div>

</div><!--#content-->
	<?php include('sidebar.php');?>
		<div class="clear"></div>
	</div><!--.container-->
	
	<?php include('footer.php');?>		
</div><!--#main-->

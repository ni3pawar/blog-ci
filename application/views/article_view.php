<div id="left_wrapper">
<article>
<?php if (!empty($article['featured'])) { ?>
<img class="featuredimg" src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" title="<?php echo $article['title']; ?>" alt="<?php echo $article['title']; ?>" />
<?php } ?>
<h2><?php echo $article['title']; ?></h2>
<?php echo $article['body']; ?>
<div id="share">
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
<span class='st_sharethis_large' displayText='ShareThis'></span>
</div>
<div id="comments">
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE / all the code down there is for the comments on posts * * */
        var disqus_shortname = 'AsenTanevCiBlog'; // required: replace example with your forum shortname / tuk trqbvv da si smenite shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
</article>
</div>
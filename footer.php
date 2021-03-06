<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
          <?php if ($this->is('archives')): ?>
          <form id="search" method="post" action="./" role="search">
            <input type="text" class="text" name="s" placeholder="<?php _e("搜索"); ?>">
          </form>
          <?php endif; ?>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
    </div><!-- /.container -->
    
    <center>
      <footer class="blog-footer">
        <p>&copy;&nbsp;Copyright&nbsp;<?php echo date('Y'); ?>&nbsp;<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
          <?php if($this->options->beianNumber) : echo ' | '; ?>
            <a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->beianNumber(); ?></a>
          <?php endif; ?>
        </p>
        <p>Theme <a style="cursor:default;" href="https://www.metheno.net/">Kibou Lite</a> made with ♥</p>
      </footer>
    </center>

    <!-- Load Theme Dedicated JS -->
    <script src="<?php $this->options->themeUrl('js/highlight.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/loadup.js'); ?>"></script>
    
    
    <?php if ($this->options->analyticsGoogle): ?>
    <!-- Google Analytics -->
    <script>
      <?php $this->options->analyticsGoogle(); ?>
    </script>
    <?php endif; ?>

    <?php if ($this->options->enableMathJax == 1): ?>
    <!-- MathJax Supports -->
    <script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config({
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
          inlineMath: [ ['$','$'], ["\\(","\\)"] ],
          displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
          processEscapes: true
        },
        "HTML-CSS": { availableFonts: ["TeX"] }
      });
    </script>
    <?php endif; ?>
    
    <?php if ($this->options->enableAutoSpace == 1): ?>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/ASpace.js'); ?>"></script>
    <script type="text/javascript">
      aSpace(document.getElementsByClassName('blog-main'));
    </script>
    <?php endif; ?>

    <?php $this->footer(); ?>

  </body>
</html>
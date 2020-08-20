 </div>
 <div class="col-md-4">
      <div class="content-section article-title">        
        <h3>Latest Posts</h3>
          <ul class="list-group none">
        <?php if(empty($posts)): ?>
          <li class="list-group-item">No Post for <?= $title; ?></li>
        <?php endif; ?>     
        <?php foreach($posts as $post) : ?>
            <li class="list-group-item none">
            <a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo $post['title']; ?>
            </a></li>
        <?php endforeach; ?>
            
          </ul>
          <h3>Categories</h3>
          <ul class="list-group none">  
            <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/1'); ?>">News</a></li>
            <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/2'); ?>">Uncategorized</a></li>
            <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/3'); ?>">Instrumentals</a></li>
            <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/4'); ?>">DJ Mixes</a></li>
            <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/5'); ?>">Albums</a></li>
          </ul>
      </div>
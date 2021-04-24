
<div class="site-post">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Текст</th>
                </tr>
                <?php
                  foreach($posts as $post) {?>
                    <tr>
                      <td><?php echo $post['id']; ?></td>
                      <td><?php echo $post['text']; ?></td>

                  <?php 
                    /* Если не как массив, а объект
                      <td><?php echo $post->id; ?></td>
                      <td><?php echo $post->text; ?></td>
                    */ 
                  ?>
                    </tr>                  
                  <?}?>
              </table>              
            </div>
        </div>
    </div>
</div>

<?php
// echo '<pre>'.print_r($posts, true).'</pre>';
?>